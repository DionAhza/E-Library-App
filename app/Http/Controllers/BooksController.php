<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\Books;
use App\Models\Genres;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index(){
        $books = Books::all();
        return view('books.index', compact('books'));
    }

    public function create(){
        $genres = Genres::all();
        $authors = Authors::all();
        return view('books.create', compact('genres','authors'));
    }
    
    public function store(Request $request){
         $books = $request->validate([
            "judul"=> "required|max:255",
            "sinopsis" => "required",
            "tahun_terbit"=>"required",
            "image" => "required|image|mimes:jpg,jpeg,png|max:2048",
            "genre_id" => "required",
            "author_id"=> "required"
         ]);

         $imagePath = $request->file('image')->store('Books','public');
        
        if(!$books){
            return redirect()->route('book.index')->with('error', 'gagal menambahkan data');
        }

         Books::create([
            'judul' => $request->judul,
            "sinopsis" => $request->sinopsis,
            "tahun_terbit" => $request->tahun_terbit,
            "genre_id" => $request->genre_id,
            "author_id"=> $request->author_id,
            "image" => $imagePath
         ]);

         return redirect()->route('book.index')->with('success','berhasil menambahkan data');
    }
}
