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

Route::get('authors' , array('uses' => 'authors@index' , 'as' => 'authors'));
Route::get('author/{id}' , array('uses' => 'authors@view' , 'as' => 'author'));
Route::get('authors/new' , array('uses' => 'authors@news' ,'as' => 'new_author' ));
Route::post('authors/create' , array('uses' => 'authors@create','as' => 'authors.create' ));

Auth::routes();

Route::get('/home', 'HomeController@index');
