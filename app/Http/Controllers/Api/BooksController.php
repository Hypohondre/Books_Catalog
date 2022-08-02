<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Repositories\BooksRepository;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function __construct(
        public BooksRepository $booksRepository
    ){}

    public function index()
    {
        return BookResource::collection($this->booksRepository->all());
    }

    public function store(Request $request)
    {
//        return $request->all();
        return new BookResource($this->booksRepository->create($request));
    }

    public function show($id)
    {
        return new BookResource($this->booksRepository->find($id));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return new BookResource($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
