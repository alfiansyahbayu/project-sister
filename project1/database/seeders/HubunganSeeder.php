<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HubunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_hubungan = [
            ['nama' => 'Kepala Keluarga'],
            ['nama' => 'Anak'],
            ['nama' => 'Menantu'],
            ['nama' => 'Cucu'],
            ['nama' => 'Orangtua'],
            ['nama' => 'Mertua'],
            ['nama' => 'Famili lain'],
            ['nama' => 'Pembantu'],
            ['nama' => 'lainnya']
        ];



        DB::table('hubungans')->insert($data_hubungan);
        DB::connection('mysql_2')->table('hubungans')->insert($data_hubungan);
    }
}
