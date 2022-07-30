<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    private array $books = [
        'Тест книга' => [
            'author' => 'Какой-то автор',
            'year' => 2022
        ],
        'Идиот' => [
            'author' => 'Фёдор Михайлович Достоевский',
            'year' => 1868
        ],
        'Пятьдесят оттенков серого' => [
            'author' => 'Э. Л. Джеймс',
            'year' => 2011
        ],
        'Братство Кольца' => [
            'author' => 'Джон Рональд Руэл Толкин',
            'year' => 1954
        ],
        ' Две крепости' => [
            'author' => 'Джон Рональд Руэл Толкин',
            'year' => 1954
        ],
        'Возвращение короля' => [
            'author' => 'Джон Рональд Руэл Толкин',
            'year' => 1955
        ],
        'Хоббит, или Туда и обратно' => [
            'author' => 'Джон Рональд Руэл Толкин',
            'year' => 1937
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->books as $title => $book) {
            $authorId = DB::table('authors')
                ->where('name', '=', $book['author'])
                ->value('id');
            if ($authorId === null) {
                $authorId = DB::table('authors')->insertGetId([
                    'name' => $book['author']
                ]);
            }

            $bookId = DB::table('books')->insertGetId([
                'title' => $title,
                'year' => $book['year']
            ]);

            DB::table('author_book')->insert([
                'book_id' => $bookId,
                'author_id' => $authorId
            ]);
        }
    }
}
