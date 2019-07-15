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
    return view('welcome');
});


Route::get('/dashboard','AdminController@dashboard')->name('admin.dashboard');
Route::get('/login','LoginController@login')->name('admin.login');
Route::resource('produk','TblProdukController');
Route::resource('checkin','TblCheckInController');
Route::resource('checkout','TblCheckOutController');
Route::resource('supplier','TblSupplierController');
Route::get('/laporan','LaporanController@laporan')->name('admin.laporan');
Route::get('/tbhproduk','TblProdukController@create')->name('tbhproduk');
Route::get('/tbhcheckin','TblCheckinController@create')->name('tbhcheckin');
Route::post('/produk/store','TblProdukController@store');
Route::post('/checkin/store','TblCheckinController@store');
Route::get('/editproduk/{id}','TblProdukController@edit')->name('editproduk');
Route::put('/editproduk/update/{id}','TblProdukController@update');
Route::get('/hapusproduk/{id}','TblProdukController@hapus');

// Route::get('/laporan','LaporanController@laporan')->name('admin.laporan');

