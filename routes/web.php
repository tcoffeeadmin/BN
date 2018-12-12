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

Route::get('/', function () {
    return view('Auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/call', 'HomeController@call')->name('call');
Route::get('/admin_home','HomeController@admin_home')->name('admin_home');

// Route::post('/admin_home','HomeController@call_action')->name('admin_home');

