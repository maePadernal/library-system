<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\AccountInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountImfpormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  $user1 = User::where('email', 'test@example.com')->first();
        AccountInformation::create([
            'user_id' => $user1->id,
            'type' => 'student',
            'first_name' => 'alia',
            'last_name' => 'Dela Cruz',
            'student_type' => 'REGULAR',
            'course_name' => 'BSIT',
            'year_level' => '3',
            'student_id' => '2025-12345',
            'contact_number' => '09123456789',
            'address' => 'Isulan, Sultan Kudarat',
        ]);
        $user2 = User::where('email', 'juan@example.com')->first();
        AccountInformation::create([
            'user_id' => $user2->id,
            'type' => 'teacher',
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'student_type' => 'REGULAR',
            'course_name' => 'BSIT',
            'year_level' => '3',
            'student_id' => '2025-12345',
            'contact_number' => '09123456789',
            'address' => 'Isulan, Sultan Kudarat',
        ]);

        $user3 = User::where('email', 'maria@example.com')->first();
        AccountInformation::create([
            'user_id' => $user3->id,
            'type' => 'employee',
            'first_name' => 'Maria',
            'last_name' => 'Santos',
            'student_type' => 'N/A',
            'department' => 'ICT Department',
            'position' => 'Developer',
            'contact_number' => '09987654321',
            'address' => 'Tacurong City',
        ]);
    }
}
