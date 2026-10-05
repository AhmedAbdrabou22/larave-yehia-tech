<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class,'index'])->name('home');


Route::get('/about',[AboutController::class,'index']);

Route::get('/contact',[ContactController::class,'index']);

Route::get('/post',[PostController::class,'index']);
Route::get('/post/create',[PostController::class,'create']);
Route::get('/post/{id}',[PostController::class,'show']);
Route::get('/post-delete',[PostController::class,'delete']);
Route::get('/post-tag/{id}',[PostController::class,'postATags']);


Route::get('/company',[CompanyController::class,'index']);
Route::get('/company/create',[CompanyController::class,'create']);
Route::get('/company/{id}',[CompanyController::class,'show']);
Route::get('/company-delete',[CompanyController::class,'delete']);


Route::get('/comments',[CommentController::class,'index']);
Route::get('/comments/create',[CommentController::class,'create']);




Route::get('/tag',[TagController::class,'index']);
Route::get('/tag/create',[TagController::class,'create']);
Route::get('/tag/testTags',[TagController::class,'testTags']);

