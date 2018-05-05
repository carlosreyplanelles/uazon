<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Carbon\Carbon;

class profileController extends Controller
{
    public function show($userid){
        $user = User::find($userid);
        return view('/profile.content', ['seo_title'=>'Perfil', 'user'=>$user]);
    }

    public function update(Request $request, $userid)
    {

        $rules= [
            'name' => 'string|max:255|min:6',
            'email' => 'email'
        ];

        $messages=[
            'email' => 'Formato del correo invalido.',
            'string' => 'Formato de :attribute incorrecto. Se esperaba un valor alfanumérico.',
            'min:6' => 'Valor de :attribute incorrecto. Nombre demasiado corto.',
            'max:255' => 'El valor de :attribute es demasiado largo.'
        ];

        $validator=Validator::make($request->input(), $rules, $messages);

        if ($validator->fails()) {
            $errors=$validator->errors();
            foreach ($errors->all() as $message) {
                echo $message.'<br>';
            }
            exit();
        }


        $user = User::find($userid);
        if(gettype($request->input('name'))!=NULL){
            $user->name=$request->input('name');
        }
        if(gettype($request->input('email'))!=NULL ){
            $user->email=$request->input('email');
        }
        if ($user->save()) {
            return $user;
        }
    }
}