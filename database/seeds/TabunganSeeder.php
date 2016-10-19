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
			'produk_id' => 1,
			'user_id' => 2,
			'saldo_akhir' => 0,
			'status_rekening' => 'aktif',
			'pin' => bcrypt('123456'),
		]);
		App\Tabungan::create([
			'produk_id' => 1,
			'user_id' => 3,
			'saldo_akhir' => 0,
			'status_rekening' => 'aktif',
			'pin' => bcrypt('123456'),
		]);
    }
}
