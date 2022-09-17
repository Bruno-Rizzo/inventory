<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Permission;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index',compact(('roles')));
    }

   
    public function create()
    {
        return view('admin.roles.create');
    }

   
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required','min:5',Rule::unique('roles')]
        ],[
            'name.unique' => 'Este nome já está sendo utilizado'
        ]);

        Role::create($validated);
        Alert::toast('Função cadastrada com sucesso!','success');
        return to_route('roles.index');
    }

    
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit',compact('role','permissions'));
    }

    
    public function update(Request $request, Role $role)
    {
        $validated = $request->validate([
            'name' => ['required','min:5',Rule::unique('roles')]
        ],[
            'name.unique' => 'Este nome já está sendo utilizado'
        ]);

        Role::find($role->id)->update($validated);
        Alert::toast('Função editada com sucesso','success');
        return to_route('roles.index');

    }

    public function confirm($id)
    {
        Alert::error('Excluir Função','Deseja realmente excluir esta função?')
        ->showConfirmButton('<a href="/roles/delete/'.$id.'" style="text-decoration:none;color:#FFF">Excluir</a>', '#C72826')
        ->showCancelButton('Cancelar', '#3085d6')
        ->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        Role::find($id)->delete();
        Alert::toast('Função excluída com sucesso!', 'success');
        return to_route('roles.index');

    }

    public function assignPermission(Request $request, Role $role)
    {
        $role->permissions()->sync($request->permissions);
        Alert::toast('Permissões associadas com sucesso!', 'success');
        return to_route('roles.index');
    
    }


}
