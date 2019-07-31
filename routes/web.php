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
Route::get('category-index', 'CategoryController@index')->name('category-index');
Route::get('category-store', 'CategoryController@store')->name('category-store');
Route::get('test-back', 'TestController@back')->name('test-back');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
