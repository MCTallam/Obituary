<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObituaryController;


Route::get('/', function () {
    return view('welcome');
});

 // Route to display the obituary form
Route::get('/obituary-form', function () {
    return view('obituary_form');
})->name('obituary_form');

// Route to handle form submission
Route::post('/submit-obituary', [ObituaryController::class, 'store'])->name('submit_obituary');

// Route to display submitted obituaries
Route::get('/obituaries', [ObituaryController::class, 'index'])->name('view_obituaries');


Route::post('/submit-obituary', [App\Http\Controllers\ObituaryController::class, 'store'])->name('submit_obituary');

Route::delete('/obituaries/{id}', [ObituaryController::class, 'destroy'])->name('obituaries.destroy');

Route::get('/obituaries/{id}/edit', [ObituaryController::class, 'edit'])->name('obituaries.edit');
Route::post('/obituaries/{id}/update', [ObituaryController::class, 'update'])->name('obituaries.update');
