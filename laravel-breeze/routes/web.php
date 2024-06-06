<?php

use App\Http\Controllers\YourControllerName;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
});
    
Route::get('/register', function () {
    return view('register');
});

Route::get('/main', [PostController::class, 'redirectToMain'])->middleware(['auth', 'verified'])->name('main');

Route::get('/FAQ', function () {
    return view('FAQ');
})->name('FAQ');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', function () {
    return view('edit');
})->middleware(['auth', 'verified'])->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/profile-photo.upload', [ProfileController::class, 'photoUpload'])->name("profile-photo.upload");
    Route::delete('/profile-photo.deleted', [ProfileController::class, 'photoDelete'])->name("profile-photo.delete");

    Route::get('/post/create', [PostController::class, 'index'])->name('post.create');
    Route::post('/post/create', [PostController::class, 'store'])->name('post.store');

    Route::get('/post/id-{postId}', [PostController::class, 'postShow'])->name('post.index');
});


require __DIR__.'/auth.php';
require __DIR__.'/student.php';
require __DIR__.'/teacher.php';