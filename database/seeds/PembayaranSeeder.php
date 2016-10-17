<?php

use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$jumlah_pinjaman = 57600000;
    	$bayaran = 1200000;
        /* USER ID 2*/
        for ($i=1; $i <=48 ; $i++) { 
        	$sisa_pinjaman = $jumlah_pinjaman - $bayaran;
        	App\Pembayaran::create([
	    		'user_id' => 2,
				'nama' => 'Bella Syifa',
				'tanggal_pembayaran' => Carbon\Carbon::now(),
				'pinjaman_id' => '7',
				'angsuran_nomor' => $i,
				'jumlah_tagihan' => 1200000,
				'pokok' => 1100000,
				'bunga' => 100000,
				'jumlah_pembayaran' => 1200000,
				'jumlah_pembayaran_terbilang' => 'Satu juta dua ratus ribu rupiah',
				'cara_pembayaran' => 'auto-debit',
				'keterangan' => 'Pembayaran Pinjaman Ke - '. $i,
				'sisa_pinjaman' => $jumlah_pinjaman-=$bayaran,
				'status' => 'dibayar',
			]);
        }
    	
    }
}
