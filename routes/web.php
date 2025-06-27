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

    $post = Post::find(2);
    
    $post->comments()->create([
        'content' => 'un comentario de prueba :)'
    ]);
    
});