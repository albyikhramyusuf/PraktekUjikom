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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
     Route::get('/', function () {
        return view('backend.bidangstudi.index');
     });
    Route::resource('bidangstudi', 'BidangStudiController');
    Route::resource('kompetensikeahlian', 'KompetensikeahlianController');
    Route::resource('user', 'UserController');
});


Route::get('/home', 'HomeController@index')->name('home');

