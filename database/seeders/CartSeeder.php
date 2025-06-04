<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // ⬅️ Tambahkan baris ini
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $userCount = DB::table('users')->count();
        $productCount = DB::table('products')->count();

        foreach (range(1, 50) as $i) {
            \DB::table('carts')->insert([
                'user_id' => rand(1, 50), // Assuming you have 50 users
                'product_id' => rand(1, 50), // Assuming you have 50 products
                'quantity' => rand(1, 5), // Random quantity between 1 and 5
                'total' => $faker->randomFloat(2, 1000, 100000), // Random total between 1000 and 100000
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
