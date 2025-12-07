<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookDamagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('book_damages')->insert([
            [
                'borrowed_book_id'      => 1,
                'title'        => 'Introduction to Programming',
                'reason'       => 'Torn pages',
                'fines'        => 150,
                'paid_amount'  => 200,
                'change'       => 50,
                'status'       => 'PAID',
                'paid_at'      => Carbon::now()->timestamp, // if integer
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'borrowed_book_id'      => 2,
                'title'        => 'Database Systems',
                'reason'       => 'Water damage',
                'fines'        => 300,
                'paid_amount'  => 0,
                'change'       => 0,
                'status'       => 'UNPAID',
                'paid_at'      => 0, // no payment
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}
