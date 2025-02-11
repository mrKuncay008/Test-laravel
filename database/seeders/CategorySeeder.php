<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// Membuat instance Faker untuk data palsu
        $faker = Faker::create();

        // Menyisipkan beberapa kategori secara manual
        DB::table('categories')->insert([
            [
                'name' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home & Kitchen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sports & Outdoors',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Books',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Atau, kamu bisa menggunakan Faker untuk membuat kategori secara acak
        foreach (range(1, 10) as $index) {
            DB::table('categories')->insert([
                'name' => $faker->word,  // Menghasilkan nama kategori acak
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
