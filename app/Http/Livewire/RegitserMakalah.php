<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RegitserMakalah extends Component
{
    public function render()
    {
        $perusahaan = Auth::user()->perusahaan;
        $this->pesertastream = DB::SELECT("SELECT a.*,b.id as idstream,b.nama_stream,b.jadwal,
        c.nama,c.periode from inovator a join stream b on a.id_stream = b.id join event_periode c
        on b.id_event = c.id where c.status = ? and a.status = ? and a.perusahaan = ?",['Open','Verified',$perusahaan]);
        return view('livewire.regitser-makalah');
    }
}
