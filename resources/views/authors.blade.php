@foreach($authors as $author)
    <div>Name - {{ $author->name }}</div>
    <div>Count of books - {{ count($author->books) }}</div>
@endforeach
