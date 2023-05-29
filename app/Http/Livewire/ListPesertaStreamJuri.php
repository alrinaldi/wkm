<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ListPesertaStreamJuri extends Component
{

    public function mount($ide){
        $this->ide = $ide;

    }

    public function render()
    {
        $idstream = $this->ide;
        $this->peserta = DB::SELECT("SELECT * FROM inovator where id_stream = ?",[$idstream]);
        return view('livewire.list-peserta-stream-juri');
    }
}
