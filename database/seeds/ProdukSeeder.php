<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Produk::create([
			'nama' => 'Tabungan SiKopNus',
		]);
        App\Produk::create([
            'nama' => 'Deposito (Simpanan Berjangka 1-3-6-12)',
        ]);
    }
}
