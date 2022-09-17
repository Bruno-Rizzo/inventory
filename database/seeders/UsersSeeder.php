<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UsersSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name'              => 'Bruno Rizzo',
            'email'             => 'bruno@email.com',
            'password'          => bcrypt('password'),
            'image'             => 'profile.jpg',
            'role_id'           => Role::create(['name' => 'Administrador'])->id,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Ananda Cristina',
            'email'             => 'ananda@email.com',
            'password'          => bcrypt('password'),
            'image'             => 'profile.jpg',
            'role_id'           => Role::create(['name' => 'Gerente'])->id,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Luíza Cristina',
            'email'             => 'luiza@email.com',
            'password'          => bcrypt('password'),
            'image'             => 'profile.jpg',
            'role_id'           => Role::create(['name' => 'Analista'])->id,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

    }
}
