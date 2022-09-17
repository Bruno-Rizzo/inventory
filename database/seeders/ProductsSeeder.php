<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    
    public function run()
    {
        Product::create([
            'name'        => 'Playstation 5',
            'supplier_id' => 4,
            'category_id' => 5,
            'unit_id'     => 1,
            'quantity'    => 5,
            'status'      => 1,
            'created_by'  => 1,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        Product::create([
            'name'        => 'Samsung S 13',
            'supplier_id' => 5,
            'category_id' => 2,
            'unit_id'     => 1,
            'quantity'    => 10,
            'status'      => 1,
            'created_by'  => 1,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        Product::create([
            'name'        => 'Motorola G 30',
            'supplier_id' => 3,
            'category_id' => 2,
            'unit_id'     => 1,
            'quantity'    => 8,
            'status'      => 1,
            'created_by'  => 1,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        Product::create([
            'name'        => 'LG Nano 55"',
            'supplier_id' => 1,
            'category_id' => 4,
            'unit_id'     => 1,
            'quantity'    => 10,
            'status'      => 1,
            'created_by'  => 1,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        Product::create([
            'name'        => 'Xbox Series X',
            'supplier_id' => 2,
            'category_id' => 5,
            'unit_id'     => 1,
            'quantity'    => 5,
            'status'      => 1,
            'created_by'  => 1,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        Product::create([
            'name'        => 'Xaomi Band',
            'supplier_id' => 6,
            'category_id' => 3,
            'unit_id'     => 1,
            'quantity'    => 9,
            'status'      => 1,
            'created_by'  => 1,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

    }

}
