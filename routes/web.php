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
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('Inupoi', 'FrondendController');
Route::resource('dashboard','dashboardController');
Route::resource('kategori','KategoriController');
Route::resource('barang','ProdukController');
Route::resource('keranjang','KeranjangController');
Route::resource('diskon','DiskonController');
Route::resource('retur','ReturController');
Route::resource('komentar','KomentarController');
Route::resource('laporanbarang','LabBarangController');
Route::resource('laporankeuangan','LapKeuanganController');
Route::resource('laporantransaksi','LapTransaksiController');
Route::resource('user','UserController');
Route::resource('setting','SettingController');