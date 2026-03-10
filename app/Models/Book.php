<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'published_year',
        'author_id'
    ];

    // Book belongs to author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
