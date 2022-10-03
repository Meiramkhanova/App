<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/',[PostController::class ,'main'])->name('post.main');
Route::get('/band',[PostController::class ,'band'])->name('post.band');
Route::get('/tour',[PostController::class ,'tour'])->name('post.tour');
Route::get('/contact',[PostController::class ,'contact'])->name('post.contact');



