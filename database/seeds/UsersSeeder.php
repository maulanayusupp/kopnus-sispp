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
        // sample admin id 1
		App\User::create([
			'name' => 'Admin',
			'email' => 'admin@gmail.com',
			'password' => bcrypt('admin'),
			'role' => 'admin',
			'status' => 'aktif',
		]);
		// sample member id 2
		App\User::create([
			'name' => 'Bella Syifa',
			'email' => 'bella@gmail.com',
			'password' => bcrypt('member'),
			'role' => 'member',
			'status' => 'aktif',
		]);
		// sample member id 2
		App\User::create([
			'name' => 'Mitamufida',
			'email' => 'mitamufida@gmail.com',
			'password' => bcrypt('member'),
			'role' => 'member',
			'status' => 'aktif',
		]);
		// sample member id 4
		// App\User::create([
		// 	'name' => '',
		// 	'email' => 'tahu@gmail.com',
		// 	'password' => bcrypt('member'),
		// 	'role' => 'member',
		// 	'status' => 'belum-aktif',
		// ]);
    }
}
