<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    
    public function run()
    {
        Unit::create([
            'name'       => 'Unidade',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Unit::create([
            'name'       => 'Caixa',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Unit::create([
            'name'       => 'Pacote',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Unit::create([
            'name'       => 'Kilo',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Unit::create([
            'name'       => 'Grama',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Unit::create([
            'name'       => 'Litro',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
