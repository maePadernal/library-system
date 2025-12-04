<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BookCategorySeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\AccountImfpormationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([

            UserSeeder::class,
             AccountImfpormationSeeder::class,
             PostSeeder::class,
             BookSeeder::class,
             BookCategorySeeder::class
            ]);


    }
}
