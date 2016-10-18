<?php

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
		Route::get('riwayat','PembayaranController@riwayat');
		Route::resource('pembayaran','PembayaranController');
	});

	/* ADMIN AREA*/
	Route::group(['prefix' => 'kelola'], function(){
		/* KELOLA PINJAMAN */
		Route::get('pinjaman/verifikasi/{id}',['as'=>'kelola.pinjaman.showverifikasi','uses'=>'KelolaPinjamanController@showVerifikasi']);
		Route::patch('pinjaman/verifikasi/{id}',['as'=>'kelola.pinjaman.verifikasi','uses'=>'KelolaPinjamanController@verifikasi']);
		Route::get('pinjaman/verifikasi','KelolaPinjamanController@daftarVerifikasi');
		Route::resource('pinjaman','KelolaPinjamanController');
		/* KELOLA SIMPANAN */
		Route::get('simpanan/verifikasi/{id}',['as'=>'kelola.simpanan.showverifikasi','uses'=>'KelolaSimpananController@showVerifikasi']);
		Route::patch('simpanan/verifikasi/{id}',['as'=>'kelola.simpanan.verifikasi','uses'=>'KelolaSimpananController@verifikasi']);
		Route::get('simpanan/verifikasi','KelolaSimpananController@daftarVerifikasi');
		Route::resource('simpanan','KelolaSimpananController');
		/* KELOLA PEMBAYARAN */
		Route::get('pembayaran/verifikasi/{id}',['as'=>'kelola.pembayaran.showverifikasi','uses'=>'KelolaPembayaranController@showVerifikasi']);
		Route::patch('pembayaran/verifikasi/{id}',['as'=>'kelola.pembayaran.verifikasi','uses'=>'KelolaPembayaranController@verifikasi']);
		Route::get('pembayaran/verifikasi','KelolaPembayaranController@daftarVerifikasi');
		Route::resource('pembayaran','KelolaPembayaranController');
		/* KELOLA BUNGA */
		Route::get('bunga/daftar-bunga','BungaController@daftarBunga');
		Route::resource('bunga','BungaController');
		/* KELOLA TABUNGAN */
		Route::resource('tabungan','KelolaTabunganController');
		/* KELOLA PRODUK */
		Route::resource('produk','KelolaProdukController');
		/* KELOLA AKUN */
		Route::get('akun/daftar-member','KelolaAkunController@daftarMember');
		Route::resource('akun','KelolaAkunController');
		/* LAPORAN */
		Route::resource('laporan','KelolaLaporanController');
		Route::get('laporan-pinjaman/{type}','LaporanController@laporanPinjaman');
		Route::get('laporan-pembayaran/{type}','LaporanController@laporanPembayaran');
		Route::get('laporan-simpanan/{type}','LaporanController@laporanSimpanan');
	});
	
});