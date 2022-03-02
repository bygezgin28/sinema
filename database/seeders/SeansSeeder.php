<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seans')->insert(['cinema_id' => 1, 'movie_id'=>1 ,'koltuk_sayisi'=>50 ,'saat' => '13:00']);
        DB::table('seans')->insert(['cinema_id' => 1, 'movie_id'=>1 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 1, 'movie_id'=>2 ,'koltuk_sayisi'=>50 ,'saat' => '13:00']);
        DB::table('seans')->insert(['cinema_id' => 1, 'movie_id'=>2 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 1, 'movie_id'=>5 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 1, 'movie_id'=>5 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);
        DB::table('seans')->insert(['cinema_id' => 1, 'movie_id'=>9 ,'koltuk_sayisi'=>50 ,'saat' => '20:00']);
        DB::table('seans')->insert(['cinema_id' => 1, 'movie_id'=>9 ,'koltuk_sayisi'=>50 ,'saat' => '22:00']);

        DB::table('seans')->insert(['cinema_id' => 2, 'movie_id'=>1 ,'koltuk_sayisi'=>50 ,'saat' => '13:00']);
        DB::table('seans')->insert(['cinema_id' => 2, 'movie_id'=>1 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);
        DB::table('seans')->insert(['cinema_id' => 2, 'movie_id'=>5 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 2, 'movie_id'=>5 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);

        DB::table('seans')->insert(['cinema_id' => 3, 'movie_id'=>1 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 3, 'movie_id'=>1 ,'koltuk_sayisi'=>50 ,'saat' => '13:00']);
        DB::table('seans')->insert(['cinema_id' => 3, 'movie_id'=>2 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 3, 'movie_id'=>2 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 3, 'movie_id'=>4 ,'koltuk_sayisi'=>50 ,'saat' => '12:00']);
        DB::table('seans')->insert(['cinema_id' => 3, 'movie_id'=>4 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);
        DB::table('seans')->insert(['cinema_id' => 3, 'movie_id'=>9 ,'koltuk_sayisi'=>50 ,'saat' => '23:00']);
        DB::table('seans')->insert(['cinema_id' => 3, 'movie_id'=>9 ,'koltuk_sayisi'=>50 ,'saat' => '22:00']);

        DB::table('seans')->insert(['cinema_id' => 4, 'movie_id'=>1 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 4, 'movie_id'=>1 ,'koltuk_sayisi'=>50 ,'saat' => '13:00']);
        DB::table('seans')->insert(['cinema_id' => 4, 'movie_id'=>2 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 4, 'movie_id'=>2 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 4, 'movie_id'=>3 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 4, 'movie_id'=>3 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);
        DB::table('seans')->insert(['cinema_id' => 4, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 4, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '22:00']);

        DB::table('seans')->insert(['cinema_id' => 5, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 5, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '13:00']);
        DB::table('seans')->insert(['cinema_id' => 5, 'movie_id'=>8 ,'koltuk_sayisi'=>50 ,'saat' => '12:00']);
        DB::table('seans')->insert(['cinema_id' => 5, 'movie_id'=>8 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 5, 'movie_id'=>9 ,'koltuk_sayisi'=>50 ,'saat' => '14:00']);
        DB::table('seans')->insert(['cinema_id' => 5, 'movie_id'=>9 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);

        DB::table('seans')->insert(['cinema_id' => 6, 'movie_id'=>2 ,'koltuk_sayisi'=>50 ,'saat' => '12:00']);
        DB::table('seans')->insert(['cinema_id' => 6, 'movie_id'=>2 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 6, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '13:00']);
        DB::table('seans')->insert(['cinema_id' => 6, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);

        DB::table('seans')->insert(['cinema_id' => 7, 'movie_id'=>3 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 7, 'movie_id'=>3 ,'koltuk_sayisi'=>50 ,'saat' => '18:00']);
        DB::table('seans')->insert(['cinema_id' => 7, 'movie_id'=>4 ,'koltuk_sayisi'=>50 ,'saat' => '13:00']);
        DB::table('seans')->insert(['cinema_id' => 7, 'movie_id'=>4 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 7, 'movie_id'=>5 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 7, 'movie_id'=>5 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 7, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '14:00']);
        DB::table('seans')->insert(['cinema_id' => 7, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);
        DB::table('seans')->insert(['cinema_id' => 7, 'movie_id'=>8 ,'koltuk_sayisi'=>50 ,'saat' => '20:00']);
        DB::table('seans')->insert(['cinema_id' => 7, 'movie_id'=>8 ,'koltuk_sayisi'=>50 ,'saat' => '23:00']);

        DB::table('seans')->insert(['cinema_id' => 8, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 8, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '13:00']);
        DB::table('seans')->insert(['cinema_id' => 8, 'movie_id'=>7 ,'koltuk_sayisi'=>50 ,'saat' => '14:00']);
        DB::table('seans')->insert(['cinema_id' => 8, 'movie_id'=>7 ,'koltuk_sayisi'=>50 ,'saat' => '16:00']);
        DB::table('seans')->insert(['cinema_id' => 8, 'movie_id'=>8 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 8, 'movie_id'=>8 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);
        DB::table('seans')->insert(['cinema_id' => 8, 'movie_id'=>9 ,'koltuk_sayisi'=>50 ,'saat' => '20:00']);
        DB::table('seans')->insert(['cinema_id' => 8, 'movie_id'=>9 ,'koltuk_sayisi'=>50 ,'saat' => '22:00']);

        DB::table('seans')->insert(['cinema_id' => 9, 'movie_id'=>1 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 9, 'movie_id'=>1 ,'koltuk_sayisi'=>50 ,'saat' => '13:00']);
        DB::table('seans')->insert(['cinema_id' => 9, 'movie_id'=>3 ,'koltuk_sayisi'=>50 ,'saat' => '17:00']);
        DB::table('seans')->insert(['cinema_id' => 9, 'movie_id'=>3 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);
        DB::table('seans')->insert(['cinema_id' => 9, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '11:00']);
        DB::table('seans')->insert(['cinema_id' => 9, 'movie_id'=>6 ,'koltuk_sayisi'=>50 ,'saat' => '19:00']);
        DB::table('seans')->insert(['cinema_id' => 9, 'movie_id'=>7 ,'koltuk_sayisi'=>50 ,'saat' => '14:00']);
        DB::table('seans')->insert(['cinema_id' => 9, 'movie_id'=>7 ,'koltuk_sayisi'=>50 ,'saat' => '22:00']);

    }
}
