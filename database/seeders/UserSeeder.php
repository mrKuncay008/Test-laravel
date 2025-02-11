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
            ['name' => 'user_jon', 'email' => 'jonuser@gmail.com', 'password' => Hash::make('admin12345')],
            ['name' => 'user_ben', 'email' => 'benuser@gmail.com', 'password' => Hash::make('admin12345')],
        ]);
    }
}
