<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    use HasFactory;

    // protected $primaryKey = 'user_id';
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
        // return $this->hasManyThrough(Book::class, User::class, 'id', 'id');

        // return $this->hasManyThrough(Book::class, User::class);

    }
}
