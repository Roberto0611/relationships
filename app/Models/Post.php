<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];

    // Relacion uno a muchos
    public function comments(){
        //return $this->hasMany(Comment::class);
        return $this->morphMany(Comment::class, 'commentable');
    }

    // Relacion muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}