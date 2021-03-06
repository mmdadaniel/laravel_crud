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

Route::group(['middleware' => 'web'], function(){
	Route::get('/', 'HomeController@index');

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/users', 'UsersController@index')->middleware('auth');
Route::get('/users/new', 'UsersController@new')->middleware('auth');
Route::post('/users/add', 'UsersController@add')->middleware('auth');
Route::get('/users/{id}/edit', 'UsersController@edit')->middleware('auth');
Route::post('/users/update/{id}', 'UsersController@update')->middleware('auth');
Route::delete('/users/delete/{id}', 'UsersController@delete')->middleware('auth');
