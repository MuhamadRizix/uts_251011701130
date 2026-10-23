<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;

Route::get('/', [ToyController::class, 'index'])->name('toys.index');
Route::get('/mainan/{toy}', [ToyController::class, 'show'])->name('toys.show');