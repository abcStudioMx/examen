<?php

namespace App\Http\Controllers\empleados;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class empleadosController extends Controller
{


    public function index(Request $request)
    {
        return view('empleados.index');
    }

    public function store(Request $request)
    {
        $miId=$request->input('myId');
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'salario'=> 'required',
        ]);



        User::where('id','=',$miId)
        ->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'estatus' => $request->input('estatus'),
                    'salario_diario' => $request->input('salario')
        ]);
        $iDRole = $request->input('role');

        if($iDRole !=0){
            $user=User::find($miId);
            $user->roles()->detach();
            $user->assignRole($iDRole);
        }
        return redirect()->route('empleados');
    }


    public function show($id)
    {

        $datosEmpleado=User::find($id);
        $role=Role::all('id','name');

        $perfil=DB::table('roles')
        ->join('model_has_roles','roles.id','=','model_has_roles.role_id')
        ->select('roles.name')
        ->where('model_has_roles.model_id','=',$id)
        ->get();

        return view('empleados.show')
        ->with('datosEmpleado',$datosEmpleado)
        ->with('role',$role)
        ->with('perfil',$perfil)

        ;
    }

}
