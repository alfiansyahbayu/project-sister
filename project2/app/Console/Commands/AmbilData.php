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

                $a = $desa->nama;
                $b = $api->path_api;
                if ($a == 'desa1' &&  $b == '/pekerjaan') {
                    $url = $desa->url_desa . $api->path_api;
                    $data = file_get_contents($url);
                    $data_baru = json_decode($data, true);
                    DB::table('desa1_pekerjaans')->insert(
                        [
                            'nama' => $data_baru['data'][0]['nama'],
                            'Jumlah_L' => $data_baru['data'][0]['Jumlah_L'],
                            'Jumlah_P' => $data_baru['data'][0]['Jumlah_P'],
                            'periode' => Carbon::now()->format('Y-m-d H:i:s'),
                        ]
                    );
                    //$this->info($a);
                }
            }
        }
    }
}
