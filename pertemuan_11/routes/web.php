<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ContactController;

 
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/layanan', [PageController::class, 'services'])->name('services'); 
 
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

 
Route::get('/certifications', [CertificationController::class, 'index'])->name('certifications.index');
 
Route::get('/kontak', [ContactController::class, 'index'])->name('contact.index');
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');