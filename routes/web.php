<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FaqController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Require login for ALL routes inside this group
Route::middleware(['auth', 'verified'])->group(function () {

    // Static pages
    Route::get('/', [StaticController::class, 'home'])->name('home');
    Route::get('profile', [StaticController::class, 'profile'])->name('profile');
    Route::get('dashboard', [StaticController::class, 'dashboard'])->name('dashboard');

    // FAQ routes
    Route::get('faq', [FaqController::class, 'index'])->name('faq.index');
    Route::get('faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('faq', [FaqController::class, 'store'])->name('faq.store');
    Route::get('faq/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit');
    Route::put('faq/{faq}', [FaqController::class, 'update'])->name('faq.update');
    Route::delete('faq/{faq}', [FaqController::class, 'delete'])->name('faq.delete');

    // Post routes
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('posts/{slug}/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
});

// Auth routes (login, register, etc.)
require __DIR__.'/auth.php';
