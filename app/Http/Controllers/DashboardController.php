<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $bookCount = 8;
        $memberCount = 5;
        $categoryCount = 5;

        return view('dashboard.index', compact(
            'bookCount',
            'memberCount',
            'categoryCount'
        ));
    }
}