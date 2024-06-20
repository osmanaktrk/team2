<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentLikeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\PostDislikeController;
use App\Http\Controllers\ReadedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UsertypeRequestController;




Route::get('/main', [MainController::class, 'index'])->name('main');




Route::post('/contact-guest', [ContactController::class, 'guestContact'])->name('contact-guest');



Route::get('/faq', function () {
    return view('faq');
})->name('faq');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');;





Route::middleware(['auth', 'banned'])->group(function () {

    Route::middleware('admin')->group(function(){
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::get('/admin-contacts-messages', [AdminController::class, 'showAdminContactMessages'])->name("admin-contacts-messages");
        Route::delete('/admin-contact-delete', [AdminController::class, 'deleteContact'])->name('admin-contact-delete');




        Route::get('/admin-userstype-requests', [AdminController::class, 'showAdminUsertypeRequests'])->name("admin-userstype-requests");

        Route::put('/admin-usertype-accept', [AdminController::class, 'accept'])->name("admin-usertype-accept");

        Route::delete('/admin-usertype-reject', [AdminController::class, 'reject'])->name("admin-usertype-reject");

        Route::put('/admin-userpassword-reset', [AdminController::class, 'resetPassword'])->name('admin-userpassword-reset');
        Route::put('/admin-user-block', [AdminController::class, 'userBlock'])->name('admin-user-block');

        Route::delete('admin-user-delete/{id}', [AdminController::class, 'deleteUser'])->name('admin-user-delete');


        Route::get('/admin-users', [AdminController::class, 'showAdminUsers'])->name("admin-users");
        Route::get('/admin-post-categories', [AdminController::class, 'showAdminPostCategories'])->name("admin-post-categories");
        Route::post('/admin-post-categories-create', [AdminController::class, 'createCategory'])->name('admin-post-categories-create');
        Route::delete('/admin-post-categories-delete/{id}', [AdminController::class, 'deleteCategory'])->name('admin-post-categories-delete');
        Route::put('admin-post-categories-edit/{id}', [AdminController::class, 'editCategory'])->name('admin-post-categories-edit');






    });

    
    Route::get('/add-favorite/{post_id}', [FavoriteController::class, 'addFavorite'])->name('add-favorite');
    Route::post('/contact-admin', [ContactController::class, 'adminContact'])->name('contact-admin');
    Route::get('/delete-favorite/{post_id}', [FavoriteController::class, 'deleteFavorite'])->name('delete-favorite');
    Route::get('/profile-index', [ProfileController::class, 'edit'])->name('profile-index');

    Route::get('/message', [MessageController::class, 'index'])->name('message');

    Route::post('/message', [MessageController::class, 'create'])->name('message');


    Route::put('/avatar', [UserController::class, 'avatarUpload'])->name("avatar");

    Route::put('/education', [UserController::class, 'educationUpdate'])->name('education');
    Route::get('/contact-admin', [ContactController::class, 'index'])->name('contact-admin');
    Route::post("/usertype-request", [UsertypeRequestController::class, 'store'])->name('usertype-request');
    Route::get('/unread/{id}', [ReadedController::class, 'unread'])->name('unread');
    Route::get('/post-index/{id}', [PostController::class, 'index'])->name('post-index');

    Route::get('/post-edit/{id}', [PostController::class, 'edit'])->name('post-edit');

    Route::post('/post-edit/{id}', [PostController::class, 'update'])->name('post-edit');

    Route::delete('/post-edit/{id}', [PostController::class, 'delete'])->name('post-edit');

    Route::post('/donwload', [ExtraController::class, 'download'])->name('download');

    Route::get('/post-create', [PostController::class, 'create'])->name('post-create');

    Route::post('/post-create', [PostController::class, 'store'])->name('post-create');


    Route::get('/like/{id}', [PostLikeController::class, 'postLike'])->name('like');

    Route::get('/dislike/{id}', [PostDislikeController::class, 'postDislike'])->name('dislike');


    Route::post('/comment', [CommentController::class, 'store'])->name('comment-create');

    Route::put('/comment', [CommentController::class, 'update'])->name('comment-edit');

    Route::delete('/comment', [CommentController::class, 'delete'])->name('comment-delete');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
