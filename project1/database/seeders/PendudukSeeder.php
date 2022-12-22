<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');


        for ($i = 1; $i <= 100; $i++) {

            DB::table('penduduks')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'jenis_kelamin' => $faker->randomElement($array = array('Laki-laki', 'Perempuan')),
                'tanggal_lahir' => $faker->date,
                'pekerjaan_id' => $faker->numberBetween(1, 10),
                'umur_rentang_id' => $faker->numberBetween(1, 17),
                'hubungan_id' => $faker->numberBetween(1, 9),

            ]);
            DB::connection('mysql_2')->table('penduduks')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'jenis_kelamin' => $faker->randomElement($array = array('Laki-laki', 'Perempuan')),
                'tanggal_lahir' => $faker->date,
                'pekerjaan_id' => $faker->numberBetween(1, 10),
                'umur_rentang_id' => $faker->numberBetween(1, 17),
                'hubungan_id' => $faker->numberBetween(1, 9),
            ]);
        }
    }
}
