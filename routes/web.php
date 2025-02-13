<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;

Route::get('/', [StaticController::class, 'home'])->name('home');

Route::get('profile', [StaticController::class, 'profile'])->name('profile');

Route::get('dashboard', [StaticController::class, 'dashboard'])->name('dashboard');

Route::get('faq', [FaqController::class, 'index'])->name('faq');

Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('blog-post/{id}', [BlogController::class, 'blogPost'])->name('blogPost');
