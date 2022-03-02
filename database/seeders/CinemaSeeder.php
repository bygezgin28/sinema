<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cinema')->insert(['state_id' => 1 ,'ad' => 'Cinemaximum İzmir Park']);
        DB::table('cinema')->insert(['state_id' => 1 ,'ad' => 'Cinemaximum Optimum İzmir']);
        DB::table('cinema')->insert(['state_id' => 1 ,'ad' => 'İzmir Karaca Sineması']);

        DB::table('cinema')->insert(['state_id' => 2 ,'ad' => 'Cinemaximum Bodrum Midtown']);
        DB::table('cinema')->insert(['state_id' => 2 ,'ad' => 'Prestige Sineması Muğla']);
        DB::table('cinema')->insert(['state_id' => 2 ,'ad' => 'Muğla Prestige Rüya Park']);

        DB::table('cinema')->insert(['state_id' => 3 ,'ad' => 'Cinemaximum MarkAntalya']);
        DB::table('cinema')->insert(['state_id' => 3 ,'ad' => 'Cinemaximum Antalya Migros']);
        DB::table('cinema')->insert(['state_id' => 3 ,'ad' => 'Antalya Megapol']);
    }
}
