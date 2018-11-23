<?php

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

Route::group(['middleware' => ['auth']], function () {

    Route::get('/create', function () {
        return view('create');
    });

    Route::get('/join', function () {
        return view('join');
    });

    Route::get('/home', 'HomeController@index')->name('home');

});

Auth::routes();
