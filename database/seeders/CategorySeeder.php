<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Vegetables', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fruits', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dairy', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Meat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Grains', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
