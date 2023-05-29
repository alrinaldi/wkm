<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminManageJuri extends Component
{
    public function render()
    {
        $this->juri = DB::SELECT("SELECT * FROM juri");
        return view('livewire.admin-manage-juri');
    }
}
