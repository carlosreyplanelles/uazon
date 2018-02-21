<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return Libro::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mytime = Carbon::now();
        $book= new Libro;
        $book->isbn=$request->input('isbn');
        $book->voto=$request->input('voto');
        $book->num_voto=$request->input('num_voto');
        $book->n_pags=$request->input('n_pags');
        $book->precio=$request->input('precio');
        $book->titulo=$request->input('titulo');
        $book->editorial=$request->input('editorial');
        $book->atributos_extra=$request->input('atributos_extra');
        $book->created_at= $mytime;

        if($book->save()){
            return $book;
        }
        throw new HttpException(400, "Invalid data");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Libro::find($id);
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
