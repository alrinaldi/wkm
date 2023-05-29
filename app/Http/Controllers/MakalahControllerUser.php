<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MakalahControllerUser extends Controller
{
    //
    function detailmakalahuser (Request $request){
        $idstream = $request->idstream;


        return view('livewire.detailmakalahpeserta');

    }

    function detailmakalahuserjuri(Request $request){
        $idinv = $request->idinovator;
        $this->inovator = DB::SELECT("SELECT * FROM inovator where id=?",[$idinv]);

        return view('livewire.detailmakalahuserjuri');
    }
}
