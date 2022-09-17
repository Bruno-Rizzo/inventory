<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call([
            UsersSeeder::class , 
            PermissionsSeeder::class,
            AdminSeeder::class,
            CustomersSeeder::class,
            CategoriesSeeder::class,
            SuppliersSeeder::class,
            UnitsSeeder::class,
            ProductsSeeder::class,
        ]);
    }

}
