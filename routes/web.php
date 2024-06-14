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
use App\Http\Controllers\ReadedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;


Route::get('/main', [MainController::class, 'index'])->name('main');




Route::get('/contact-admin', function(){
    return view('contact-admin');
})->name('contact-admin');


Route::get('/faq', function(){
    return view('faq');
})->name('faq');


Route::get('/profile-index', function(){
    return view('profile-index');
})->name('profile-index');

Route::put('/avatar', [UserController::class, 'avatarUpload'])->name("avatar.upload");

Route::delete('/avatar', [UserController::class, 'avatarDelete'])->name("avatar.delete");
    
Route::put('/profile-education.upload', [UserController::class, 'educationUpdate'])->name('profile-education.upload');
    




Route::get('/', function () {
    return view('welcome');
})->name('welcome');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';