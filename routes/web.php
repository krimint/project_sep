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

Route::get('/', 'SiteController@login');
Route::post('doLogin','SiteController@doLogin');
Route::get('logout','SiteController@doLogout');
Route::get('register','SiteController@register');
Route::post('doRegister','SiteController@doRegister');

Route::prefix('admin')->middleware('CekRole:Admin')->group(function(){
    Route::get('/','Admin\SiteController@index');
});

Route::prefix('owner')->middleware('CekRole:Owner')->group(function(){
    Route::get('/','Owner\SiteController@index');
    Route::resource('obat','ObatController');
    Route::resource('users', 'UserController');
    Route::resource('supplier', 'SupplierController');
});

Route::prefix('user')->middleware('CekRole:User')->group(function(){
    Route::get('/','User\SiteController@index');
});
