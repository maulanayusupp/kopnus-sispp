<?php

use Illuminate\Database\Seeder;

class TabunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tabungan::create([
			'produk_id' => 2,
			'user_id' => 2,
			'nama' => 'Bella Syifa',
			'alamat' => 'Subang',
			'kelurahan' => 'Pagaden',
			'kecamatan' => 'Pagaden',
			'nik' => '20394572',
			'tanggal_lahir' => '28-02-1996',
			'tanggal_pendaftaran' => '01-02-2013',
			'nama_ibu_kandung' => 'Hj. Yuyun',
			'jenis_kelamin' => 'Perempuan',
			'saldo_akhir' => 50000000,
			'status_rekening' => 'aktif',
			'pin' => bcrypt('123456'),
		]);
		App\Tabungan::create([
			'produk_id' => 5,
			'user_id' => 3,
			'nama' => 'Mitamufida',
			'alamat' => 'Batujajar',
			'kelurahan' => 'Batujajar',
			'kecamatan' => 'Batujajar',
			'nik' => '98943772',
			'tanggal_lahir' => '20-02-1996',
			'tanggal_pendaftaran' => '01-05-2013',
			'nama_ibu_kandung' => 'Hj. Geulis',
			'jenis_kelamin' => 'Perempuan',
			'saldo_akhir' => 50000000,
			'status_rekening' => 'aktif',
			'pin' => bcrypt('123456'),
		]);
    }
}
