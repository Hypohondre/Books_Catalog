<?php

namespace App\Repositories;


use Illuminate\Http\Request;

interface AbstractRepository
{
    public function all();

    public function find($id);

    public function create(Request $request);

    public function update($id, Request $request);

    public function delete($id);
}
