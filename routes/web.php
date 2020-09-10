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

    Auth::routes(['verify' => true]);

    Auth::routes();

Route::get('/', 'ViewController@viewHome')->name('viewHome');
Route::prefix('artikel')->middleware('auth')->group(function () {
    Route::get('create','ArtikelController@viewCreateArtikel')->name('viewCreateArtikel');
    Route::post('create','ArtikelController@create')->name('createArtikel');
    Route::get('show','ArtikelController@show')->name('showArtikel');
    Route::get('{id}','ArtikelController@getArtikel')->name('getArtikel');
    Route::get('{id}/update','ArtikelController@showUpdate')->name('showUpdateArtikel');
    Route::patch('{id}','ArtikelController@update')->name('updateArtikel');
    Route::delete('{id}','ArtikelController@delete')->name('deleteArtikel');
});

//Route::get('/artikel/{id}/delete','ArtikelController@delete')->name('deleteArtikel');
Route::get('/mail','ArtikelController@sendMail')->name('sendMail');



Route::get('/home', 'HomeController@index')->name('home');
