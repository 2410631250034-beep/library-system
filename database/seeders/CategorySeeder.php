<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Fiksi',
        ]);

        Category::create([
            'name' => 'Non-Fiksi',
        ]);

        Category::create([
            'name' => 'Sains',
        ]);

        Category::create([
            'name' => 'Teknologi',
        ]);

        Category::create([
            'name' => 'Sejarah',
        ]);
    }
}
