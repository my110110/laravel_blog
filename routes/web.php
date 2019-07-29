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
Route::get('test-index', 'TestController@index')->name('test-index');
Route::get('test-send', 'TestController@send')->name('test-send');
Route::get('test-back', 'TestController@back')->name('test-back');
