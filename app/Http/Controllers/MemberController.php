<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Abelia Yustika',
            'Annisa Annastia',
            'Nazma Adhvika',
            'Nisa Ainul',
            'Muhammad Ihsan',
        ];

        return view('members.index', compact('members'));
    }
}