<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function getAllBooks()
    {
        $books = Book::all();
        $authors = Book::with('authors')->get();

        return $this->jsonResponse($authors);
    }
}
