<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/authors', [\App\Http\Controllers\AuthorController::class, 'getAllAuthors']);
//Route::get('/books', [\App\Http\Controllers\BookController::class, 'getAllBooks']);
//Route::get('/books/author/{id}', [\App\Http\Controllers\BookController::class, 'getBooksByAuthor']);

Route::resource('books', \App\Http\Controllers\Api\BooksController::class);
