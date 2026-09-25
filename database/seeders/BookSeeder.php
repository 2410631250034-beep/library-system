<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Laut Bercerita',
            'author' => 'Leila S. Chudori',
            'year' => 2017,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Malioboro at Midnight',
            'author' => 'Skysphire',
            'year' => 2023,
            'stock' => 8,
        ]);

        Book::create([
            'title' => 'Poetry in Our Heads',
            'author' => 'M. Aan Mansyur',
            'year' => 2020,
            'stock' => 4,
        ]);

        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Budi Raharjo',
            'year' => 2021,
            'stock' => 6,
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Andi',
            'year' => 2022,
            'stock' => 7,
        ]);
    }
}