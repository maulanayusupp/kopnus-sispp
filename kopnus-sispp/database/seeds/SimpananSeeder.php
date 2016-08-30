<?php

use Illuminate\Database\Seeder;

class SimpananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* ID USER 2 */
        App\Simpanan::create([
			'user_id' => '2',
	        'kartu_atm' => 'KRT9823',
	        'nomor_kartu_atm' => '0923854235',
	        'nilai_penempatan' => 950000,
	        'nilai_penempatan_terbilang' => 'Sembilan Puluh Lima Juta Rupiah',
	        'jangka_waktu' => '36',
	        'tingkat_imbalan' => '10',
	        'status_perpanjangan' => 'aktif',
	        'nota_perpanjangan' => 'Diambil Sendiri',
	        'nota_perpanjangan_dikirim' => '-',
	        'nama_referensi' => '-',
	        'status' => 'aktif',
		]);
		for ($i=0; $i <5 ; $i++) { 
			App\Simpanan::create([
				'user_id' => '2',
		        'kartu_atm' => 'KRT9823',
		        'nomor_kartu_atm' => '0923854235',
		        'nilai_penempatan' => 950000,
		        'nilai_penempatan_terbilang' => 'Sembilan Puluh Lima Juta Rupiah',
		        'jangka_waktu' => '36',
		        'tingkat_imbalan' => '10',
		        'status_perpanjangan' => 'aktif',
		        'nota_perpanjangan' => 'Diambil Sendiri',
		        'nota_perpanjangan_dikirim' => '-',
		        'nama_referensi' => '-',
		        'status' => 'aktif',
			]);
		}		
        App\Simpanan::create([
			'user_id' => '2',
	        'kartu_atm' => 'KRT9823',
	        'nomor_kartu_atm' => '0923854235',
	        'nilai_penempatan' => 950000,
	        'nilai_penempatan_terbilang' => 'Sembilan Puluh Lima Juta Rupiah',
	        'jangka_waktu' => '36',
	        'tingkat_imbalan' => '10',
	        'status_perpanjangan' => 'aktif',
	        'nota_perpanjangan' => 'Diambil Sendiri',
	        'nota_perpanjangan_dikirim' => '-',
	        'nama_referensi' => '-',
	        'status' => 'aktif',
		]);

		/* ID USER 3 */
		App\Simpanan::create([
			'user_id' => '3',
	        'kartu_atm' => 'KRT982345',
	        'nomor_kartu_atm' => '092347654',
	        'nilai_penempatan' => 950000,
	        'nilai_penempatan_terbilang' => 'Sembilan Puluh Lima Juta Rupiah',
	        'jangka_waktu' => '36',
	        'tingkat_imbalan' => '10',
	        'status_perpanjangan' => 'aktif',
	        'nota_perpanjangan' => 'Diambil Sendiri',
	        'nota_perpanjangan_dikirim' => '-',
	        'nama_referensi' => '-',
	        'status' => 'aktif',
		]);
		for ($i=0; $i <5 ; $i++) { 
			App\Simpanan::create([
				'user_id' => '3',
		        'kartu_atm' => 'KRT982345',
		        'nomor_kartu_atm' => '092347654',
		        'nilai_penempatan' => 950000,
		        'nilai_penempatan_terbilang' => 'Sembilan Puluh Lima Juta Rupiah',
		        'jangka_waktu' => '36',
		        'tingkat_imbalan' => '10',
		        'status_perpanjangan' => 'aktif',
		        'nota_perpanjangan' => 'Diambil Sendiri',
		        'nota_perpanjangan_dikirim' => '-',
		        'nama_referensi' => '-',
		        'status' => 'aktif',
			]);
		}		
        App\Simpanan::create([
			'user_id' => '3',
	        'kartu_atm' => 'KRT982345',
	        'nomor_kartu_atm' => '092347654',
	        'nilai_penempatan' => 950000,
	        'nilai_penempatan_terbilang' => 'Sembilan Puluh Lima Juta Rupiah',
	        'jangka_waktu' => '36',
	        'tingkat_imbalan' => '10',
	        'status_perpanjangan' => 'aktif',
	        'nota_perpanjangan' => 'Diambil Sendiri',
	        'nota_perpanjangan_dikirim' => '-',
	        'nama_referensi' => '-',
	        'status' => 'aktif',
		]);
    }
}
