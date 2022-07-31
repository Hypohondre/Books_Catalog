<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function getAllAuthors()
    {
        $authors = Author::all();

        return $this->jsonResponse($authors);
    }
}
