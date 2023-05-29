<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminPeserta extends Controller
{
    //
    function addpeserta(Request $request){
        $username = Auth::user()->username;
        $date = date('Y-m-d H:i:s');

        $nama= $request->nama;
        $kategori = $request->kategori;
        $perusahaan = $request->perusahaan;

        DB::INSERT("INSERT INTO inovator (nama_team,kategori,perusahaan,status,created_by,created_date) values (?,?,?,?,?,?)",[
            $nama,$kategori,$perusahaan,'Created',$username,$date
        ]);
        return redirect()->to('/adminmanagepeserta');

    }
}
