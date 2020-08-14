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
    return view('pertanyaans.index');
});

Auth::routes();

Route::get('/pertanyaans', 'PertanyaansController@index')->name('index');
Route::get('/pertanyaans/create', 'PertanyaansController@create')->name('create');
Route::get('/pertanyaans/show', 'PertanyaansController@show')->name('show');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});