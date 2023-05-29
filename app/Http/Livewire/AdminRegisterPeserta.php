<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminRegisterPeserta extends Component
{
    public function render()
    {
        $this->peserta = DB::SELECT("SELECT * FROM inovator where status = ?",['Register']);
        return view('livewire.admin-register-peserta');
    }
}
