<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');


        for ($i = 1; $i <= 10; $i++) {

            // $data_pekerjaan = $faker->unique()->jobTitle;

            DB::table('pekerjaans')->insert([
                // 'nama' => $data_pekerjaan
                'nama' => $faker->unique()->jobTitle
            ]);
            DB::connection('mysql_2')->table('pekerjaans')->insert([
                //'nama' => $data_pekerjaan
                'nama' => $faker->unique()->jobTitle
            ]);
        }
    }
}
