<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'email',
        'bio'
    ];

    // One author has many books
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
