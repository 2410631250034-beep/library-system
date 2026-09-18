<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'id' => 1,
                'title' => 'Laut Bercerita',
                'author' => 'Leila S. Chudori',
                'year' => 2017
            ],
            [
                'id' => 2,
                'title' => 'Malioboro at Midnight',
                'author' => 'Skysphire',
                'year' => 2023
            ],
            [
                'id' => 3,
                'title' => 'Poetry in Our Heads',
                'author' => 'M. Aan Mansyur',
                'year' => 2020
            ],
            [
                'id' => 4,
                'title' => 'Pemrograman PHP',
                'author' => 'Budi Raharjo',
                'year' => 2021
            ],
            [
                'id' => 5,
                'title' => 'Laravel untuk Pemula',
                'author' => 'Andi',
                'year' => 2022
            ],
            [
                'id' => 6,
                'title' => 'Basis Data',
                'author' => 'Fathansyah',
                'year' => 2021
            ],
            [
                'id' => 7,
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Rosa A.S.',
                'year' => 2022
            ],
            [
                'id' => 8,
                'title' => 'Pemrograman Berorientasi Objek',
                'author' => 'Abdul Kadir',
                'year' => 2020
            ],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}