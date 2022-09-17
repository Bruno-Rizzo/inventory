<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SupplierPolicy
{
    use HandlesAuthorization;

   
    public function view(User $user)
    {
        return $user->role->hasPermission('fornecedor-visualizar');
    }

    
    public function create(User $user)
    {
        return $user->role->hasPermission('fornecedor-cadastrar');
    }

    
    public function update(User $user)
    {
        return $user->role->hasPermission('fornecedor-editar');
    }

    
    public function delete(User $user)
    {
        return $user->role->hasPermission('fornecedor-excluir');
    }


}
