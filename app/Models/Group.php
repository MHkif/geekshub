<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'book_id',
        'user_id',
        'members'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'members', 'group_id', 'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function isMember() :Attribute
    {
        return new Attribute(function () {
            return $this->users()->where('user_id', auth()->user()->id)->exists();
        });
    
    }

   
}
