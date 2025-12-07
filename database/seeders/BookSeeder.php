<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('books')->insert([
            [
                'name' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'stocks' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Pragmatic Programmer',
                'author' => 'Andrew Hunt & David Thomas',
                'stocks' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laravel Up & Running',
                'author' => 'Matt Stauffer',
                'stocks' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


         Book::factory()->count(100)->create();
    }
}
