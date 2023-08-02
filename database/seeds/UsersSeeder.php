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

		// sample member
		App\User::create([
			'name' => '',
			'email' => 'member@gmail.com',
			'password' => bcrypt('member'),
			'role' => 'member',
			'status' => 'aktif',
		]);
    }
}
