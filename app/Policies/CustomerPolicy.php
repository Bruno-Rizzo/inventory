<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
{
    use HandlesAuthorization;

    
    public function view(User $user)
    {
        return $user->role->hasPermission('cliente-visualizar');
    }

    
    public function create(User $user)
    {
        return $user->role->hasPermission('cliente-cadastrar');
    }

    
    public function update(User $user)
    {
        return $user->role->hasPermission('cliente-editar');
    }

    
    public function delete(User $user)
    {
        return $user->role->hasPermission('cliente-excluir');
    }

}
