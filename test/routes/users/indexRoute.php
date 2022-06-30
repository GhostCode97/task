<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\IndexController;
use App\Http\Controllers\Users\UsersController;

Route::get('/', [IndexController::class, 'index'])->name('users.index');
// Route::get('/register', [UsersController::class, 'create'])->name('users.create');
// Route::post('/register', [UsersController::class, 'store'])->name('users.store');
Route::get('/posts/{id}', [IndexController::class, 'show'])->name('users.post.show');
