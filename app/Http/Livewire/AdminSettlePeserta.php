<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminSettlePeserta extends Component
{

    public function mount($ide){
        $this->ide = $ide;

    }



    public function render()
    {
        $ide  = $this->ide;
        $this->peserta = DB::SELECT("SELECT * FROM inovator where id_stream  = ?",[$ide]);
        $this->pesertar = DB::SELECT("SELECT * FROM inovator where id_stream is null ");
        return view('livewire.admin-settle-peserta');
    }
}
