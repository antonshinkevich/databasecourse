<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('hello', function () {
    $name = 'Alexey';
    return view('hello', compact('name'));
});*/

Route::get('hello', function () {
    $tasks = [
    'add task', 'find task', 'sinii kit'
    ];

    return view('hello', compact('tasks'));
    });




Route::auth();

Route::get('/home', 'HomeController@index');
