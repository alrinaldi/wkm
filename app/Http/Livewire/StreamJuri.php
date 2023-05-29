<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StreamJuri extends Component
{
    public function render()
    {
        $userid = Auth::user()->username;
        $this->juri = DB::SELECT("SELECT * FROM stream a join juri_stream b on a.id = b.id_stream join juri c on b.id_juri = c.id join event_periode d
        on a.id_event = d.id where c.userid = ? and d.status = ?",
        [$userid,'Open']);
        return view('livewire.stream-juri');
    }
}
