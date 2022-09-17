<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    
    public function run()
    {
        Supplier::create([
            'name'       => 'LG',
            'mobile'     => '98765-4321',
            'email'      => 'lg@email.com',
            'address'    => 'Av Landmap 345',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Supplier::create([
            'name'       => 'Microsoft',
            'mobile'     => '94835-8665',
            'email'      => 'microsoft@email.com',
            'address'    => 'Vancouver Street 1005',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Supplier::create([
            'name'       => 'Motorola',
            'mobile'     => '98773-1173',
            'email'      => 'motorola@email.com',
            'address'    => 'Pal set street 342',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Supplier::create([
            'name'       => 'Sony',
            'mobile'     => '95624-4386',
            'email'      => 'sony@email.com',
            'address'    => 'Av Kentucky 227',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Supplier::create([
            'name'       => 'Samsung',
            'mobile'     => '98765-4321',
            'email'      => 'samsung@email.com',
            'address'    => 'Dr. Ryan Street 890',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Supplier::create([
            'name'       => 'Xaomi',
            'mobile'     => '99453-1678',
            'email'      => 'xaomi@email.com',
            'address'    => 'Xaixeng Chow 2938',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
