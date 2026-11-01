<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Rotte Principali
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/about', [PublicController::class, 'about_us'])->name('about_us');

// Rotta con Parametro
Route::get('/jedi/detail/{id}', [PublicController::class, 'jedi_detail'])->name('jedi_detail');

// Rotte Contatti (Gestite da PublicController)
Route::get('/contact_us', [PublicController::class, 'contact'])->name('contact_us');
Route::post('/contact_us', [PublicController::class, 'contactUs'])->name('contact_us.submit');