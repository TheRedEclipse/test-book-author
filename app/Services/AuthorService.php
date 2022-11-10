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

    public function index() : object
    {
        return $this->author->all();
    }

}