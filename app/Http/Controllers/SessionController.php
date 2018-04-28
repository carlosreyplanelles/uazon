<?php

namespace App\Http\Controllers;
class SessionController extends Controller
{
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');
    }



}