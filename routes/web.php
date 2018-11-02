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
Route::get('/admin', 'backend\dashboardController@index')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('Inupoi')->group(function(){
	Route::get('/Contact', 'frondend\FrondendController@contact')->name('Inupoi.Contact');
  Route::post('/sendmail', 'frondend\FrondendController@email')->name('Inupoi.sendmail');
<<<<<<< HEAD
=======

>>>>>>> ramadhani
	Route::get('/About', 'frondend\FrondendController@about')->name('Inupoi.About');
	Route::get('/Produk', 'frondend\FrondendController@produk')->name('Inupoi.Produk');
	Route::get('/Transaksi', 'frondend\FrondendController@transaksi')->name('Inupoi.Transaksi');
	Route::get('/Detail', 'frondend\FrondendController@detail')->name('Inupoi.Detail');
	Route::get('/Favorite/{id}', 'backend\ProdukController@addfavorite');
	Route::get('/RemoveFavorite/{id}', 'backend\ProdukController@removefavorite');
	Route::get('/CountFavorite', 'backend\ProdukController@countfavorite');
});
Route::put('/about_mission/{id}','backend\aboutController@update_mission')->name('about.update_mission')->middleware('auth');

Route::prefix('laporankeuangan')->group(function(){
	Route::get('/Filter', 'LapKeuanganController@filter')->name('Filter.laporankeuangan');
});

Route::get('Inupoi/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('Inupoi/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::resource('/', 'frondend\FrondendController');
Route::resource('dashboard','backend\dashboardController')->middleware('auth');
Route::resource('about','backend\aboutController')->middleware('auth');
Route::resource('kategori','backend\KategoriController')->middleware('auth');
Route::resource('barang','backend\ProdukController')->middleware('auth');
Route::resource('keranjang','backend\KeranjangController')->middleware('auth');
Route::resource('diskon','backend\DiskonController')->middleware('auth');
Route::resource('retur','backend\ReturController')->middleware('auth');
Route::resource('komentar','backend\KomentarController')->middleware('auth');
Route::resource('laporanbarang','backend\LabBarangController')->middleware('auth');
Route::resource('laporankeuangan','backend\LapKeuanganController')->middleware('auth');
Route::resource('laporantransaksi','backend\LapTransaksiController')->middleware('auth');
Route::resource('setting','backend\SettingController')->middleware('auth');
Route::resource('user','backend\UserController')->middleware('auth');
Route::resource('userprofile','backend\UserprofileController')->middleware('auth');

// frontEnd
Route::resource('fpro', 'frondend\FrontProductController');
Route::resource('Inupoi', 'frondend\FrondendController');
<<<<<<< HEAD

Route::prefix('laporankeuangan')->group(function(){
	Route::get('/Filter', 'backend\LapKeuanganController@filter')->name('Filter.laporankeuangan');
	Route::get('/SubTotal', 'backend\LapKeuanganController@subtotal');
});
=======
Route::resource('fcart', 'frondend\FrontCartController');
Route::resource('fdet', 'frondend\FrontdetailController');


//cart JS
Route::get('decart', 'frondend\FrontProductController@showcart');


>>>>>>> ramadhani
