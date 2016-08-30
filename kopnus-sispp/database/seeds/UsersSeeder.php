<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample admin
		App\User::create([
			'name' => 'Admin',
			'email' => 'admin@gmail.com',
			'password' => bcrypt('admin'),
			'role' => 'admin',
			'status' => 'aktif',
		]);
		// sample member
		App\User::create([
			'name' => 'Bella Syifa',
			'email' => 'bella@gmail.com',
			'password' => bcrypt('member'),
			'role' => 'member',
			'status' => 'aktif',
		]);
		// sample member
		App\User::create([
			'name' => 'Mitamufida',
			'email' => 'mita@gmail.com',
			'password' => bcrypt('member'),
			'role' => 'member',
			'status' => 'aktif',
		]);
		// sample member
		App\User::create([
			'name' => 'David Jones',
			'email' => 'david@gmail.com',
			'password' => bcrypt('member'),
			'role' => 'member',
			'status' => 'belum-aktif',
		]);
    }
}
