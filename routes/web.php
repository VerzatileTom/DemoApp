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

Auth::routes();

Route::get('/', 'ArticlesController@index')->name('articles');
Route::get('articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::post('articles', 'ArticlesController@store')->name('articles.store');
Route::patch('articles/{article}', 'ArticlesController@update')->name('articles.update');
Route::get('articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
