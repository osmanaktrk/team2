<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function (){
    Route::post('/profile-photo.upload', [UserController::class, 'photoUpload'])->name("profile-photo.upload");
    Route::delete('/profile-photo.deleted', [UserController::class, 'photoDelete'])->name("profile-photo.delete");
    Route::patch('/profile-education.upload', [UserController::class, 'educationUpdate'])->name('profile-education.upload');
    
    Route::get('/main', [TopicController::class, 'showAll'])->name('main');

    Route::get('/topic/create', [TopicController::class, 'index'])->name('topic.create');
    Route::post('/topic/create', [TopicController::class, 'store'])->name('topic.create');
    Route::get('/topic/{topicId}/delete', [TopicController::class, 'delete'])->name('topic.delete');

    Route::get('/topic/id-{topicId}', [TopicController::class, 'topicShow'])->name('topic.index');

    Route::post('/topic/id-{topicId}', [PostController::class, 'postCreate'])->name('post.store');

    Route::get('/post/{post}/delete', [PostController::class, 'delete'])->name('post.delete');

    Route::post('/post/{postId}/edit', [PostController::class, 'edit'])->name('post.edit');

});



require __DIR__.'/auth.php';
