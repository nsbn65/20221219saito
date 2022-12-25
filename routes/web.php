<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ContactController;

Route::get('/',[ContactController::class, 'index'])->name('index');
Route::get('/confirm',[ContactController::class, 'confirm'])->name('confirm');
Route::post('/confirm',[ContactController::class, 'confirm'])->name('confirm');
Route::post('/send',[ContactController::class, 'send'])->name('send');
Route::get('/control',[ContactController::class, 'search'])->name('control');
Route::post('/find',[ContactController::class, 'find'])->name('find');
Route::post('/delete/{id}',[ContactController::class, 'delete'])->name('delete');
