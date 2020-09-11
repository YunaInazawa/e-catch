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

// TOP
Route::get('/', 'GuestController@home');

// イベント作成
Route::get('/store/event_create', 'StoreController@event_create')->name('event_create');
Route::post('/store/event_new', 'StoreController@event_new')->name('event_new');

// イベント一覧
Route::get('/event_list/{page}', 'GuestController@event_list')->name('event_list');

// 詳細
Route::get('/event_details/{id}', 'GuestController@event_details')->name('event_details');
Route::get('/user_details/{id}', 'GuestController@user_details')->name('user_details');
Route::get('/store_details/{id}', 'GuestController@store_details')->name('store_details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('store')->namespace('store')->name('store.')->group(function(){
    Auth::routes();
    Route::get('/home', 'StoreHomeController@index')->name('store_home');
});
