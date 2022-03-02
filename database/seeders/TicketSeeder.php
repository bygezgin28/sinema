<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket')->insert(['user_id'=>1,'seans_id'=>51,'koltuk_no' => json_encode([2,3,5])]);
        DB::table('ticket')->insert(['user_id'=>1,'seans_id'=>51,'koltuk_no' => json_encode([9])]);
        DB::table('ticket')->insert(['user_id'=>1,'seans_id'=>51,'koltuk_no' => json_encode([11])]);
    }
}
