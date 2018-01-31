<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('App\Http\Middleware\checkIpLang');
    }

    public function show( Request $request) {

        return view('review.content', ['seo_title'=>'Review']);
    }

    public function store(Request $request){
        $input = $request->except('_token');
        print_r($input);

    }
}
