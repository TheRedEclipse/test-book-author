<?php
namespace App\Services;

use App\Models\Author;

class AuthorService
{

    protected $author;

    public function __construct(Author $author)
    {
        $this->author = $author;
    }

    /**
     * Display a listing of the Author with filter by author.
     *
     * @return object
     */
    public function index() : object
    {
        return $this->author->all();
    }

}