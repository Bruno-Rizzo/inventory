<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;


    public function view(User $user)
    {
        return $user->role->hasPermission('categoria-visualizar');
    }

    
    public function create(User $user)
    {
        return $user->role->hasPermission('categoria-cadastrar');
    }

    
    public function update(User $user)
    {
        return $user->role->hasPermission('categoria-editar');
    }

    
    public function delete(User $user)
    {
        return $user->role->hasPermission('categoria-excluir');
    }

}