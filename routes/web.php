<?php

//use App\Http\Controllers\ProfileController;
require __DIR__.'/auth.php';
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\ContactController;
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



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('profiles', ProfileController::class);
    Route::resource('news', NewsController::class);
    Route::resource('faq-categories', FaqCategoryController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('contacts', ContactController::class);
});

// Publicly accessible routes
Route::get('/latest-news', [NewsController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Auth::routes();
