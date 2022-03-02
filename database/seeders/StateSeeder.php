<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state')->insert(['ad' => 'izmir']);
        DB::table('state')->insert(['ad' => 'muğla']);
        DB::table('state')->insert(['ad' => 'antalya']);
    }
}
