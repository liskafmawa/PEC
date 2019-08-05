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
Route::auth();

Route::group(['middleware'=>'auth'], function() {
	Route::get('/', 'TransaksiController@index');
	Route::get('/admin', 'AdminController@index');

	Route::get('/pelanggan', 'PelangganController@index');
	Route::get('/pelanggan/add', 'PelangganController@create');
	Route::post('/pelanggan/add', 'PelangganController@store');
	Route::get('/pelanggan/{id}/edit', 'PelangganController@edit');
	Route::patch('/pelanggan/{id}/edit', 'PelangganController@update');
	Route::delete('/pelanggan/{id}/delete', 'PelangganController@destroy');
	Route::get('/pelanggan/cari','PelangganController@cari');

	Route::get('/barang', 'BarangController@index');
	Route::get('/barang/add', 'BarangController@create');
	Route::post('/barang/add', 'BarangController@store');
	Route::get('/barang/{id}/edit', 'BarangController@edit');
	Route::patch('/barang/{id}/edit', 'BarangController@update');
	Route::delete('/barang/{id}/delete', 'BarangController@destroy');
	Route::get('/barang/cari', 'BarangController@cari');

	Route::get('/transaksi', 'TransaksiController@index');

});

Route::get('/home','UserHomeController@index');
Route::get('/produk','UserHomeController@indexbarang');
Route::get('/user/cari', 'UserHomeController@cari');

Route::get('/loginuser','UserLoginController@index');
Route::get('/home','UserLoginController@masuk');

Route::get('/register','UserRegisterController@index');
Route::post('/register','UserRegisterController@store');

