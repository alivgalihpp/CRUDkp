<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/negara','NegaraController@index');

Route::get('/negara/add','NegaraController@add');

Route::post('/negara/store','NegaraController@store');

Route::get('/negara/edit/{id}','NegaraController@edit');

Route::post('/negara/update','NegaraController@update');

Route::get('/negara/delete/{id}','NegaraController@delete');
