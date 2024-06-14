<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/main', function(){
    return view('main');
})->name('main');

Route::get('/contact-admin', function(){
    return view('contact-admin');
})->name('contact-admin');


Route::get('/faq', function(){
    return view('faq');
})->name('faq');


Route::get('/profile-new', function(){
    return view('profile-new');
})->name('profile-new');






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
