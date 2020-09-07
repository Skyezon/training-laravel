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
Route::get('/artikel/create','ArtikelController@viewCreateArtikel')->name('viewCreateArtikel');
Route::post('/artikel/create','ArtikelController@create')->name('createArtikel');
Route::get('/artikel/show','ArtikelController@show')->name('showArtikel');
Route::get('/artikel/{id}','ArtikelController@getArtikel')->name('getArtikel');
Route::get('/artikel/{id}/update','ArtikelController@showUpdate')->name('showUpdateArtikel');
Route::patch('/artikel/{id}','ArtikelController@update')->name('updateArtikel');
Route::delete('/artikel/{id}','ArtikelController@delete')->name('deleteArtikel');
//Route::get('/artikel/{id}/delete','ArtikelController@delete')->name('deleteArtikel');

