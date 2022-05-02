<?php

namespace App\Http\Livewire\Empleados;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class EmpleadosLivewire extends Component
{
    use WithPagination;
    public $misUsuarios;
    public $buscar;

    public function render()
    {

        return view('livewire.empleados.empleados-livewire',[
          'usuarios'=>User::when($this->buscar, function($query,$buscar){
              return $query->where('name','LIKE', "%$buscar%");
          })->orderBy('id','desc')->paginate(20)
        ]);

    }

public function destroy($id){
    User::destroy($id);
}

    public function editar($id){
        return redirect()->route('empleados.show',$id);
    }

    public function nomina($id){
    $this->emit('myIdUsuario',$id);
    return redirect()->route('nomina.index',$id);
    }

}
