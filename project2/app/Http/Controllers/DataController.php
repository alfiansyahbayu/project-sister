<?php

namespace App\Http\Controllers;

use App\Models\Hubungan;
use App\Models\Pekerjaan;
use App\Models\UmurRentang;
use App\Models\Desa2Hubungan;
use App\Models\Desa2Pekerjaan;
use App\Models\Desa2UmurRentang;
use Illuminate\Http\Request;
use App\Models\SantriModel;

class DataController extends Controller
{
    public function tampilpekerjaan()
    {
        $pekerjaan = Pekerjaan::select('*')->where('Id_desa', '=', '1')
            ->get();

        return view('pekerjaankonoha', ['pekerjaan' => $pekerjaan]);
    }

    public function tampilhubungan()
    {
        $hubungan = Hubungan::select('*')->where('Id_desa', '=', '1')
            ->get();

        return view('hubungankonoha', ['hubungan' => $hubungan]);
    }


    public function tampilumur()
    {
        $umur = UmurRentang::select('*')->where('Id_desa', '=', '1')
            ->get();

        return view('umurkonoha', ['umur' => $umur]);
    }

    public function tampilpekerjaan2()
    {
        $pekerjaan2 = Pekerjaan::select('*')->where('Id_desa', '=', '2')
            ->get();

        return view('pekerjaanwakanda', ['pekerjaan2' => $pekerjaan2]);
    }

    public function tampilhubungan2()
    {
        $hubungan2 = Hubungan::select('*')->where('Id_desa', '=', '2')
            ->get();

        return view('hubunganwakanda', ['hubungan2' => $hubungan2]);
    }


    public function tampilumur2()
    {
        $umur2 = UmurRentang::select('*')->where('Id_desa', '=', '2')
            ->get();

        return view('umurwakanda', ['umur2' => $umur2]);
    }
}
