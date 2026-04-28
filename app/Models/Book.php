<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $fillable = ['author_id', 'genre_id', 'title', 'description', 'stock', 'cover_photo', 'image'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
