<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    
    public function run()
    {
        Customer::create([
            'name'       => 'José Silva',
            'mobile'     => '98765-4321',
            'email'      => 'jose@email.com',
            'address'    => 'Rua três casa 1',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Customer::create([
            'name'       => 'Márcia Cardoso',
            'mobile'     => '98772-4412',
            'email'      => 'marcia@email.com',
            'address'    => 'Rua cinco apto 101',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Customer::create([
            'name'       => 'Luis Medeiros',
            'mobile'     => '99534-41278',
            'email'      => 'luis@email.com',
            'address'    => 'Av Dr Roberto 870 apto 505',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
