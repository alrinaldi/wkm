<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PeriodeEvent extends Controller
{
    //

    function addperiodeevent(Request $request){
        $nama = $request->nama;
        $periode = $request->periode;
        $kategori = $request->kategori;
        $tanggal = $request->tanggal;
        $user = Auth::user()->name;
        $date = date('Y-m-d');


        DB::INSERT("INSERT INTO event_periode (nama,periode,tanggal,kategori,status,created_by,created_date) values (?,?,?,?,?,?,?) ",[
            $nama,$periode,$tanggal,$kategori,'Open',$user,$date
        ]);

        return redirect()->to('/adminviewperiodeevent');

    }

}
