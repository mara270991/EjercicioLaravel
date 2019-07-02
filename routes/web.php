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


Route::get('/actors', 'ActorController@index');

Route::get('/movies', 'MovieController@index');
Route::post('/movies', 'MovieController@store');
Route::get('/movies/create', 'MovieController@create');

Route::get('/actor', 'ActorController@index');
Route::post('/actor', 'ActorController@store');
Route::get('/actor/add', 'ActorController@create');
