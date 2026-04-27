<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'login'])->name('login');
Route::get('/login', [PageController::class, 'login']);

Route::post('/proses-login', [PageController::class, 'prosesLogin'])->name('proses.login');

Route::get('/dashboard/{username}', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan/{username}', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile/{username}', [PageController::class, 'profile'])->name('profile');

