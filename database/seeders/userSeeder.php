<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert([
            'username' => 'admin',
            'name' => 'Administrator Baru',
            'email' => 'admin.baru@admin.com',
            'created_at' => now(),
            'password' => Hash::make('password'),
        ])
    }
}
