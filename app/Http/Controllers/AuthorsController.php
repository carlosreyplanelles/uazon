<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Autor;

class AuthorsController extends Controller
{
    public function autores(){
        return Autor::all();
    }

    public function autor($id){
        $autor=Autor::find($id);
        if ($autor==null){
            abort(404, 'error 404: recurso no encontrado.');
        }
        return $autor;
    }

    public function store(Request $request)
    {
        $rules= [
            'nombre' => 'required|string|max:255',
        ];

        $messages=[
            'required' => 'El campo :attribute es obligatorio',
            'string' => 'Formato de :attribute incorrecto. Se esperaba una cadena.',
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

        $autor= new Autor();

        $autor->nombre = $request->input('nombre');


        if($autor->save()){
            return $autor;
        }

    }

    public function update(Request $request)
    {

        $rules= [
            'nombre' => 'string|max:255',
        ];

        $messages=[
            'string' => 'Formato de :attribute incorrecto. Se esperaba una cadena.',
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


        $autor = Autor::find($request->id);
        if(gettype($request->input('nombre'))!=NULL){
            $autor->nombre=$request->input('nombre');
        }

        if ($autor->save()) {
            return $autor;
        }
    }

    public function delete($id){
        $autor=Autor::find($id);
        if ($autor==null){
            abort(404, 'error 404: recurso no encontrado.');
        }
        $autor->delete();

    }


}