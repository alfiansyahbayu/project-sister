<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_desa = [
            ['nama' => 'desa1', 'id_kecamatan' => 1, 'url_desa' => 'http://127.0.0.1:8000/api/desa1/v1'],
            ['nama' => 'desa2', 'id_kecamatan' => 1, 'url_desa' => 'http://127.0.0.1:8000/api/desa2/v1']
        ];
        DB::table('desas')->insert($data_desa);
    }
}
