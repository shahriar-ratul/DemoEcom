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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// superadmin Routes
Route::group(['as'=>'superadmin.','prefix'=>'superadmin','middleware'=>['superadmin','auth'],'namespace'=>'superadmin'],function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

// Admin Routes
Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

// Manager Routes
Route::group(['as'=>'manager.','prefix'=>'manager','middleware'=>['manager','auth'],'namespace'=>'manager'],function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

// User Routes
Route::group(['as'=>'user.','prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
