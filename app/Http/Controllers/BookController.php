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

    public function getBooksByAuthor($authorId) {
        $books = Book::query()
            ->join('author_book', 'author_book.book_id', '=', 'id')
            ->where('author_book.author_id', '=', $authorId)
            ->get();
        return $this->jsonResponse($books);
    }
}
