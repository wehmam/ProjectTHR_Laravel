<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index(){

        $karyawanCollect = collect([
            'karyawan1'=> [101,'Susi','SPG',1,4000000],
            'karyawan2'=> [201,'Susan','Marketing',3,4000000],
            'karyawan3'=> [301,'Sarah','HRD',5,4000000],
            'karyawan4'=> [401,'Sisi','Admin',10,4000000],
            'karyawan5'=> [502,'Sari','SPG',2,4000000],
            'karyawan6'=> [609,'Imam','Backend Developer',10,20000000],
            'karyawan7'=> [790,'Fadjar','UI/UX',10,25000000],
            'karyawan8'=> [819,'Habib Ganteng','CEO',8,40000000],
            'karyawan9'=> [129,'ryan','Mobile Developer',10,15000000],
            'karyawan10'=> [130,'Ryo','SPG',10,10000000]
        ]);
        // dd($karyawanCollect->all());
        $karyawanB = [
            'karyawan11'=> [601,'Imam','Backend Developer',10,20000000],
            'karyawan12'=>[721,'Fadjar','UI/UX',7,25000000],
            'karyawan13'=>[128,'Habib Ganteng','CEO',8,40000000],
            'karyawan14'=>[149,'ryan','Mobile Developer',10,15000000],
            'karyawan15'=> [120,'Ryo','SPG',10,10000000]
        ];
        $karyawan = $karyawanCollect->all() + $karyawanB;
        
        return view('pages.admin.gaji', compact('karyawan'));
    }
}
