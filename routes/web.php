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
<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('Inupoi/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('Inupoi/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::resource('Inupoi', 'FrondendController');
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
=======
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('Inupoi')->group(function(){
	Route::get('/Contact', 'FrondendController@contact')->name('Inupoi.Contact');
	Route::get('/About', 'FrondendController@about')->name('Inupoi.About');
	Route::get('/Produk', 'FrondendController@produk')->name('Inupoi.Produk');
	Route::get('/Transaksi', 'FrondendController@transaksi')->name('Inupoi.Transaksi');
	Route::get('/Detail', 'FrondendController@detail')->name('Inupoi.Detail');
});

Route::prefix('laporankeuangan')->group(function(){
	Route::get('/Filter', 'LapKeuanganController@filter')->name('Filter.laporankeuangan');
});

Route::resource('Inupoi', 'FrondendController');
Route::resource('dashboard','dashboardController');
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
Route::resource('user','UserController');
Route::resource('userprofile','UserprofileController');
Route::resource('kategori','kategoriController');
>>>>>>> migration
