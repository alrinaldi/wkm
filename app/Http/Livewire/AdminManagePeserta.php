<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AdminManagePeserta extends Component
{
    public function render()
    {
        $this->perusahaan = DB::SELECT("SELECT * FROM perusahaan");
        $this->peserta = DB::SELECT("SELECT * FROM inovator where status != ? ",['Non Aktif']);
        return view('livewire.admin-manage-peserta');
    }
}
