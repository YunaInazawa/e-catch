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

Route::get('/', 'GuestController@home');
Route::get('/log_store', 'GuestController@log_store');
Route::get('/log_user', 'GuestController@log_user');
Route::get('/regi_store', 'GuestController@regi_store');
Route::get('/regi_user', 'GuestController@regi_user');
