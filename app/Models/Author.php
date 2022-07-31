<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $appends = ['books_count'];

    public function getBooksCountAttribute()
    {
        return $this->belongsToMany(Book::class)->count();
    }
}
