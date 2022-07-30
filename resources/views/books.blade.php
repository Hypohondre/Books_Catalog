@foreach($books as $book)
    <div>Title - {{ $book->title }}</div>
    <div>Year - {{ $book->year }}</div>
    <div>Authors -
    @foreach($book->authors as $author)
            {{ $author->name }},
    @endforeach
    </div>
@endforeach
