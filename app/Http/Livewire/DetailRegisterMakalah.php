<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DetailRegisterMakalah extends Component
{

    public function mount($id){
        $this->id = $id;

    }


    public function render()
    {
        $ids = $this->id;
        $this->peserta = DB::SELECT("SELECT * FROM inovator where id_stream = ?",[$ids]);
        return view('livewire.detail-register-makalah');
    }
}
