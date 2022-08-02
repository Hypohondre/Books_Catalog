<?php

namespace App\Repositories;


use Illuminate\Http\Request;

interface AbstractRepository
{
    public function all();

    public function find($id);

    public function create(array $data);
}
