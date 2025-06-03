<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CompanyDescriptionController;
use App\Http\Controllers\HeroSectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/about', [AboutUsController::class, 'index'])->name('about');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('hero_sections', HeroSectionController::class);
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('company_descriptions', CompanyDescriptionController::class);
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('about_us', AboutUsController::class);
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('services', ServiceController::class);
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('projects', ProjectController::class);
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('contact_messages', \App\Http\Controllers\ContactMessageController::class)->only(['index', 'show', 'destroy']);
});

require __DIR__.'/auth.php';
