<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\IndexController;
/*
|--------------------------------------------------------------------------
| index Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard.index');
