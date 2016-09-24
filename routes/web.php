<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/make',array('as' => 'make' , 'uses' => 'LinkController@make'));

Route::get('/{code}',array('as' => 'get' , 'uses' => 'LinkController@get'));