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

Route::get('/', 'PertanyaansController@index')->withoutMiddleware('auth');

Auth::routes();

Route::get('/pertanyaans/create', 'PertanyaansController@create')->name('pertanyaan.create');
Route::post('/pertanyaans', 'PertanyaansController@store')->name('pertanyaan.store');
Route::get('/pertanyaans/{pertanyaan}', 'PertanyaansController@show')->name('show');

// Tombol Up Down
Route::post('/pertanyaans/updown', 'PoinPertanyaanController@store')->name('pertanyaan.like');
Route::post('/jawaban/updown', 'PoinJawabanController@store')->name('jawaban.like');

// Komentar Pertanyaan
Route::post('/pertanyaans/komentar', 'KomentarsController@store')->name('komentar.store');

// Jawaban
Route::get('/pertanyaans/jawaban/create', 'JawabansController@create')->name('jawaban.create');
Route::post('/pertanyaans/jawaban', 'JawabansController@store')->name('jawaban.store');

// Komentar Jawaban
Route::post('/pertanyaans/jawaban/komentar', 'KomentarJawabanController@store')->name('komentarjawaban.store');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});