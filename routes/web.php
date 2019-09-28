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

Route::get('/','RootController@index')->name('Home');
Route::get('about','RootController@about')->name('About');
Route::get('contact','ContactController@create')->name('Contact');
Route::post('contact','ContactController@store')->name('contact.store');