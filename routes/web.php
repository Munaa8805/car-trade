<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestiminolController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/service', [HomeController::class, 'services'])->name('services');
Route::get('/team', [HomeController::class, 'team'])->name('team');
// Route::get('/testiminols', [TestiminolController::class, 'index']);
// Route::get('/testiminols/create', [TestiminolController::class, 'create']);
// Route::get('/testiminols/{id}', [TestiminolController::class, 'show']);
Route::resource('/testiminols', TestiminolController::class)->only(['index', 'create', 'show', 'destroy', 'edit', 'update']);
