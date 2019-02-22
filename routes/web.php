<?php
use \Illuminate\Support\Facades\Route;
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

Route::get('/','DeptController@index')->name('ShowData');
Route::get('create','DeptController@create')->name('Show Create Page');
Route::post('store','DeptController@store')->name('Save Data');
Route::get('edit/{id}','DeptController@edit')->name('show old data');
Route::put('edit/{id}','DeptController@edit')->name('save new data');
Route::delete('delete/{id}','DeptController@destroy')->name('delete');
Route::get('/search','DeptController@search')->name('show search page');
Route::post('/search','DeptController@search')->name('show data');