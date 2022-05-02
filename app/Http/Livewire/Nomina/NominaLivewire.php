<?php

namespace App\Http\Livewire\Nomina;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class NominaLivewire extends Component
{
    use WithPagination;

    public $myId;
    public $dias;
    public $datosUsuario;

    public function render()
    {
        return view('livewire.nomina.nomina-livewire');
    }
}


