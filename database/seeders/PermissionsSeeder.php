<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsSeeder extends Seeder
{
    
    public function run()
    {
        Permission::create(['name' => 'fornecedor-cadastrar']);
        Permission::create(['name' => 'fornecedor-visualizar']);
        Permission::create(['name' => 'fornecedor-editar']);
        Permission::create(['name' => 'fornecedor-excluir']);
        Permission::create(['name' => 'cliente-cadastrar']);
        Permission::create(['name' => 'cliente-visualizar']);
        Permission::create(['name' => 'cliente-editar']);
        Permission::create(['name' => 'cliente-excluir']);
        Permission::create(['name' => 'unidade-cadastrar']);
        Permission::create(['name' => 'unidade-visualizar']);
        Permission::create(['name' => 'unidade-editar']);
        Permission::create(['name' => 'unidade-excluir']);
        Permission::create(['name' => 'categoria-cadastrar']);
        Permission::create(['name' => 'categoria-visualizar']);
        Permission::create(['name' => 'categoria-editar']);
        Permission::create(['name' => 'categoria-excluir']);
        Permission::create(['name' => 'produto-cadastrar']);
        Permission::create(['name' => 'produto-visualizar']);
        Permission::create(['name' => 'produto-editar']);
        Permission::create(['name' => 'produto-excluir']);
        Permission::create(['name' => 'compra-cadastrar']);
        Permission::create(['name' => 'compra-visualizar']);
        Permission::create(['name' => 'compra-editar']);
        Permission::create(['name' => 'compra-excluir']);
    }

}
