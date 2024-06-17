<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentLikeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\PostDislikeController;
use App\Http\Controllers\ReadedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;




Route::get('/main', [MainController::class, 'index'])->name('main');




Route::get('/contact-admin', [ContactController::class, 'index'])->name('contact-admin');



Route::post('/contact-guest', [ContactController::class, 'guestContact'])->name('contact-guest');

Route::post('/contact-admin', [ContactController::class, 'guestContact'])->name('contact-admin');





Route::get('/faq', function(){
    return view('faq');
})->name('faq');


Route::get('/profile-index', [ProfileController::class, 'edit'])->name('profile-index');

Route::put('/avatar', [UserController::class, 'avatarUpload'])->name("avatar.upload");

Route::delete('/avatar', [UserController::class, 'avatarDelete'])->name("avatar.delete");
    
Route::post('/profile-education.upload', [UserController::class, 'educationUpdate'])->name('profile-education.upload');
    

Route::get('/post-index/{id}', [PostController::class, 'index'])->name('post-index');

Route::get('/post-edit/{id}', [PostController::class, 'edit'])->name('post-edit');

Route::post('/post-edit/{id}', [PostController::class, 'update'])->name('post-edit');

Route::delete('/post-edit/{id}', [PostController::class, 'delete'])->name('post-edit');


Route::post('/comment', [CommentController::class, 'store'])->name('comment-create');

Route::put('/comment', [CommentController::class ,'update'])->name('comment-edit');

Route::delete('/comment', [CommentController::class, 'delete'])->name('comment-delete');



Route::get('/post-create', [PostController::class, 'create'])->name('post-create');

Route::post('/post-create', [PostController::class, 'store'])->name('post-create');


Route::get('/add-favorite/{post_id}', [FavoriteController::class, 'addFavorite'])->name('add-favorite');

Route::get('/delete-favorite/{post_id}', [FavoriteController::class, 'deleteFavorite'])->name('delete-favorite');

Route::get('/unread/{id}', [ReadedController::class, 'unread'])->name('unread');



Route::get('/', function () {
    return view('welcome');
})->name('welcome');;





Route::get('/like/{id}', [PostLikeController::class, 'postLike'])->name('like');

Route::get('/dislike/{id}', [PostDislikeController::class, 'postDislike'])->name('dislike');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
