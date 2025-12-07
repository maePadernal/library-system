<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class BorrowedBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('borrowed_books')->insert([
            [
                'user_id'       => 1,
                'borrowed_from' => Carbon::parse('2025-01-05'),
                'borrowed_until'=> Carbon::parse('2025-01-15'),
                'returned_date' => Carbon::parse('2025-01-14'),
                'assist_by'     => 2,
                'created_at'    => now(),
                'updated_at'    => now(),
                'book_id'       => 1,

            ],
            [
                'user_id'       => 3,
                'borrowed_from' => Carbon::parse('2025-02-01'),
                'borrowed_until'=> Carbon::parse('2025-02-10'),
                'returned_date' => null, // not yet returned
                'assist_by'     => 1,
                'created_at'    => now(),
                'updated_at'    => now(),
                'book_id'       => 1,
            ],
        ]);
    }
}
