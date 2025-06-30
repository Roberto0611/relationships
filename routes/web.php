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
    
    $post->comments()->create([
        'content' => 'Comentario desde la ruta'
    ]);

});