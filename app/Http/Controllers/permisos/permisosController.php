<?php

namespace App\Http\Controllers\permisos;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\DB;

class permisosController extends Controller
{

    public function index(Request $request)
    {
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('permisos.index',compact('roles'));
    }

    public function create()
    {
        $permissions=Permission::all();
        return view('permisos.create',compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $role=Role::create(['guard_name'=>'web','name'=>$request->name]);
        $role->permissions()->sync($request->permissions);
        return redirect()->route('permisos.index',$role)
        ->with('info','El rol se creó con éxito');
    }

    public function show(Role $role)
    {

        return view('permisos.show', compact('role'));
    }

    public function edit(Request $request,$id)
    {

        $role = Role::find($id);
        $permission = Permission::get();

        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return view('permisos.edit',compact('role','permission','rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('permisos.index')->with('success','Role updated successfully');
    }

    public function destroy($id)
    {
        $role=Role::findOrFail($id);
        $role->delete();
        return redirect()->route('permisos.index')
        ->with('info','El rol se elimino con éxito');

    }
}
