<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\textos as textos;
use App\Http\Controllers\Auth\LoginController as LoginController;

// Home
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/textos', function () {
    return view('home/textos');
})->name('textos');

Route::get('/wonder', [textos::class, 'show'])->name('wonder');


// Login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

// Protected routes that require authentication
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    
    //Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Backend_Textos
    Route::get('/dashboard/text', function () {
        return view('dashboard/text');
    })->name('text');

    Route::get('dashboard/text/edit', function () {
        return view('dashboard/text_edit');
    })->name('text.edit');
    
    Route::get('/dashboard/text/get', [textos::class, 'index'])->name('text.index');
    Route::post('/dashboard/text/store', [textos::class, 'store'])->name('text.store');
    Route::get('/dashboard/text/edit/{id}', [textos::class, 'edit'])->name('text.load_edit');
    Route::put('/dashboard/text/update/{id}', [textos::class, 'update'])->name('text.update');
    Route::delete('/dashboard/text/delete/{id}', [textos::class, 'destroy'])->name('text.delete');
});
