<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Libro;
use Carbon\Carbon;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return Libro::all();;
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
    /*public function update($request, $id)
    {
        if(!$id){
            throw new HttpException(400, "Invalid id");
        }

        $book= Libro::find($id);
        $mytime = Carbon::now();

        $book->isbn=$request->input('isbn');
        $book->voto=$request->input('voto');
        $book->num_voto=$request->input('num_voto');
        $book->n_pags=$request->input('n_pags');
        $book->precio=$request->input('precio');
        $book->titulo=$request->input('titulo');
        $book->editorial=$request->input('editorial');
        $book->atributos_extra=$request->input('atributos_extra');
        $book->updated_at= $mytime;

        if($book->save()){
            return $book;
        }

        throw new HttpException(400, "Invalid data");

    }*/

}
