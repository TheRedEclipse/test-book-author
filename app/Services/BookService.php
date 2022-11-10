<?php

namespace App\Services;

use App\Models\Book;

class BookService
{

    protected $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    /**
     * Display a listing of the Book with filter by author.
     *
     * @return object
     */
    public function index(object $request) : object
    {
        $books =  $this->book;
        if($request->search) {
            $books = $books->whereHas('authors', function($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }

        $books = $books->get();

        foreach ($books as $bookKey => $book) {
            $authors = [];
            foreach ($book->authors as $authorKey => $author) {
                $authors[$authorKey] = $author->name;
            }
            unset($book->authors);

            $books[$bookKey]->authors = implode(', ', $authors);

            $books[$bookKey]->count_authors = count($authors);
        }

        return $books;
    }
}
