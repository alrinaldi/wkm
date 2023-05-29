<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminViewStream extends Component
{
    public function render()
    {
        $this->stream = DB::SELECT("SELECT a.*,b.nama,b.periode,b.kategori
        FROM stream a join event_periode b on a.id_event = b.id where b.status = ?",['Open']);
        $this->event = DB::SELECT("SELECT * FROM event_periode where status = ?",['Open']);
        return view('livewire.admin-view-stream');
    }
}
