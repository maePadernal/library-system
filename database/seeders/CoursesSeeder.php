<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
    {
        DB::table('courses')->insert([
            ['name' => 'Bachelor of Science in Information Technology', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bachelor of Science in Computer Science',       'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bachelor of Science in Business Administration','created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bachelor of Secondary Education',               'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bachelor of Arts in English',                   'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
