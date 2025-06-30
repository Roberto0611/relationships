<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        'name',
    ];

    public function posts(){
        //return $this->belongsToMany(Tag::class);
        return $this->morphedByMany(Post::class, 'taggable');
    }
}
