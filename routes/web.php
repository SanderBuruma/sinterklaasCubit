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

Route::resource('item', 'ItemController');
Auth::routes();

Route::get('verlanglijst/{slug}', ['as' => 'verlanglijst.single', 'uses'=>'VerlanglijstController@slug'])->where('slug', '[\w\d\-\_]+');

Route::get('/welcome', 'HomeController@index')->name('home');
