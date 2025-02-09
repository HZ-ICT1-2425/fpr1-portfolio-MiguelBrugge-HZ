<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portfolio;
use App\Http\Controllers\blogs;
use App\Http\Controllers\faq;

Route::get('/', [portfolio::class, 'home'])->name('home');

Route::get('profile', [portfolio::class, 'profile'])->name('profile');

Route::get('dashboard', [portfolio::class, 'dashboard'])->name('dashboard');

Route::get('faq', [faq::class, 'index'])->name('faq');

Route::get('blogs', [blogs::class, 'index'])->name('blogs');
Route::get('blog-post/{id}', [blogs::class, 'blogPost'])->name('blogPost');
