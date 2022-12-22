<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_api = [
            ['path_api' => '/pekerjaan '],
            ['path_api' => '/hubungan '],
            ['path_api' => '/umur-rentang ']
        ];
        DB::table('apis')->insert($data_api);
    }
}
