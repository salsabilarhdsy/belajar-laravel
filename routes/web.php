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

Route::get('/ListProducts', 'ListProductController@listProducts')->middleware('auth');
Route::get('/newproduct', 'NewProductController@index')->middleware('auth');
Route::get('/editproduct/{id}', 'NewProductController@show')->middleware('auth');
Route::post('/editproduct_proses/{id}', 'NewProductController@editProduct')->middleware('auth');
Route::get('/deleteproduct_proses/{id}', 'NewProductController@deleteProduct')->middleware('auth');
Route::post('/newproduct_proses', 'NewProductController@store')->middleware('auth');
Route::get('/', 'DashboardController@index')->middleware('auth');
Route::get('/getBarang/{no_product}', 'DashboardController@getBarang');
Route::post('/simpanOrder', 'DashboardController@simpanOrder')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
