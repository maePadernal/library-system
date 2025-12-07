<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmsLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('sms_logs')->insert([
            [
                'sender_id'    => 1,
                'receiver_id'  => 5,
                'message'      => 'Your disbursement voucher has been approved.',
                'phone_number' => 912345678,
                'context'      => 'FINANCE_ALERT',
                'sent_at'      => Carbon::now()->subMinutes(30),
                'status'       => 'SENT',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'sender_id'    => 2,
                'receiver_id'  => 8,
                'message'      => 'Your liquidation report has been returned for revision.',
                'phone_number' => 987654321,
                'context'      => 'LIQUIDATION_NOTICE',
                'sent_at'      => Carbon::now()->subHours(1),
                'status'       => 'FAILED',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'sender_id'    => 1,
                'receiver_id'  => 3,
                'message'      => 'Reminder: Progress report due tomorrow.',
                'phone_number' => 912556677,
                'context'      => 'PROGRESS_REMINDER',
                'sent_at'      => Carbon::now()->subDays(1),
                'status'       => 'SENT',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}
