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

//    Auth::routes(['verify' => true]);

    Auth::routes();

Route::get('/', 'ViewController@viewHome')->name('viewHome');
Route::prefix('artikel')->group(function () {
    Route::get('show/my','ArtikelController@showUserArtikel')->name('showMyArtikel');
    Route::get('show','ArtikelController@show')->name('showArtikel');
    Route::get('show/{id}','ArtikelController@getArtikel')->name('getArtikel');
    Route::middleware('auth')->group(function (){
        Route::get('create','ArtikelController@viewCreateArtikel')->name('viewCreateArtikel');
        Route::post('create','ArtikelController@create')->name('createArtikel');
        Route::get('{id}/update','ArtikelController@showUpdate')->name('showUpdateArtikel');
        Route::patch('update/{id}','ArtikelController@update')->name('updateArtikel');
        Route::delete('delete/{id}','ArtikelController@delete')->name('deleteArtikel');
    });
});
Route::post('comment/{artikelId}','CommentController@create')->name('createComment');

//Route::get('/artikel/{id}/delete','ArtikelController@delete')->name('deleteArtikel');
Route::get('/mail','ArtikelController@sendMail')->name('sendMail');



Route::get('/home', 'HomeController@index')->name('home');
