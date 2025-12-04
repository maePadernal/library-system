<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = Book::all();
        $categories = Category::all();

        // Ensure books and categories exist
        if ($books->isEmpty() || $categories->isEmpty()) {
            return;
        }

        foreach ($books as $book) {
            // Pick 2 random categories per book
            $randomCategories = $categories->random(2);

            foreach ($randomCategories as $category) {
                DB::table('book_categories')->insert([
                    'book_id' => $book->id,
                    'category_id' => $category->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
