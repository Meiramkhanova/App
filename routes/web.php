<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/',function(){
    return redirect()->route('post.index');
});

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post',[ PostController:: class,'store'])->name('post.store');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

