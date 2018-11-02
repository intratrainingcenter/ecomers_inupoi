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

Route::prefix('Inupoi')->group(function(){
	Route::get('/Contact', 'frondend\FrondendController@contact')->name('Inupoi.Contact');
	Route::get('/About', 'frondend\FrondendController@about')->name('Inupoi.About');
	Route::get('/Produk', 'frondend\FrondendController@produk')->name('Inupoi.Produk');
	Route::get('/Transaksi', 'frondend\FrondendController@transaksi')->name('Inupoi.Transaksi');
	Route::get('/Detail', 'frondend\FrondendController@detail')->name('Inupoi.Detail');
	Route::get('/Favorite/{id}', 'backend\ProdukController@addfavorite');
	Route::get('/RemoveFavorite/{id}', 'backend\ProdukController@removefavorite');
	Route::get('/CountFavorite', 'backend\ProdukController@countfavorite');
});

Route::prefix('laporankeuangan')->group(function(){
	Route::get('/Filter', 'backend\LapKeuanganController@filter')->name('Filter.laporankeuangan');
});

Route::resource('Inupoi', 'frondend\FrondendController');
Route::resource('dashboard','backend\dashboardController');
Route::resource('barang','backend\ProdukController');
Route::resource('keranjang','backend\KeranjangController');
Route::resource('diskon','backend\DiskonController');
Route::resource('retur','backend\ReturController');
Route::resource('komentar','backend\KomentarController');
Route::resource('laporanbarang','backend\LabBarangController');
Route::resource('laporankeuangan','backend\LapKeuanganController');
Route::resource('laporantransaksi','backend\LapTransaksiController');
Route::resource('user','backend\UserController');
Route::resource('setting','backend\SettingController');
Route::resource('user','backend\UserController');
Route::resource('userprofile','backend\UserprofileController');
Route::resource('kategori','backend\kategoriController');
