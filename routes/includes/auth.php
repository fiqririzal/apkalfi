<?php

use Illuminate\Support\Facades\Route;


Route::get('/register','UserController@getRegister')->name('register');
Route::post('/register','UserController@postRegister');
Route::get('/login','UserController@getLogin')->name('login');
Route::post('/login','UserController@postLogin');
