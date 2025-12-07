<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServiceRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('service_rates')->insert([
            [
                'user_id'           => 1,
                'rate'              => 5,
                'suggestion_message'=> 'Great service! Very fast and helpful.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'user_id'           => 2,
                'rate'              => 4,
                'suggestion_message'=> 'Good but can improve on response time.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'user_id'           => 3,
                'rate'              => 3,
                'suggestion_message'=> 'Average experience. Some delays encountered.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}
