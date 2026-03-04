@extends('layouts.app')

@section('content')
    {{ $detail->judul }}
    {{ $detail->sinopsis }}
    {{ $detail->tahun_terbit }}
    {{ $detail->author->name_author }}
    {{  $detail->author->age }}
    {{  $detail->author->alamat }}
    {{  $detail->genre->name_genre }}
    <img src="{{ asset('storage/' . $detail->image) }}" alt="">
@endsection