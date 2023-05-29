<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminJuri extends Controller
{
    //
    function addjuri(Request $request){
        $namajuri = $request->namajuri;
        $perusahaan = $request->perusahaan;
        $type = $request->type;
        $user = Auth::user()->name;
        $date = date('Y-m-d');

        DB::INSERT("INSERT INTO juri (nama_juri,kategori,perusahaan,status,created_by,created_date) values (?,?,?,?,?,?)"
        ,[$namajuri,$type,$perusahaan,'Aktif',$user,$date]);

        return redirect()->to('/adminmanagejuri');

    }

}
