<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeepController;



Route::get('/', [KeepController::class, 'index'])->name('index');
Route::post('/', [KeepController::class, 'create'])->name('create');