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
Auth::routes();
Route::get('/', function () {
    return view('index');
})->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::resource('Inupoi', 'FrondendController')->middleware('auth');
Route::resource('dashboard','dashboardController')->middleware('auth');
Route::resource('kategori','KategoriController')->middleware('auth');
Route::resource('barang','ProdukController')->middleware('auth');
Route::resource('keranjang','KeranjangController')->middleware('auth');
Route::resource('diskon','DiskonController')->middleware('auth');
Route::resource('retur','ReturController')->middleware('auth');
Route::resource('komentar','KomentarController')->middleware('auth');
Route::resource('laporanbarang','LabBarangController')->middleware('auth');
Route::resource('laporankeuangan','LapKeuanganController')->middleware('auth');
Route::resource('laporantransaksi','LapTransaksiController')->middleware('auth');
Route::resource('user','UserController')->middleware('auth');
Route::resource('setting','SettingController')->middleware('auth');
Route::resource('user','UserController')->middleware('auth');
Route::resource('userprofile','UserprofileController')->middleware('auth');
Route::resource('kategori','kategoriController')->middleware('auth');
