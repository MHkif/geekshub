<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'author',
        'rating',
        'cover',
        'url',
        'archived',
        'description',
        'category_id'
    ];

    protected $table = 'books';
    protected $withCount = ['likes'];

    // protected $primaryKey = 'id';

    public function scopeFilter($query, array $filter)
    {
        if ($filter['book'] ?? false) {
            $query->where('title', 'like', '%' . request('book') . '%')
                ->orWhere('description', 'like', '%' . request('book') . '%');
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }


    public function isLiked(): Attribute
    {
        return new Attribute(function () {
            return $this->likes()->where('user_id', auth()->user()->id)->exists();
        });
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }

    public function isFavorite(): Attribute
    {
        return new Attribute(function () {
            return $this->favorites()->where('user_id', auth()->user()->id)->exists();
        });
    }
}
