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

    $user = User::find(1);

    // Phone::create([
    //     'number' => '6131003451',
    //     'phoneable_id' => $user->id,
    //     'phoneable_type' => User::class,
    // ]);

    // $user->phone()->create([
    //     'number' => '613100451'
    // ]);

    return $user->phone;
});