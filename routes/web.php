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

Route::get('/store/event_create', 'StoreController@event_create')->name('event_create');
Route::post('store/event_new', 'StoreController@event_new')->name('event_new');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('store')->namespace('store')->name('store.')->group(function(){
    Auth::routes();
    Route::get('/home', 'StoreHomeController@index')->name('store_home');
});
