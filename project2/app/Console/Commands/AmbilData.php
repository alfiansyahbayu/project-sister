<?php

namespace App\Console\Commands;

use App\Models\Desa;
use App\Models\Pekerjaan;
use App\Models\Api;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;
use PhpParser\Node\Stmt\If_;
use Illuminate\Support\Carbon;
use LengthException;

class AmbilData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ambil:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ambil data dari API';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $desas = Desa::all();
        $apis = Api::all();


        foreach ($desas as $desa) {
            foreach ($apis as $api) {
                $url = $desa->url_desa . $api->path_api;
                $data = file_get_contents($url);
                $data_baru = json_decode($data, true);
                if ($desa->nama == 'desa1' and $api->id == 1) {
                    $a = count($data_baru['data']);
                    for ($i = 0; $i <= $a - 1; $i++) {
                        DB::table('desa1_pekerjaans')->insert(
                            [
                                'nama' => $data_baru['data'][$i]['nama'],
                                'Jumlah_L' => $data_baru['data'][$i]['Jumlah_L'],
                                'Jumlah_P' => $data_baru['data'][$i]['Jumlah_P'],
                                'periode' => Carbon::now()->format('Y-m-d H:i:s'),
                            ]
                        );
                    }
                } elseif ($desa->nama == 'desa1' and $api->id == 2) {
                    $a = count($data_baru['data']);
                    for ($i = 0; $i <= $a - 1; $i++) {
                        DB::table('desa1_hubungans')->insert(
                            [
                                'nama' => $data_baru['data'][$i]['nama'],
                                'Jumlah_L' => $data_baru['data'][$i]['Jumlah_L'],
                                'Jumlah_P' => $data_baru['data'][$i]['Jumlah_P'],
                                'periode' => Carbon::now()->format('Y-m-d H:i:s'),
                            ]
                        );
                    }
                } elseif ($desa->nama == 'desa1' and $api->id == 3) {
                    $a = count($data_baru['data']);
                    for ($i = 0; $i <= $a - 1; $i++) {
                        DB::table('desa1_umur_rentangs')->insert(
                            [
                                'nama' => $data_baru['data'][$i]['nama'],
                                'Jumlah_L' => $data_baru['data'][$i]['Jumlah_L'],
                                'Jumlah_P' => $data_baru['data'][$i]['Jumlah_P'],
                                'periode' => Carbon::now()->format('Y-m-d H:i:s'),
                            ]
                        );
                    }
                } elseif ($desa->nama == 'desa2' and $api->id == 1) {
                    $a = count($data_baru['data']);
                    for ($i = 0; $i <= $a - 1; $i++) {
                        DB::table('desa2_pekerjaans')->insert(
                            [
                                'nama' => $data_baru['data'][$i]['nama'],
                                'Jumlah_L' => $data_baru['data'][$i]['Jumlah_L'],
                                'Jumlah_P' => $data_baru['data'][$i]['Jumlah_P'],
                                'periode' => Carbon::now()->format('Y-m-d H:i:s'),
                            ]
                        );
                    }
                } elseif ($desa->nama == 'desa2' and $api->id == 2) {
                    $a = count($data_baru['data']);
                    for ($i = 0; $i <= $a - 1; $i++) {
                        DB::table('desa2_hubungans')->insert(
                            [
                                'nama' => $data_baru['data'][$i]['nama'],
                                'Jumlah_L' => $data_baru['data'][$i]['Jumlah_L'],
                                'Jumlah_P' => $data_baru['data'][$i]['Jumlah_P'],
                                'periode' => Carbon::now()->format('Y-m-d H:i:s'),
                            ]
                        );
                    }
                } elseif ($desa->nama == 'desa2' and $api->id == 3) {
                    $a = count($data_baru['data']);
                    for ($i = 0; $i <= $a - 1; $i++) {
                        DB::table('desa2_umur_rentangs')->insert(
                            [
                                'nama' => $data_baru['data'][$i]['nama'],
                                'Jumlah_L' => $data_baru['data'][$i]['Jumlah_L'],
                                'Jumlah_P' => $data_baru['data'][$i]['Jumlah_P'],
                                'periode' => Carbon::now()->format('Y-m-d H:i:s'),
                            ]
                        );
                    }
                }
            }
        }
    }
}
