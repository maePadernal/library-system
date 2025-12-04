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
            [
                'name' => 'Fiction',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Non-Fiction',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Science & Technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Education',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'History',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
