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

Route::get('/textos/get', [textos::class, 'get'])->name('textos.get');

Route::get('/wonder', function () {
    return view('home/wonder_text');
})->name('wonder');

Route::get('/wonder/get', [textos::class, 'show'])->name('wonder.get');

Route::get('/texto/{id}', [textos::class, 'show_one'])->name('textos.show_one');

Route::get('/galeria/get', [textos::class, 'get_galeria'])->name('galeria.get');

Route::get('/galeria', function () {
    return view('home/galeria');
})->name('galeria');

Route::get('/proximamente', function () {
    return view('home/proximamente');
})->name('proximamente');


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
    Route::put('/dashboard/text/remove_img/{id}', [textos::class, 'destroy_img'])->name('text.remove_img');
    Route::delete('/dashboard/text/delete/{id}', [textos::class, 'destroy'])->name('text.delete');
});
