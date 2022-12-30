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
// Route::post('/peminjaman/id','PinjamanController@edit');
Route::get('/pinjaman/{id}','PinjamanController@destroy');
});

