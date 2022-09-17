<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create',compact('roles'));
    
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => ['required','min:3'],
            'email'    => ['required','email','unique:users'],
            'password' => ['required','min:8'],
            'role_id'  => ['required'],
        ],[
            'role_id.required' => 'O campo Função é obrigatório',
            'email.unique'     => 'Este email já está sendo utilizado'
        ]);

        $validated['password'] = bcrypt($request->password);

        User::create($validated);
        Alert::toast('Usuário cadastrado com sucesso!', 'success');
        return to_route('users.index');

    }

    
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit',compact('user','roles'));
    }

    
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name'     => ['required','min:3'],
            'email'    => ['required','email',Rule::unique('users')->ignore($user->id)],
            'role_id'  => ['required'],
        ],[
            'role_id.required' => 'O campo Função é obrigatório',
            'email.unique'     => 'Este email já está sendo utilizado'
        ]);

        User::find($user->id)->update($validated);
        Alert::toast('Usuário editado com sucesso!', 'success');
        return to_route('users.index');
    }

    public function confirm($id)
    {
        Alert::error('Excluir Usuário','Deseja realmente excluir este usuário?')
        ->showConfirmButton('<a href="/users/delete/'.$id.'" style="text-decoration:none;color:#FFF">Excluir</a>', '#C72826')
        ->showCancelButton('Cancelar', '#3085d6')
        ->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
       User::find($id)->delete();
        Alert::toast('Usuário excluído com sucesso!', 'success');
        return to_route('users.index');

    }

    public function search()
    {
        return view('admin.users.search');
    }

    public function findUser(Request $request)
    {
        $request->validate(['name' => 'required']);
        $users = User::where('name','like', '%'.$request->name.'%')->get();

        return view('admin.users.search',compact('users'));

    }

    public function show(User $user)
    {
        return view('admin.users.password',compact('user'));
    }

    public function password(Request $request , User $user)
    {
        $validated = $request->validate([
            'password' => ['required','min:8']
        ]);

        $validated['password'] = bcrypt($request->password);

        User::find($user->id)->update($validated);
        Alert::toast('Senha alterada com sucesso!', 'success');
        return to_route('users.index');

    }

}
