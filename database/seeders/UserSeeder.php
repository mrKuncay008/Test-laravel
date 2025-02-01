<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Pren Jon', 'email' => 'prenundira@gmail.com', 'password' => Hash::make('admin12345')],
            ['name' => 'Pren Bos', 'email' => 'prenjhon@gmail.com', 'password' => Hash::make('admin12345')],
        ]);
    }
}
