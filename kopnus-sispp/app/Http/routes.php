<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* LANDING PAGE */
Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'web'], function () {
	/* AUTHENTICATION AND AUTHORIZATION */
	Route::auth();
	/* PROFIL */
	Route::resource('profil','ProfilController');
	/* USER */	
	Route::get('/home', 'HomeController@index');
	
	/* MEMBER AREA*/
	/* AKTIVASI (STATUS MEMBER BELUM AKTIF)*/
	Route::resource('aktivasi','AktivasiController');
	/* PINJAMAN */
	Route::group(['prefix' => 'pinjaman'], function(){
		Route::get('meminjam','PinjamanController@meminjam');
		Route::get('riwayat','PinjamanController@riwayat');
		Route::post('riwayat','PinjamanController@riwayat');
		Route::resource('pinjaman','PinjamanController');
	});	
	/* SIMPANAN */
	Route::group(['prefix' => 'simpanan'], function(){
		Route::get('menyimpan','SimpananController@menyimpan');
		Route::get('riwayat','SimpananController@riwayat');
		Route::resource('simpanan','SimpananController');
	});	
	/* PEMBAYARAN */
	Route::group(['prefix' => 'pembayaran'], function(){
		Route::get('pembayaran','PembayaranController@pembayaran');
		Route::get('riwayat','PembayaranController@riwayat');
		Route::resource('pembayaran','PembayaranController');
	});

	/* ADMIN AREA*/
	Route::group(['prefix' => 'kelola'], function(){
		/* KELOLA PINJAMAN */
		Route::get('pinjaman/verifikasi/{id}',['as'=>'kelola.pinjaman.showverifikasi','uses'=>'KelolaPinjamanController@showVerifikasi']);
		Route::patch('pinjaman/verifikasi/{id}',['as'=>'kelola.pinjaman.verifikasi','uses'=>'KelolaPinjamanController@verifikasi']);
		Route::resource('pinjaman','KelolaPinjamanController');
		/* KELOLA SIMPANAN */
		Route::get('simpanan/verifikasi/{id}',['as'=>'kelola.simpanan.showverifikasi','uses'=>'KelolaSimpananController@showVerifikasi']);
		Route::patch('simpanan/verifikasi/{id}',['as'=>'kelola.simpanan.verifikasi','uses'=>'KelolaSimpananController@verifikasi']);
		Route::resource('simpanan','KelolaSimpananController');
		/* KELOLA PEMBAYARAN */
		Route::resource('pembayaran','KelolaPembayaranController');
		/* KELOLA BUNGA */
		Route::resource('bunga','BungaController');
		/* KELOLA TABUNGAN */
		Route::resource('tabungan','KelolaTabunganController');
		/* KELOLA PRODUK */
		Route::resource('produk','KelolaProdukController');
		/* KELOLA AKUN */
		Route::resource('akun','KelolaAkunController');
	});
	
});