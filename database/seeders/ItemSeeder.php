<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stocks')->insert([
            [
                'item_name' => 'Apple',
                'category_id' => 2, // Assuming category 2 is Fruits
                'estimated_servings' => 5.00,
                'unit' => 'kg',
                'purchase_price' => 3.50,
                'purchase_date' => '2025-04-18',
                'track_once' => true,
                'fully_used' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'Carrot',
                'category_id' => 1, // Assuming category 1 is Vegetables
                'estimated_servings' => 4.00,
                'unit' => 'kg',
                'purchase_price' => 2.00,
                'purchase_date' => '2025-04-16',
                'track_once' => true,
                'fully_used' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'Chicken Breast',
                'category_id' => 4, // Assuming category 4 is Meat
                'estimated_servings' => 10.00,
                'unit' => 'kg',
                'purchase_price' => 15.00,
                'purchase_date' => '2025-04-15',
                'track_once' => false,
                'fully_used' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'Milk',
                'category_id' => 3, // Assuming category 3 is Dairy
                'estimated_servings' => 15.00,
                'unit' => 'liters',
                'purchase_price' => 10.00,
                'purchase_date' => '2025-04-17',
                'track_once' => false,
                'fully_used' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
