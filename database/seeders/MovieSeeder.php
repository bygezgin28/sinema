<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie')->insert(['cinema_id' => json_encode([1,2,3]) ,'ad' => 'Mutlu Canavar Ailesi 2']);
        DB::table('movie')->insert(['cinema_id' => json_encode([3,6]) ,'ad' => 'The Batman 2022']);
        DB::table('movie')->insert(['cinema_id' => json_encode([7,9]) ,'ad' => 'Adanış Kutsal Kavga']);
        DB::table('movie')->insert(['cinema_id' => json_encode([1,3]) ,'ad' => '6 Numaralı Kompartıman']);
        DB::table('movie')->insert(['cinema_id' => json_encode([1,2,7]) ,'ad' => 'Soygun Oyunu: Büyük Vurgun']);
        DB::table('movie')->insert(['cinema_id' => json_encode([9,5,4]) ,'ad' => 'Afacanlar: İş Başa Düştü']);
        DB::table('movie')->insert(['cinema_id' => json_encode([9,8]) ,'ad' => 'Kaptan Pengu ve Arkadaşları 2']);
        DB::table('movie')->insert(['cinema_id' => json_encode([5,7,8]) ,'ad' => 'Örümcek-Adam: Eve Dönüş Yok']);
        DB::table('movie')->insert(['cinema_id' => json_encode([1,8]) ,'ad' => 'Aslan Hürkuş Kayıp Elmas']);
    }
}
