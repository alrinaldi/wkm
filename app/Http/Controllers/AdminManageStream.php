<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminManageStream extends Controller
{
    //

    function addstreamevent(Request $request){
        $namastream = $request->namastream;
        $jadwal = $request->jadwal;
        $idevent = $request->event;
        $user = Auth::user()->name;
        $date = date('Y-m-d');

        DB::INSERT('INSERT INTO stream (code_stream,nama_stream,jadwal,id_event,created_by,created_date,status) values
        (?,?,?,?,?,?,?) ',[$namastream,$namastream,$jadwal,$idevent,$user,$date,'Open']);

        return redirect()->to('/adminviewstream');

    }
}
