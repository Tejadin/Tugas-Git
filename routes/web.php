<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;

Route::get('/', [HomeController::class, 'index']);

Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
