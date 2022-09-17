<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;


    public function view(User $user)
    {
        return $user->role->hasPermission('produto-visualizar');
    }

    
    public function create(User $user)
    {
        return $user->role->hasPermission('produto-cadastrar');
    }

    
    public function update(User $user)
    {
        return $user->role->hasPermission('produto-editar');
    }

    
    public function delete(User $user)
    {
        return $user->role->hasPermission('produto-excluir');
    }

}