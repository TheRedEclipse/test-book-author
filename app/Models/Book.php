<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    protected $with = [
        'authors'
    ];


    public function authors()
    {
        return $this->belongsToMany(Author::class, BookHasAuthor::class)->select('name');
    }
}
