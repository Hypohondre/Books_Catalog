<?php

namespace App\Repositories;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksRepository implements AbstractRepository
{
    public function all()
    {
        return Book::all();
    }

    public function find($id)
    {
        return Book::query()->findOrFail($id);
    }

    public function create(array $data)
    {
        return Book::query()->create($data);
    }
}
