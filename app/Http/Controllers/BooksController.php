<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\Genres;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index(){
        return view('books.index');
    }

    public function create(){
        $genres = Genres::all();
        $authors = Authors::all();
        return view('books.create', compact('genres','authors'));
    }
    
}
