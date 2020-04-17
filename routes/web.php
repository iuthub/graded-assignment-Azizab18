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

Route::get('/', array(
      'uses'=>'TaskController@getMain',
      'as'=>'main'
));

Route::get('/login', array(
      'uses'=>'AuthController@getLogin',
      'as'=>'login'
));

Route::post('/login', array(
      'uses'=>'AuthController@postLogin',
      'as'=>'login'
));