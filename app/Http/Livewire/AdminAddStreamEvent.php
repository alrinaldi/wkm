<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AdminAddStreamEvent extends Component
{

    public function mount($ide){
        $this->ide = $ide;

    }


    public function render()
    {
        $ide  = $this->ide;
        $this->stream = DB::SELECT("SELECT a.*,b.nama,b.periode,b.kategori FROM stream a join event_periode b on a.id_event = b.id where b.id = ?",[$ide]);
        $this->event = DB::SELECT("SELECT * FROM event_periode where status = ?",['Open']);
        return view('livewire.admin-add-stream-event');
    }
}
