<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function findByEmail($email){
        $user=User::where('email', '=', $email)->first();
        if($user === null){
            return null;
        }
        else{
            return $user;
        }
    }
    function findAll(){
        return User::all();
    }

    function createUser($user){
        try {
            $user['password'] = bcrypt($user['password']);
            $user = User::create($user);
            return $user;
        }
        catch(Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }

    }

    public function store(Request $request)
    {
        $rules= [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'string|max:255',
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

        $user= new User();
        $user-> name=$request->input('name');
        $user-> password=$request->input('password');
        $user-> email=$request->input('email');
        $user ->address=$request->input('address');

        if($user->save()){
            return $user;
        }

    }

    public function update(Request $request)
    {
        $user = User::find($request->id);

            $rules= [
                'name' => 'required|string',
                'password' => 'required',
                'address' => 'string|max:255',
            ];
            $messages=[
                'string' => 'Formato de :attribute incorrecto. Se esperaba una cadena.',
                'email' => 'Se esperaba una dirección de correo electrónico en :attribute',
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

            if(gettype($request->input('name'))!=NULL){
                $user->isbn=$request->input('name');
            }
            if ($request->input('password')!= null )
            {
                $user->password=$request->input('password');
            }
            if(gettype($request->input('address'))!=NULL) {
                $user->address = $request->input('address');
            }
            if ($user->save()) {
                return $user;
            }
    }

    public function delete($id){
        $user=User::find($id);
        if ($user==null){
            abort(404, 'error 404: recurso no encontrado.');
        }
        $user->delete();

    }
}