@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>

    @foreach ($books as $book)
        <div>
            <h3>{{ $book['title'] }}</h3>
            <p>Penulis: {{ $book['author'] }}</p>
            <p>Tahun: {{ $book['year'] }}</p>

            @if ($book['year'] >= 2022)
                <p>Status: Buku Terbaru</p>
            @else
                <p>Status: Buku Lama</p>
            @endif
        </div>

        <hr>
    @endforeach
@endsection