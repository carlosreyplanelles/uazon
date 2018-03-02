<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Libro;
use App\Comentarios;
use Carbon\Carbon;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return Libro::all();
    }

    public function libros(){
        return Libro::all();
    }

    public function libro($id){
        $libro=Libro::find($id);
        if ($libro==null){
            abort(404, 'error 404: recurso no encontrado.');
        }
        return $libro;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules= [
            'isbn' => 'required|integer|digits:9',
            'n_pags' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:1',
            'titulo' => 'required|string|max:255',
            'editorial' => 'required|string',
            'atributos_extra' => 'required|json'
        ];

        $messages=[
            'required' => 'El campo :attribute es obligatorio',
            'digits' => 'La longitud del campo :attribute es incorrecta',
            'string' => 'Formato de :attribute incorrecto. Se esperaba una cadena.',
            'integer' => 'Formato de :attribute incorrecto. Se esperaba un número entero.',
            'json' => 'Formato de :attribute incorrecto. Se esperaba una cadena json válida',
            'min:1' => 'Valor de :attribute incorrecto. Se esperaba un valor positivo',
            'max:255' => 'El valor de :attribute es demasiado largo'
            ];

        $validator=Validator::make($request->input(), $rules, $messages);

        if ($validator->fails()) {
            $errors=$validator->errors();
            foreach ($errors->all() as $message) {
                echo $message.'<br>';
            }
            exit();
        }

        //$mytime = Carbon::now();
        $book= new Libro;
        $book->isbn=$request->input('isbn');
        $book->n_pags=$request->input('n_pags');
        $book->precio=$request->input('precio');
        $book->titulo=$request->input('titulo');
        $book->editorial=$request->input('editorial');
        $book->atributos_extra=$request->input('atributos_extra');
        $book->voto=0;
        $book->num_voto=0;
        //$book->created_at= $mytime;

        if($book->save()){
            return $book;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return libro($id);
    }

    /**
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $rules= [
            'isbn' => 'integer|digits:9',
            'n_pags' => 'integer|min:1',
            'precio' => 'numeric|min:1',
            'titulo' => 'string|max:255',
            'editorial' => 'string',
            'atributos_extra' => 'json'
        ];

        $messages=[
            'digits' => 'La longitud del campo :attribute es incorrecta',
            'string' => 'Formato de :attribute incorrecto. Se esperaba una cadena.',
            'integer' => 'Formato de :attribute incorrecto. Se esperaba un número entero.',
            'json' => 'Formato de :attribute incorrecto. Se esperaba una cadena json válida',
            'min:1' => 'Valor de :attribute incorrecto. Se esperaba un valor positivo',
            'max:255' => 'El valor de :attribute es demasiado largo'
        ];

        $validator=Validator::make($request->input(), $rules, $messages);

        if ($validator->fails()) {
            $errors=$validator->errors();
            foreach ($errors->all() as $message) {
                echo $message.'<br>';
            }
            exit();
        }


        $book = Libro::find($request->id);
        if(gettype($request->input('isbn'))!=NULL){
            $book->isbn=$request->input('isbn');
        }
        if(gettype($request->input('voto'))!=NULL ){
            $book->voto=$request->input('voto');
        }
        if(gettype($request->input('num_voto'))!=NULL ) {
            $book->num_voto=$request->input('num_voto');
        }
        if(gettype($request->input('n_pags'))!=NULL){
            $book->n_pags=$request->input('n_pags');
        }
        if(gettype($request->input('precio'))!=NULL){
            $book->precio=$request->input('precio');
        }

        if(gettype($request->input('titulo'))!=NULL){
            $book->titulo=$request->input('titulo');
        }

        if(gettype($request->input('editorial'))!=NULL){
            $book->editorial=$request->input('editorial');
        }

        if(gettype($request->input('atributos_extra'))!=NULL ){
            $book->atributos_extra=$request->input('atributos_extra');
        }
        if ($book->save()) {
            return $book;
        }
    }

    public function comments($id){
        if (Libro::find($id)==null){
            abort(404, 'error 404: recurso no encontrado.');
        }
        $comments = Comentarios::where('fk_libros', $id)->get();
        foreach ($comments as $c){
            echo $c->descripcion;
        }
    }
    public function delete($id){
        $libro=Libro::find($id);
        if ($libro==null){
            abort(404, 'error 404: recurso no encontrado.');
        }
        $libro->delete();

    }
}
