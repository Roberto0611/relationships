<?php

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba',function(){

    $post = Post::find(1);

    //$post->tags()->attach([1,2]);
    
    $post->tags()->sync(ids: [1,2,3]);

    //$post->tags()->detach([2]);
    
    return $post->tags;
});