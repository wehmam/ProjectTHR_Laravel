<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index(){
        $karyawan = [
                    "karyawan1" => [1,'Susi','SPG','1 Tahun',4000000],
                    "karyawan2" => [2,'Susan','SPG','1 Tahun',4000000],
                    "karyawan3" => [3,'Sarah','SPG','1 Tahun',4000000],
                    "karyawan4" => [4,'Sisi','SPG','1 Tahun',4000000],
                    "karyawan5" => [5,'Sari','SPG','1 Tahun',4000000]
                    ];

        // $pegawai = [
        //             "pegawai4" => [6,'Budi','SPV',5000000],
        //             "pegawai5" => [7,'Ari','SPV',5000000],
        //             "pegawai6" => [8,'Joko','SPV',5000000]
        //         ];

        // $pekerja = [
        //             "pekerja7" => [6,'Budi','Manager',10000000],
        //             "pekerja8" => [7,'Ari','Manager',10000000],
        //             "pekerja9" => [8,'Joko','Manager',10000000]
        //         ];

        // $semuaData = $karyawan + $pegawai + $pekerja;
        // return view('penggajian',compact('karyawan','pekerja','pegawai','semuaData'));
        return view('pages.admin.gaji', compact('karyawan'));
    }
}
