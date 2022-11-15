<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@multi.com',
            'email_verified_at' => '2020-08-07 17:00:00',
            'role' => 'admin',
            'avatar' => 'uploads/users/default.png',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);
    }
}
