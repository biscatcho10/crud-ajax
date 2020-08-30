<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('ajax-crud', 'CategoryController');

Route::post('ajax-crud/update', 'CategoryController@update')->name('ajax-crud.update');

Route::get('ajax-crud/destroy/{id}', 'CategoryController@destroy');
