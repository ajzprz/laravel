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

// Routes for Guest users
Route::get('/','App\Http\Controllers\GuestController@index');

Auth::routes();

// Routes for admin
Route::get('admin/home', 'App\Http\Controllers\AdminController@index')->name('admin.route')->middleware('admin');
Route::post('admin/addproduct','App\Http\Controllers\AdminController@create')->name('addproduct');
Route::get('admin/editbook/{id}','App\Http\Controllers\AdminController@editbook')->name('admin_editbook');
Route::get('admin/editcd/{id}','App\Http\Controllers\AdminController@editcd')->name('admin_editcd');
Route::post('admin/updatebook/{id}','App\Http\Controllers\AdminController@updatebook')->name('admin_updatebook');
Route::post('admin/updatecd/{id}','App\Http\Controllers\AdminController@updatecd')->name('admin_updatecd');
Route::get('admin/deletebook/{id}','App\Http\Controllers\AdminController@destroybook')->name('admin_deletebook');
Route::get('admin/deletecd/{id}','App\Http\Controllers\AdminController@destroycd')->name('admin_deletecd');

// Routes for users
Route::get('/home','App\Http\Controllers\UserController@index')->name('home');
Route::post('user/addproduct','App\Http\Controllers\UserController@create')->name('user_addproduct');







