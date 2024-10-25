<?php

use App\Http\Controllers\FileManagerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bikes', [App\Http\Controllers\BikeController::class, 'index'])->name('bikes.index');
Route::get('/bikes/type/{type}', [App\Http\Controllers\BikeController::class, 'type'])->name('bikes.type');

Route::get('file-manager/{folder?}', [FileManagerController::class, 'index'])
    ->where('folder', '(.*)')
    ->name('file-manager.index');




