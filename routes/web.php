<?php

use App\Http\Controllers\CabinetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'Index']);
Route::get('/posts', [MainController::class, 'Posts'])->name("post.list");
Route::get('/bibleEveryDay', [MainController::class, 'BibleEveryDay']);
Route::get('/homiletics', [MainController::class, 'Homiletics']);
Route::get('/literature', [MainController::class, 'Literature']);
Route::get('/music', [MainController::class, 'Music']);
Route::get('/apologetics', [MainController::class, 'Apologetics']);
Route::get('/questions', [MainController::class, 'Questions']);
Route::get('/posts/create', [MainController::class, 'Create'])->middleware('auth');
Route::get('/posts/edit', [MainController::class, 'Edit'])->name("post.edit")->middleware('auth')->middleware('auth');
Route::get('/register', [RegisterController::class,'create']);
Route::get('/logout', [LoginController::class,'destroy']);
Route::get('/login', [LoginController::class,'create'])->name('login');
Route::get('/cabinet', [CabinetController::class,'Cabinet']);
Route::get('/posts/view/{id}', [MainController::class, 'View'])->name("posts.view");
Route::get('/storage_files', [MainController::class, 'Storage_files'])->middleware('auth');



Route::post('/questions/send', [MainController::class, 'Send_Question'])->name("question.send");
Route::post('/storage_files/upload', [MainController::class, 'Upload'])->name("storage_files.upload")->middleware('auth');
Route::post('/posts/edit', [MainController::class, 'Edit'])->name("posts.edit")->middleware('auth');
Route::post('/posts/upload', [MainController::class, 'UploadImage']);
Route::post('/posts/store', [MainController::class, 'Store'])->name("post.store")->middleware('auth');
Route::post('/register', [RegisterController::class,'store']);
Route::post('/login', [LoginController::class,'store']);
Route::post('/register', [RegisterController::class,'store']);

