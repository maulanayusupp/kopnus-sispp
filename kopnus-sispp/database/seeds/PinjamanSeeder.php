<?php

use Illuminate\Database\Seeder;

class PinjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* USER ID 2*/
    	App\Pinjaman::create([
			'user_id' => '2',
	        'kantor_juru_bayar' => 'Maju dan Makmur',
	        'pengelola_pensiun' => 'PT. Similikiti',
	        'no_surat_keputusan_pensiun' => 'SKT0948',
	        'no_identitas_pensiun' => 'ID34857',
	        'jenis_pinjaman' => 'makro',
	        'kegunaan_pinjaman' => 'Usaha',
	        'jumlah_pinjaman' => 45000000,
	        'jumlah_pinjaman_terbilang' => 'Empat Puluh Lima Juta Rupiah',
	        'jangka_waktu_pinjam' => '36',
	        'nama_kreditur' => 'Bella Syifa',
	        'no_rek_kreditur' => 'B3247498',
	        'sisa_angsuran_kreditur' => '1000000',
	        'sisa_angsuran_bulan_kreditur' => '1',
	        'penghasilan_bulanan_kreditur' => '7000000',
	        'status' => 'aktif',
		]);
		for ($i=0; $i <5 ; $i++) { 
			App\Pinjaman::create([
				'user_id' => '2',
		        'kantor_juru_bayar' => 'Maju dan Makmur',
		        'pengelola_pensiun' => 'PT. Similikiti',
		        'no_surat_keputusan_pensiun' => 'SKT0948',
		        'no_identitas_pensiun' => 'ID34857',
		        'jenis_pinjaman' => 'makro',
		        'kegunaan_pinjaman' => 'Usaha',
		        'jumlah_pinjaman' => 35000000,
		        'jumlah_pinjaman_terbilang' => 'Tiga Puluh Lima Juta Rupiah',
		        'jangka_waktu_pinjam' => '36',
		        'nama_kreditur' => 'Bella Syifa',
		        'no_rek_kreditur' => 'B3247498',
		        'sisa_angsuran_kreditur' => '0',
		        'sisa_angsuran_bulan_kreditur' => '0',
		        'penghasilan_bulanan_kreditur' => '7000000',
		        'status' => 'lunas',
			]);
		}		
        App\Pinjaman::create([
			'user_id' => '2',
	        'kantor_juru_bayar' => 'Maju dan Makmur',
	        'pengelola_pensiun' => 'PT. Similikiti',
	        'no_surat_keputusan_pensiun' => 'SKT0948',
	        'no_identitas_pensiun' => 'ID34857',
	        'jenis_pinjaman' => 'makro',
	        'kegunaan_pinjaman' => 'Usaha',
	        'jumlah_pinjaman' => 50000000,
	        'jumlah_pinjaman_terbilang' => 'Lima Puluh Juta Rupiah',
	        'jangka_waktu_pinjam' => '36',
	        'nama_kreditur' => 'Bella Syifa',
	        'no_rek_kreditur' => 'B3247498',
	        'sisa_angsuran_kreditur' => '1000000',
	        'sisa_angsuran_bulan_kreditur' => '1',
	        'penghasilan_bulanan_kreditur' => '7000000',
	        'status' => 'menunggu',
		]);
		
		/* USER ID 3 */
		for ($i=0; $i <5 ; $i++) { 
			App\Pinjaman::create([
				'user_id' => '3',
		        'kantor_juru_bayar' => 'Maju dan Makmur',
		        'pengelola_pensiun' => 'PT. Similikiti',
		        'no_surat_keputusan_pensiun' => 'SKT0948',
		        'no_identitas_pensiun' => 'ID34857',
		        'jenis_pinjaman' => 'makro',
		        'kegunaan_pinjaman' => 'Usaha',
		        'jumlah_pinjaman' => 75000000,
		        'jumlah_pinjaman_terbilang' => 'Tujuh Puluh Lima Juta Rupiah',
		        'jangka_waktu_pinjam' => '36',
		        'nama_kreditur' => 'Mitamufida',
		        'no_rek_kreditur' => 'B3247498',
		        'sisa_angsuran_kreditur' => '0',
		        'sisa_angsuran_bulan_kreditur' => '0',
		        'penghasilan_bulanan_kreditur' => '7000000',
		        'status' => 'lunas',
			]);
		}
		App\Pinjaman::create([
			'user_id' => '3',
	        'kantor_juru_bayar' => 'Maju dan Makmur',
	        'pengelola_pensiun' => 'PT. Similikiti',
	        'no_surat_keputusan_pensiun' => 'SKT0948',
	        'no_identitas_pensiun' => 'ID34857',
	        'jenis_pinjaman' => 'makro',
	        'kegunaan_pinjaman' => 'Usaha',
	        'jumlah_pinjaman' => 45000000,
	        'jumlah_pinjaman_terbilang' => 'Empat Puluh Lima Juta Rupiah',
	        'jangka_waktu_pinjam' => '36',
	        'nama_kreditur' => 'Mitamufida',
	        'no_rek_kreditur' => 'B3247498',
	        'sisa_angsuran_kreditur' => '1000000',
	        'sisa_angsuran_bulan_kreditur' => '1',
	        'penghasilan_bulanan_kreditur' => '7000000',
	        'status' => 'aktif',
		]);
		App\Pinjaman::create([
			'user_id' => '3',
	        'kantor_juru_bayar' => 'Maju dan Makmur',
	        'pengelola_pensiun' => 'PT. Similikiti',
	        'no_surat_keputusan_pensiun' => 'SKT0948',
	        'no_identitas_pensiun' => 'ID34857',
	        'jenis_pinjaman' => 'makro',
	        'kegunaan_pinjaman' => 'Usaha',
	        'jumlah_pinjaman' => 50000000,
	        'jumlah_pinjaman_terbilang' => 'Lima Puluh Juta Rupiah',
	        'jangka_waktu_pinjam' => '36',
	        'nama_kreditur' => 'Mitamufida',
	        'no_rek_kreditur' => 'B3247498',
	        'sisa_angsuran_kreditur' => '1000000',
	        'sisa_angsuran_bulan_kreditur' => '1',
	        'penghasilan_bulanan_kreditur' => '7000000',
	        'status' => 'menunggu',
		]);
		
		
    }
}
