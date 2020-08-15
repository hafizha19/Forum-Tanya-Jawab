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

Route::get('/', 'PertanyaansController@index');

Auth::routes();

Route::get('/home', 'PertanyaansController@index');
Route::get('/pertanyaans', 'PertanyaansController@index')->name('index');
Route::get('/pertanyaans/create', 'PertanyaansController@create')->name('pertanyaan.create');
Route::post('/pertanyaans', 'PertanyaansController@store')->name('pertanyaan.store');
Route::get('/pertanyaans/{pertanyaan}', 'PertanyaansController@show')->name('show');

Route::post('/pertanyaans/komentar', 'KomentarsController@store')->name('komentar.store');

// Route::get('/pertanyaans/jawaban', 'JawabansController@index');
Route::get('/pertanyaans/jawaban/create', 'JawabansController@create')->name('jawaban.create');
Route::post('/pertanyaans/jawaban', 'JawabansController@store')->name('jawaban.store');

Route::post('/pertanyaans/jawaban/komentar', 'KomentarJawabanController@store')->name('komentarjawaban.store');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});