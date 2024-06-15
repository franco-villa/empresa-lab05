<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

Route::view('/', 'home')->name('home');
Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas');
Route::get('personas/{id}','App\Http\Controllers\PersonasController@show')->name('personas.show');
Route::view('contacto', 'contacto')->name('contacto');


