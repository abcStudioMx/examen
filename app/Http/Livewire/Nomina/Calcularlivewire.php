<?php

namespace App\Http\Livewire\Nomina;

use Livewire\Component;
use App\Models\User;

class Calcularlivewire extends Component
{
    public $miVariabel;
    public $dias;
    public $datosUsuario;

    public function mount($miVariabel){
        $datosUsuario=$this->datosUsuario=User::find($miVariabel);
    }

    public function render()
    {
        return view('livewire.nomina.calcularlivewire');
    }
}
