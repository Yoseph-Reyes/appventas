<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'testController@welcome');
Route::get('/prueba', function () {
    return 'hola soy una prueba';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
