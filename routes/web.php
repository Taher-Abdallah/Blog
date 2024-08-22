<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Sessioncontroller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class,'index']);
Route::get('/post/create', [PostController::class,'create']);
Route::post('/post/create', [PostController::class,'store']);
Route::PUT('/posts/{post}', [PostController::class,'update']);

Route::get('/post/{post}', [PostController::class,'show']);
Route::get('/post/{post}/edit',[PostController::class,'edit']);
Route::delete('/posts/{post}', [PostController::class,'destroy']);


Route::get('/login', [Sessioncontroller::class,'index']);
Route::post('/login', [SessionController::class, 'store']);


Route::get('/register', [Registercontroller::class,'index']);
Route::post('/register', [Registercontroller::class, 'store']);

Route::post('/logout', [SessionController::class,'destroy']);
