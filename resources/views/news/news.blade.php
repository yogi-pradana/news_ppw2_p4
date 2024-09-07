@extends('layouts.master')

@section('content')
    <h2>Berita</h2>

    @foreach($news as $item)
    <div>
        <h3>{{ $item->title }}</h3>
        <p>{{ $item->content }}</p> <!-- Menampilkan seluruh konten berita -->
        <p><strong>Tanggal: </strong>{{ $item->news_date }}</p>
        <p><strong>Status: </strong>{{ $item->status }}</p>
    </div>
    <hr>
    @endforeach

    @include('partials.sidebar')
@endsection
