<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // ⬅️ Tambahkan baris ini
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            \DB::table('products')->insert([
                'category_id' => rand(1, 10), // Assuming you have 10 categories
                'name' => $faker->word,
                'description' => $faker->sentence,
                'stock' => rand(1, 100),
                'price' => $faker->randomFloat(2, 1000, 100000), // Price between 5 and 1000
                'image' => $faker->imageUrl(),
            ]);
        }
    }
}
