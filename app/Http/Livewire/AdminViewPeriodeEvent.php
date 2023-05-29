<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminViewPeriodeEvent extends Component
{
    public function render()
    {
        $this->event = DB::SELECT("SELECT * FROM event_periode where status = 'Open'");

        return view('livewire.admin-view-periode-event');
    }
}
