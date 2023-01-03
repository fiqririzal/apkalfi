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
Require_once('includes/auth.php');
Route::group(['middleware' => ['auth'], ['role:Super Admin|Admin']], function () {

Route::get('/', function () {
    return view('welcome');
});
Route::get('/datapinjaman','PinjamanController@get');
Route::post('/peminjaman','PinjamanController@store');
Route::get('/peminjaman/create','PinjamanController@nomer');
Route::get('/peminjaman/print','PinjamanController@cetak_pdf');
Route::get('/pinjaman/edit/{id}','PinjamanController@edit');
Route::post('/pinjaman/edit/{id}','PinjamanController@update');


Route::get('/peminjaman/print/{id}','PinjamanController@print_pdf');
Route::get('/pinjaman/{id}','PinjamanController@destroy');
Route::get('/home',function(){
    return view('/layouts.home');
});
});

