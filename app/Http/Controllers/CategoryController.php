<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'Fiksi',
            'Romansa',
            'Puisi',
            'Pemrograman',
            'Basis Data',
        ];

        return view('categories.index', compact('categories'));
    }
}