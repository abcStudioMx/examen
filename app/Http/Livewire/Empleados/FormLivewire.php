<?php

namespace App\Http\Livewire\Empleados;

use Livewire\Component;
use App\Models\User;

class FormLivewire extends Component
{
    public $name;
    public $email;
    public $estatus;
    public $salario;
    public $miID;
    public $datosEmpleado;

    public function mount($miId){
        $datosEmpleado=$this->datosEmpleado=User::find($miId);
    }

    public function render()
    {
        return view('livewire.empleados.form-livewire');
    }


}
