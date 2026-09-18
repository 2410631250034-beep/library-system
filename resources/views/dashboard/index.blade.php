@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard</h2>

    <p>Selamat datang di Library System.</p>
    <p>
        Library System adalah sistem informasi perpustakaan sederhana
        yang digunakan untuk menampilkan data buku, member, dan kategori
        dalam satu sistem.
    </p>

    <hr>

    <h3>Data Perpustakaan</h3>

    <p>Jumlah Buku: {{ $bookCount }}</p>
    <p>Jumlah Member: {{ $memberCount }}</p>
    <p>Jumlah Kategori: {{ $categoryCount }}</p>
@endsection