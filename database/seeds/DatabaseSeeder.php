<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(BungaSeeder::class);
        $this->call(ProdukSeeder::class);
        //$this->call(PinjamanSeeder::class);
        //$this->call(SimpananSeeder::class);
        //$this->call(PembayaranSeeder::class);
        //$this->call(TabunganSeeder::class);
        
        
    }
}
