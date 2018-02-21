<?php

use Illuminate\Http\Request;
use App\Libro;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('libros', 'BooksController@index');
Route::get('libros/{id}', 'BooksController@show');
Route::post('libros', 'BooksController@store');
//Route::put('libros/{id}', 'BooksController@update');


