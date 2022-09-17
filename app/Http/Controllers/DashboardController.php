<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users        = User::all()->count(); 
        $roles        = Role::all()->count(); 
        $permissions  = Permission::all()->count(); 
        $admin        = User::where('role_id',1)->count();
        return view('dashboard',compact('users','roles','permissions','admin'));
    }
}
