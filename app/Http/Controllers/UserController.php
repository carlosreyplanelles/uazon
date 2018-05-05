<?php

namespace App\Http\Controllers;
use App\User;
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
}