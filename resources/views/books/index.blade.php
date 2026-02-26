@extends('layouts.app')

@section('content')
    <h1 class="mb-6">Selamat datang di halaman books</h1>
    <a href="{{ route('book.create') }}" class="py-4 px-8 m-8 mb-9 bg-blue-500 text-white rounded-full hover:bg-blue-300 hover:text-gray-200 transition ">Add books</a>
    <div class="relative overflow-x-auto bg-gray-300 shadow-xs rounded-base border border-default-medium mt-6">
            <table class="w-full text-sm text-left text-body">
                    <thead class="text-sm">
                        <tr>
                            <th class="px-6 py-3 font-medium">No</th>
                            <th class="px-6 py-3 font-medium">Gambar</th>
                            <th class="px-6 py-3 font-medium">Judul</th>
                            <th class="px-6 py-3 font-medium">Sinopsis</th>
                            <th class="px-6 py-3 font-medium">tahun terbit</th>
                            <th class="px-6 py-3 font-medium">Genre</th>
                            <th class="px-6 py-3 font-medium">Author</th>
                            <th class="px-6 py-3 font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-400 border-b border-default">
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">contoh</td>
                            <td class="px-6 py-4">Hujan</td>
                            <td class="px-6 py-4">Novel terbaru</td>
                            <td class="px-6 py-4">2020</td>
                            <td class="px-6 py-4">Action</td>
                            <td class="px-6 py-4">Tereliye</td>
                            <td class="px-6 py-4">
                                <a href="">Detail</a>
                                <a href="">Delete</a>
                                <a href="">Edit</a>
                            </td>
                        </tr>
                    </tbody>
            </table>
    </div>
@endsection