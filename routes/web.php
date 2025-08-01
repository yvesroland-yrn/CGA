<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;

Route::get('/', [AccueilController::class, 'index'])->name('App_index');
Route::get('/a-propos', [AccueilController::class, 'about'])->name('App_about');
Route::get('/contact', [AccueilController::class, 'contact'])->name('App_contact');

// Route POST pour traiter l'envoi du formulaire
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');