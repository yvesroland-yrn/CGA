<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;

Route::get('/', [AccueilController::class, 'index'])->name('App_index');
Route::get('/a-propos', [AccueilController::class, 'about'])->name('App_about');
Route::get('/contact', [AccueilController::class, 'contact'])->name('App_contact');
