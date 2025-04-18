<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MealUsageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expenses')->insert([
            [
                'date' => '2025-04-18',
                'stock_id' => 1, // Assuming stock_id 1 is an item like Apple
                'meal_time' => 'breakfast',
                'quantity_used' => 1.50,
                'cost_per_meal' => 0.75,
                'notes' => 'Used in smoothie.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => '2025-04-18',
                'stock_id' => 2, // Assuming stock_id 2 is Carrot
                'meal_time' => 'lunch',
                'quantity_used' => 0.75,
                'cost_per_meal' => 0.50,
                'notes' => 'Added to soup.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => '2025-04-17',
                'stock_id' => 3, // Assuming stock_id 3 is Chicken Breast
                'meal_time' => 'dinner',
                'quantity_used' => 2.00,
                'cost_per_meal' => 3.00,
                'notes' => 'Grilled and served with veggies.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => '2025-04-16',
                'stock_id' => 4, // Assuming stock_id 4 is Milk
                'meal_time' => 'breakfast',
                'quantity_used' => 0.5,
                'cost_per_meal' => 0.33,
                'notes' => 'Used for cereal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
