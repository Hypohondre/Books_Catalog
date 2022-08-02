<?php

namespace App\Repositories;

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

    public function create(Request $request)
    {
        return Book::query()->create($request->all());
    }

    public function update($id, Request $request)
    {
        $fields = $request->post();
        $fields['id'] = $id;
        return Book::query()->updateOrCreate($fields);
    }

    public function delete($id)
    {
    }
}
