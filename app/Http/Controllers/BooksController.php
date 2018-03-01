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
        return Libro::find($id);
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
            'isbn' => 'required|string|size:10|size:13',
            'n_pags' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:1',
            'titulo' => 'required|string|max:255',
            'editorial' => 'required|string',
            'atributos_extra' => 'required|json'
        ];

        $messages=[
            'required' => 'El campo :attribute es obligatorio',
            'string' => 'Formato de :attribute incorrecto. Se esperaba una cadena.',
            'integer' => 'Formato de :attribute incorrecto. Se esperaba un número entero.',
            'json' => 'Formato de :attribute incorrecto. Se esperaba una cadena json válida',
            'min:1' => 'Valor de :attribute incorrecto. Se esperaba un valor positivo',
            'max:255' => 'El valor de :attribute es demasiado largo'
            ];
        echo $request->getContentType();
        $validator=Validator::make($request->getContent(), $rules, $messages);
        $errors = $validator->errors();
        if ($validator->fails()) {
            foreach ($validator->errors() as $v){
                echo $v;
            }
            exit();
        }

        $mytime = Carbon::now();
        $book= new Libro;
        $book->isbn=$request->input('isbn');
        $book->n_pags=$request->input('n_pags');
        $book->precio=$request->input('precio');
        $book->titulo=$request->input('titulo');
        $book->editorial=$request->input('editorial');
        $book->atributos_extra=$request->input('atributos_extra');
        $book->voto=0;
        $book->num_voto=0;
        $book->created_at= $mytime;
        return $book;
        /*if($book->save()){

        }*/

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

        $book = Libro::find($request->id);
        $mytime = Carbon::now();
        if(gettype($request->input('isbn'))==NULL ||gettype($request->input('isbn'))!='string') {
            throw new HttpException(400, "Invalid data");

        } else {
            $book->isbn=$request->input('isbn');
        }

        if(gettype($request->input('voto'))==NULL || gettype($request->input('voto'))!='integer') {
            throw new HttpException(400, "Invalid data");

        } else {
            $book->voto=$request->input('voto');
        }

        if(gettype($request->input('num_voto'))==NULL || gettype($request->input('num_voto'))!='integer') {
            throw new HttpException(400, "Invalid data");

        }else {
            $book->num_voto=$request->input('num_voto');
        }

        if(gettype($request->input('n_pags'))==NULL || gettype($request->input('n_pags'))!='integer'){
            throw new HttpException(400, "Invalid data");

        }else {
            $book->n_pags=$request->input('n_pags');
        }

        if(gettype($request->input('precio'))==NULL || gettype($request->input('precio'))!='double'){
            throw new HttpException(400, "Invalid data");

        }else{
            $book->precio=$request->input('precio');
        }

        if(gettype($request->input('titulo'))==NULL ||gettype($request->input('titulo'))!='string') {
            throw new HttpException(400, "Invalid data");

        } else {
            $book->titulo=$request->input('titulo');
        }

        if(gettype($request->input('editorial'))==NULL ||gettype($request->input('editorial'))!='string') {
            throw new HttpException(400, "Invalid data");

        } else {
            $book->editorial=$request->input('editorial');
        }

        if(gettype($request->input('atributos_extra'))==NULL ||gettype($request->input('atributos_extra'))!='string') {
            throw new HttpException(400, "Invalid data");

        } else {
            $book->atributos_extra=$request->input('atributos_extra');
        }

        $book->updated_at = $mytime;

        if ($book->save()) {
            return $book;
        }

        throw new HttpException(400, "Invalid data");
    }

    public function comments($id){
        $comments = Comentarios::where('fk_libros', $id)->get();
        foreach ($comments as $c){
            echo $c->descripcion;
        }
    }
}
