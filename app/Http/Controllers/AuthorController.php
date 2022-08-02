<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorResource;
use App\Models\Author;

class AuthorController extends Controller
{
    public function getAllAuthors()
    {
        return AuthorResource::collection(Author::all());
    }
}
