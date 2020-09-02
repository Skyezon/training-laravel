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

Route::get('/', 'ViewController@viewHome')->name('viewHome');
Route::post('/artikel/create','ArtikelController@create')->name('createArtikel');
Route::get('/artikel/show','ArtikelController@show')->name('showArtikel');

