@extends('layouts.app')

@section('content')
    <h1 class="mb-5">Selamat datang di halaman author</h1>

    <a href="{{ route('penulis.create')}}" class="bg-blue-500 text-white
     px-4 py-2 rounded mt">Add Author</a>
    
<div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default mt-5">
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="bg-neutral-secondary-soft border-b border-default">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                   No
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                   Author name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Age
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
            <tr class="justify-center text-center">
                <td>{{ $no++}}</td>
                <td>{{ $author->name_author  }}</td>
                <td> {{ $author->age}}</td>
                <td> {{ $author->alamat}}</td>
                <td> 
                    <a href="{{ route('penulis.show', $author->id)}}">Detail</a>
                    <a href="{{ route('penulis.edit', $author->id)}}">Edit</a>
                    <form action="{{ route('penulis.destroy', $author->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <Button type="submit" onclick="confirm('are you sure?')">DELETE</Button>
                    </form>
                </td>
            </tr>
             @endforeach
        </tbody>
    </table>
</div>
@endsection