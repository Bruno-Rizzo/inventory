<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UnitPolicy
{
    use HandlesAuthorization;


    public function view(User $user)
    {
        return $user->role->hasPermission('unidade-visualizar');
    }

    
    public function create(User $user)
    {
        return $user->role->hasPermission('unidade-cadastrar');
    }

    
    public function update(User $user)
    {
        return $user->role->hasPermission('unidade-editar');
    }

    
    public function delete(User $user)
    {
        return $user->role->hasPermission('unidade-excluir');
    }

}
