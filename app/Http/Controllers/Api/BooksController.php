<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookStoreRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Repositories\BooksRepository;
use Illuminate\Http\Response;

class BooksController extends Controller
{

    public function __construct(
        public BooksRepository $booksRepository
    ){}

    public function index()
    {
        return BookResource::collection($this->booksRepository->all());
    }

    public function store(BookStoreRequest $request)
    {
        return new BookResource($this->booksRepository->create($request->validated()));
    }

    public function show(Book $book)
    {
        return new BookResource($book);
    }

    public function update(BookStoreRequest $request, Book $book)
    {
        $book->update($request->validated());
        return new BookResource($book);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function getByAuthor($authorId)
    {
        return BookResource::collection($this->booksRepository->getBooksByAuthor($authorId));
    }
}
