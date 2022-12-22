<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HubunganController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
        $hubungan = DB::table('hubungans')
            ->select('hubungans.nama')
            ->selectSub('SELECT COUNT(penduduks.id) AS Jumlah_L FROM penduduks WHERE  penduduks.hubungan_id=hubungans.id AND penduduks.jenis_kelamin="Laki-laki"', 'Jumlah_L')
            ->selectSub('SELECT COUNT(penduduks.id) AS Jumlah_P  FROM penduduks WHERE penduduks.hubungan_id=hubungans.id AND penduduks.jenis_kelamin="Perempuan"', 'Jumlah_P')
            ->join('penduduks', 'hubungans.id', '=', 'penduduks.hubungan_id')
            ->groupBy('hubungans.nama')
            ->get();


        return response()->json([
            'status' => true,
            'data' => $hubungan
        ]);
    }

    public function index2()
    {
        $hubungan = DB::connection('mysql_2')->table('hubungans')
            ->select('hubungans.nama')
            ->selectSub('SELECT COUNT(penduduks.id) AS Jumlah_L FROM penduduks WHERE  penduduks.hubungan_id=hubungans.id AND penduduks.jenis_kelamin="Laki-laki"', 'Jumlah_L')
            ->selectSub('SELECT COUNT(penduduks.id) AS Jumlah_P  FROM penduduks WHERE penduduks.hubungan_id=hubungans.id AND penduduks.jenis_kelamin="Perempuan"', 'Jumlah_P')
            ->join('penduduks', 'hubungans.id', '=', 'penduduks.hubungan_id')
            ->groupBy('hubungans.nama')
            ->get();


        return response()->json([
            'status' => true,
            'data' => $hubungan
        ]);
    }
}
