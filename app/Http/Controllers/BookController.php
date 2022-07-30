<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function getAllBooks()
    {
        $books = Book::all();

        return view('books', ['books' => $books]);
    }
}
