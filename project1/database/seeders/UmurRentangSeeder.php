<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UmurRentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $data_umur = [
            ['nama' => 'Dibawah 1 tahun'],
            ['nama' => '2 s/d 4 tahun'],
            ['nama' => '5 s/d 9 tahun'],
            ['nama' => '10 s/d 14 tahun'],
            ['nama' => '15 s/d 19 tahun'],
            ['nama' => '20 s/d 24 tahun'],
            ['nama' => '25 s/d 29 tahun'],
            ['nama' => '30 s/d 34 tahun'],
            ['nama' => '35 s/d 39 tahun'],
            ['nama' => '40 s/d 44 tahun'],
            ['nama' => '45 s/d 49 tahun'],
            ['nama' => '50 s/d 54 tahun'],
            ['nama' => '55 s/d 59 tahun'],
            ['nama' => '60 s/d 64 tahun'],
            ['nama' => '65 s/d 69 tahun'],
            ['nama' => '70 s/d 74 tahun'],
            ['nama' => 'Diatas 75 tahun']
        ];

        DB::table('umur_rentangs')->insert($data_umur);
        DB::connection('mysql_2')->table('umur_rentangs')->insert($data_umur);
    }
}
