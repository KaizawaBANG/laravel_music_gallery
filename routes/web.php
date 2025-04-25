<?php

use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MusicController::class, 'index'])->name('home');
Route::resource('music', MusicController::class);