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

Route::get('/books','App\Http\Controllers\BooksController@index');
Route::get('/books/tambah','App\Http\Controllers\BooksController@tambah');
Route::post('/books/store','App\Http\Controllers\BooksController@store');
Route::get('/books/hapus/{id}','App\Http\Controllers\BooksController@hapus');
Route::get('/books/edit/{id}','App\Http\Controllers\BooksController@edit');
Route::post('/books/update','App\Http\Controllers\BooksController@update');