<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    
    public function run()
    {
        Category::create([
            'name'       => 'Notebook',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name'       => 'Smart Phone',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name'       => 'Smat Watch',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name'       => 'TV LED',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name'       => 'Video Game',
            'status'     => 1,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
