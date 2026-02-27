<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\GenresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


// ROute Genre
 Route::get('/genre',[GenresController::class, 'index'])->name('genre.index');
 Route::get('/genre/create',[GenresController::class, 'create'])->name('genre.create');
 Route::post('/genre/create',[GenresController::class, 'store'])->name('genre.store');
 Route::get('/genre/edit/{id}',[GenresController::class, 'edit'])->name('genre.edit');
 Route::put('/genre/edit/{id}',[GenresController::class, 'update'])->name('genre.update');
 Route::delete('/genre/delete/{id}',[GenresController::class, 'destroy'])->name('genre.destroy');
 // END ROUTE GENRE

 // Route Author
Route::get('/author', [AuthorsController::class, 'index'])->name('penulis.index');
Route::get('/author/create', [AuthorsController::class, 'create'])->name('penulis.create');
Route::post('/author/create', [AuthorsController::class , 'store'])->name('penulis.store');
Route::get('/author/show/{id}',[AuthorsController::class, 'show'])->name('penulis.show');
Route::delete('/author/delete/{id}',[AuthorsController::class, 'destroy'])->name('penulis.destroy');
Route::get('/author/edit/{id}', [AuthorsController::class, 'edit'])->name('penulis.edit');
Route::put('/author/update/{id}', [AuthorsController::class, 'update'])->name('penulis.update');
 // END ROUTE AUTHOR

 //Books
Route::get('/books', [BooksController::class, 'index'])->name('book.index');
Route::get('/books/create', [BooksController::class, 'create'])->name('book.create');
Route::post('/books/create', [BooksController::class, 'store'])->name('book.store');
 //END BOOKS


