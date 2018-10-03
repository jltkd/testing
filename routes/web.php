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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index');
Route::get('/posts/new', 'PostController@create');
Route::post('/posts/new', 'PostController@store');
Route::get('/posts/{id}', 'PostController@show');

Route::get('/clients', 'ClientController@index');
Route::get('/clients/new', 'ClientController@create');
Route::post('/clients/new', 'ClientController@store');
Route::get('/clients/{id}', 'ClientController@show');
Route::get('/clients/edit/{id}', 'ClientController@edit');
Route::get('/clients/delete/{id}', 'ClientController@destroy');

Route::get('/contacts', 'ContactController@index');
Route::get('/contacts/new', 'ContactController@create');
Route::post('/contacts/new', 'ContactController@store');

