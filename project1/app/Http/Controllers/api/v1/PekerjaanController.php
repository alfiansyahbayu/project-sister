<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class PekerjaanController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
        $pekerjaan = DB::table('pekerjaans')
            ->select('pekerjaans.nama')
            ->selectSub('SELECT COUNT(penduduks.id) AS Jumlah_L FROM penduduks WHERE  penduduks.pekerjaan_id=pekerjaans.id AND penduduks.jenis_kelamin="Laki-laki"', 'Jumlah_L')
            ->selectSub('SELECT COUNT(penduduks.id) AS Jumlah_P  FROM penduduks WHERE penduduks.pekerjaan_id=pekerjaans.id AND penduduks.jenis_kelamin="Perempuan"', 'Jumlah_P')
            ->join('penduduks', 'pekerjaans.id', '=', 'penduduks.pekerjaan_id')
            ->groupBy('pekerjaans.nama')
            ->get();


        return response()->json([
            'status' => true,
            'data' => $pekerjaan
        ]);
    }

    public function index2()
    {
        $pekerjaan = DB::connection('mysql_2')->table('pekerjaans')
            ->select('pekerjaans.nama')
            ->selectSub('SELECT COUNT(penduduks.id) AS Jumlah_L FROM penduduks WHERE  penduduks.pekerjaan_id=pekerjaans.id AND penduduks.jenis_kelamin="Laki-laki"', 'Jumlah_L')
            ->selectSub('SELECT COUNT(penduduks.id) AS Jumlah_P  FROM penduduks WHERE penduduks.pekerjaan_id=pekerjaans.id AND penduduks.jenis_kelamin="Perempuan"', 'Jumlah_P')
            ->join('penduduks', 'pekerjaans.id', '=', 'penduduks.pekerjaan_id')
            ->groupBy('pekerjaans.nama')
            ->get();


        return response()->json([
            'status' => true,
            'data' => $pekerjaan
        ]);
    }
}
