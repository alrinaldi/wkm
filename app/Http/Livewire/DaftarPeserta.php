<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DaftarPeserta extends Component
{
    public function render()
    {
        $perusahaan = Auth::user()->perusahaan;
        $this->event = DB::SELECT("SELECT * FROM event_periode where status = ?",['Open']);
        $this->peserta = DB::SELECT("SELECT * FROM inovator where perusahaan = ? ",[$perusahaan]);
        return view('livewire.daftar-peserta');
    }
}
