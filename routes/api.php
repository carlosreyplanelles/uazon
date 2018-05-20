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

Route::post('login', '\App\Http\Controllers\Auth\APIController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('libros', 'BooksController@libros');
    Route::get('libros/{id}', 'BooksController@libro');
    route::get('libros/{id}/comments', 'BooksController@comments');
    Route::post('libros', 'BooksController@store');
    Route::put('libros/{id}', 'BooksController@update');
    Route::delete('libros/{id}', 'BooksController@delete');
    Route::get('autores', 'AuthorsController@autores');
    Route::get('autores/{id}', 'AuthorsController@autor');
    Route::post('autores', 'AuthorsController@store');
    Route::put('autores/{id}', 'AuthorsController@update');
    Route::delete('autores/{id}', 'AuthorsController@delete');
    Route::get('users', 'UserController@findAll');
    Route::post('users', 'UserController@store');
    Route::put('users/{id}', 'UserController@update');
    Route::delete('users/{id}', 'UserController@delete');
});


