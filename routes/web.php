<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PostController::class, 'index'])->name('dashboard');
Route::get('/discover', [PostController::class, 'index'])->name('post.allPosts');
Route::get('/following', [PostController::class, 'followingPosts'])->name('post.byFollowing');
Route::get('/category/{category}', [PostController::class, 'categoryPosts'])->name('post.byCategory');

Route::get('/@{user:username}', [PublicProfileController::class, 'show'])->name('profile.show');
Route::get('/@{username}/{post:slug}', [PostController::class, 'show'])->name('post.show');

Route::middleware(['auth', 'verified'])->group(function () {

  Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
  Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
  Route::get('/post/{post:slug}', [PostController::class, 'edit'])->name('post.edit');
  Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');
  Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

  Route::get('/my-posts', [PostController::class, 'myPosts'])->name('myPosts');
  Route::post('/follow/{user:username_unique_id}', [FollowerController::class, 'followUnfollow'])->name('follow');
  Route::post('/like/{post}', [LikeController::class, 'like'])->name('like');

  // Route::get('/comment', [CommentController::class, 'index'])->name('comment.show');
  Route::post('/comment/create', [CommentController::class, 'store'])->name('comment.store');
  // Route::get('/comment/{comment:slug}', [CommentController::class, 'edit'])->name('comment.edit');
  // Route::put('/comment/{comment}', [CommentController::class, 'update'])->name('comment.update');
  Route::delete('/comment/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
});

Route::middleware('auth')->group(function () {
  Route::get('/my/settings', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/my/settings', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/my/settings', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
