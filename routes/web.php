<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/reviews', 'ReviewController@show')->name('reviews_get');
Route::get('/books/{id}', 'BooksController@show')->name('book_Detail');
route::get('/books', 'BooksController@index')->name('books');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Cart
Route::post('cart/add', 'CartController@add')->name('cartAdd');
Route::get('cart', 'CartController@show')->name('showCart');


//Profile
Route::get('profile/{userid}', 'profileController@show')->name('profile');
Route::post('profile/{userid}', 'profileController@update')->name('updateProfile');

//Facebook
route::get('facebook', 'Auth\LoginController@facebook')->name('facebookCall');
route::get('login/facebook', 'Auth\LoginController@loginFacebook')->name('facebookLogin');