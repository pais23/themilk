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

//Halaman Sebelum Login
Route::get('/', "DashboardController@home");
Route::get('/home', "DashboardController@home");
Route::get('/produk', "DashboardController@produk");
Route::get('/about', "DashboardController@about");

//Halaman Login
Route::get('/login', 'AuthController@index')->name('login');
Route::post('/proses', 'AuthController@proses');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
//Halaman Setelah Login
Route::get('/admin', "DashboardController@index");
Route::get("/add-product","ProductController@create");
Route::post("/store-product","ProductController@store");
Route::get('/produk/{id}/edit', 'ProductController@edit');
Route::post('/produk/{id}/update', 'ProductController@update');
Route::get('/produk/{id}/delete', 'ProductController@delete');
});
