<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PurchasePolicy
{
    use HandlesAuthorization;


    public function view(User $user)
    {
        return $user->role->hasPermission('compra-visualizar');
    }

    
    public function create(User $user)
    {
        return $user->role->hasPermission('compra-cadastrar');
    }

    
    public function update(User $user)
    {
        return $user->role->hasPermission('compra-editar');
    }

    
    public function delete(User $user)
    {
        return $user->role->hasPermission('compra-excluir');
    }

}