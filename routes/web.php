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

//Route::get('/admin/bakery/list', 'MilkController@index');
//Route::get('/admin/bakery/listc4', 'MilkController@index');
//Route::get('/admin/bakery/show', 'MilkController@show');
//Route::get('/admin/bakery/create', 'MilkController@create');
//Route::post('/admin/bakery/store', 'MilkController@store');
//Route::get('/admin/bakery/edit/{id}', 'MilkController@edit');
//Route::post('/admin/bakery/update', 'MilkController@update');
//Route::get('/admin/bakery/delete/{id}', 'MilkController@delete');
//Route::post('/admin/bakery/destroy/{id}', 'MilkController@destroy');

Route::resource('admin/milk', 'MilkController');


