<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('product')->insert([
            [
                'name' => 'Product 1',
                'price' => 10000,
                'image' => 'product1.jpg',
                'product_category_id' => 1, // Pastikan kategori dengan ID ini ada di tabel categories
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 2',
                'price' => 15000,
                'image' => 'product2.jpg',
                'product_category_id' => 2, // Pastikan kategori dengan ID ini ada di tabel categories
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 3',
                'price' => 20000,
                'image' => 'product3.jpg',
                'product_category_id' => 1, // Pastikan kategori dengan ID ini ada di tabel categories
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Atau, kamu bisa menggunakan Faker untuk membuat data secara acak
        foreach (range(1, 10) as $index) {
            DB::table('product')->insert([
                'name' => $faker->word,
                'price' => $faker->numberBetween(1000, 50000),
                'image' => 'product' . $index . '.jpg',
                'product_category_id' => $faker->numberBetween(1, 5), // Pilih kategori secara acak
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
