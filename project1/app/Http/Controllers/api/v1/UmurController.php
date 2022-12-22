<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UmurController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
        $umur_rentang = DB::table('umur_rentangs')
            ->select('umur_rentangs.nama')
            ->selectSub(
                'SELECT COUNT(umur_id) FROM
                 ( SELECT jenis_kelamin ,CASE 
            WHEN Umur>=0 AND Umur<=1 THEN 1
            WHEN Umur>=2 AND Umur<=4 THEN 2
            WHEN Umur>=5 AND Umur<=9 THEN 3
            WHEN Umur>=10 AND Umur<=14 THEN 4
            WHEN Umur>=15 AND Umur<=19 THEN 5
            WHEN Umur>=20 AND Umur<=24 THEN 6
            WHEN Umur>=25 AND Umur<=29 THEN 7
            WHEN Umur>=30 AND Umur<=34 THEN 8
            WHEN Umur>=35 AND Umur<=39 THEN 9
            WHEN Umur>=40 AND Umur<=44 THEN 10
            WHEN Umur>=45 AND Umur<=49 THEN 11
            WHEN Umur>=50 AND Umur<=54 THEN 12
            WHEN Umur>=54 AND Umur<=59 THEN 13
            WHEN Umur>=60 AND Umur<=64 THEN 14
            WHEN Umur>=65 AND Umur<=69 THEN 15
            WHEN Umur>=70 AND Umur<=74 THEN 16
            WHEN Umur>=75 THEN 17
            END AS umur_id FROM (SELECT id,jenis_kelamin,tanggal_lahir,(YEAR(CURRENT_DATE())-YEAR(tanggal_lahir))Umur from penduduks )t) AS tabel_umur
            WHERE tabel_umur.umur_id=umur_rentangs.id AND tabel_umur.jenis_kelamin="Laki-laki"',
                'Jumlah_L'
            )
            ->selectSub(
                'SELECT COUNT(umur_id) FROM
                 ( SELECT jenis_kelamin ,CASE 
            WHEN Umur>=0 AND Umur<=1 THEN 1
            WHEN Umur>=2 AND Umur<=4 THEN 2
            WHEN Umur>=5 AND Umur<=9 THEN 3
            WHEN Umur>=10 AND Umur<=14 THEN 4
            WHEN Umur>=15 AND Umur<=19 THEN 5
            WHEN Umur>=20 AND Umur<=24 THEN 6
            WHEN Umur>=25 AND Umur<=29 THEN 7
            WHEN Umur>=30 AND Umur<=34 THEN 8
            WHEN Umur>=35 AND Umur<=39 THEN 9
            WHEN Umur>=40 AND Umur<=44 THEN 10
            WHEN Umur>=45 AND Umur<=49 THEN 11
            WHEN Umur>=50 AND Umur<=54 THEN 12
            WHEN Umur>=54 AND Umur<=59 THEN 13
            WHEN Umur>=60 AND Umur<=64 THEN 14
            WHEN Umur>=65 AND Umur<=69 THEN 15
            WHEN Umur>=70 AND Umur<=74 THEN 16
            WHEN Umur>=75 THEN 17
            END AS umur_id FROM (SELECT id,jenis_kelamin,tanggal_lahir,(YEAR(CURRENT_DATE())-YEAR(tanggal_lahir))Umur from penduduks )t) AS tabel_umur
            WHERE tabel_umur.umur_id=umur_rentangs.id AND tabel_umur.jenis_kelamin="Perempuan"',
                'Jumlah_P'
            )
            ->joinSub('SELECT jenis_kelamin ,CASE 
       WHEN Umur>=0 AND Umur<=1 THEN 1
       WHEN Umur>=2 AND Umur<=4 THEN 2
       WHEN Umur>=5 AND Umur<=9 THEN 3
       WHEN Umur>=10 AND Umur<=14 THEN 4
       WHEN Umur>=15 AND Umur<=19 THEN 5
       WHEN Umur>=20 AND Umur<=24 THEN 6
       WHEN Umur>=25 AND Umur<=29 THEN 7
       WHEN Umur>=30 AND Umur<=34 THEN 8
       WHEN Umur>=35 AND Umur<=39 THEN 9
       WHEN Umur>=40 AND Umur<=44 THEN 10
       WHEN Umur>=45 AND Umur<=49 THEN 11
       WHEN Umur>=50 AND Umur<=54 THEN 12
       WHEN Umur>=54 AND Umur<=59 THEN 13
       WHEN Umur>=60 AND Umur<=64 THEN 14
       WHEN Umur>=65 AND Umur<=69 THEN 15
       WHEN Umur>=70 AND Umur<=74 THEN 16
       WHEN Umur>=75 THEN 17
       END AS umur_id FROM (SELECT id,jenis_kelamin,tanggal_lahir,(YEAR(CURRENT_DATE())-YEAR(tanggal_lahir))Umur from penduduks )t', 'tabel_umur', 'umur_rentangs.id', '=', 'tabel_umur.umur_id')
            ->groupBy('umur_rentangs.nama')
            ->get();


        return response()->json([
            'status' => true,
            'data' => $umur_rentang
        ]);
    }




    public function index2()
    {
        $umur_rentang = DB::connection('mysql_2')->table('umur_rentangs')
            ->select('umur_rentangs.nama')
            ->selectSub(
                'SELECT COUNT(umur_id) FROM
                 ( SELECT jenis_kelamin ,CASE 
            WHEN Umur>=0 AND Umur<=1 THEN 1
            WHEN Umur>=2 AND Umur<=4 THEN 2
            WHEN Umur>=5 AND Umur<=9 THEN 3
            WHEN Umur>=10 AND Umur<=14 THEN 4
            WHEN Umur>=15 AND Umur<=19 THEN 5
            WHEN Umur>=20 AND Umur<=24 THEN 6
            WHEN Umur>=25 AND Umur<=29 THEN 7
            WHEN Umur>=30 AND Umur<=34 THEN 8
            WHEN Umur>=35 AND Umur<=39 THEN 9
            WHEN Umur>=40 AND Umur<=44 THEN 10
            WHEN Umur>=45 AND Umur<=49 THEN 11
            WHEN Umur>=50 AND Umur<=54 THEN 12
            WHEN Umur>=54 AND Umur<=59 THEN 13
            WHEN Umur>=60 AND Umur<=64 THEN 14
            WHEN Umur>=65 AND Umur<=69 THEN 15
            WHEN Umur>=70 AND Umur<=74 THEN 16
            WHEN Umur>=75 THEN 17
            END AS umur_id FROM (SELECT id,jenis_kelamin,tanggal_lahir,(YEAR(CURRENT_DATE())-YEAR(tanggal_lahir))Umur from penduduks )t) AS tabel_umur
            WHERE tabel_umur.umur_id=umur_rentangs.id AND tabel_umur.jenis_kelamin="Laki-laki"',
                'Jumlah_L'
            )
            ->selectSub(
                'SELECT COUNT(umur_id) FROM
                 ( SELECT jenis_kelamin ,CASE 
            WHEN Umur>=0 AND Umur<=1 THEN 1
            WHEN Umur>=2 AND Umur<=4 THEN 2
            WHEN Umur>=5 AND Umur<=9 THEN 3
            WHEN Umur>=10 AND Umur<=14 THEN 4
            WHEN Umur>=15 AND Umur<=19 THEN 5
            WHEN Umur>=20 AND Umur<=24 THEN 6
            WHEN Umur>=25 AND Umur<=29 THEN 7
            WHEN Umur>=30 AND Umur<=34 THEN 8
            WHEN Umur>=35 AND Umur<=39 THEN 9
            WHEN Umur>=40 AND Umur<=44 THEN 10
            WHEN Umur>=45 AND Umur<=49 THEN 11
            WHEN Umur>=50 AND Umur<=54 THEN 12
            WHEN Umur>=54 AND Umur<=59 THEN 13
            WHEN Umur>=60 AND Umur<=64 THEN 14
            WHEN Umur>=65 AND Umur<=69 THEN 15
            WHEN Umur>=70 AND Umur<=74 THEN 16
            WHEN Umur>=75 THEN 17
            END AS umur_id FROM (SELECT id,jenis_kelamin,tanggal_lahir,(YEAR(CURRENT_DATE())-YEAR(tanggal_lahir))Umur from penduduks )t) AS tabel_umur
            WHERE tabel_umur.umur_id=umur_rentangs.id AND tabel_umur.jenis_kelamin="Perempuan"',
                'Jumlah_P'
            )
            ->joinSub('SELECT jenis_kelamin ,CASE 
       WHEN Umur>=0 AND Umur<=1 THEN 1
       WHEN Umur>=2 AND Umur<=4 THEN 2
       WHEN Umur>=5 AND Umur<=9 THEN 3
       WHEN Umur>=10 AND Umur<=14 THEN 4
       WHEN Umur>=15 AND Umur<=19 THEN 5
       WHEN Umur>=20 AND Umur<=24 THEN 6
       WHEN Umur>=25 AND Umur<=29 THEN 7
       WHEN Umur>=30 AND Umur<=34 THEN 8
       WHEN Umur>=35 AND Umur<=39 THEN 9
       WHEN Umur>=40 AND Umur<=44 THEN 10
       WHEN Umur>=45 AND Umur<=49 THEN 11
       WHEN Umur>=50 AND Umur<=54 THEN 12
       WHEN Umur>=54 AND Umur<=59 THEN 13
       WHEN Umur>=60 AND Umur<=64 THEN 14
       WHEN Umur>=65 AND Umur<=69 THEN 15
       WHEN Umur>=70 AND Umur<=74 THEN 16
       WHEN Umur>=75 THEN 17
       END AS umur_id FROM (SELECT id,jenis_kelamin,tanggal_lahir,(YEAR(CURRENT_DATE())-YEAR(tanggal_lahir))Umur from penduduks )t', 'tabel_umur', 'umur_rentangs.id', '=', 'tabel_umur.umur_id')
            ->groupBy('umur_rentangs.nama')
            ->get();


        return response()->json([
            'status' => true,
            'data' => $umur_rentang
        ]);
    }
}
