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

Route::get('/', 'LoadMoreController@index');
Route::post('/loadmore/load_data', 'LoadMoreController@load_data')->name('loadmore.load_data');

Route::get('/template', 'TemplateController@index');
Route::get('/category', 'CategoryController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');