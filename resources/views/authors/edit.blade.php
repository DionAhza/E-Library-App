@extends('layouts.app')

@section('content')
    <h1>Mengedit = {{ $edit->name_author}}</h1>

    <div class="container mx-auto">
    <h1 class="mb-5">Welcome to Edit Author</h1>
    <form action="{{ route('penulis.update', $edit->id)}}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="">Name Author</label>
            <input type="text" name="name_author" value="{{$edit->name_author}}" class="border w-full p-2 rounded" id="">
        </div>
        <div>
            <label for="">Umur</label>
            <input type="number" name="age" value="{{ $edit->age}}" class="border w-full p-2 rounded" id="">
        </div>
        <div>
            <label for="">Alamat</label>
            <input type="text" name="alamat" value="{{ $edit->alamat}}" class="border w-full p-2 rounded" id="">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </form>
    </div>
@endsection