<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',[App\Http\Controllers\PostController::class,'index'])->name('post');
Route::get('posts/create',[App\Http\Controllers\PostController::class,'create'])->name('post.create');
Route::post('posts/store',[App\Http\Controllers\PostController::class,'store'])->name('post.store');