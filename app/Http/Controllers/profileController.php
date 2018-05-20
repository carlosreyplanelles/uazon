<?php

namespace App\Http\Controllers;
use App\Libros_pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Libro;
use App\User;
use App\Order;

class profileController extends Controller
{
    public function show($userid){

        $user = User::find($userid);
        $Libros = Libro::all();
        $libros = array();
        foreach($Libros as $libro){
            $libros[$libro->id] = $libro->titulo;
        }
        $pedidos = Order::where('fk_usuarios', $userid)->get();

        $lineas = array();
        foreach($pedidos as $o)
        {
            $lineas[$o->id]= Libros_pedidos::all()->where('fk_pedidos',$o->id);
        }

        return view('/profile.content', ['seo_title'=>'Perfil', 'user'=>$user, 'pedidos'=>$pedidos,'lineas'=>$lineas, 'libros'=> $libros]);
    }

    public function update(Request $request, $userid)
    {
        $user = User::find($userid);

        if(Hash::check($request->input('pswd'),$user->password))
        {
            $rules= [
                'name' => 'string|max:255|min:6',
                'password' => 'string',
                'address' => 'string'

            ];

            $messages=[
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

            if(gettype($request->input('name'))!=NULL){
                $user->name=$request->input('name');
            }
            if(gettype($request->input('address'))!=NULL ){
                $user->address=$request->input('address');
            }

            if ($request->input('newPswd') != null)
            {
                if($request->input('newPswd') == $request->input('newPswdConfirm')){
                    $user->password = bcrypt($request->input('newPswd'));
                }
                else {
                    echo("La nueva contraseña no se ha introducido correctamente. Comprueba que los campos destinados a la nueva contraseña coiniciden.");
                }

            }
            if ($user->save()) {
                return $user;
            }
        }
        else{
            echo("Introduce tu contraseña actual para validar la actualización");
        }


    }
}