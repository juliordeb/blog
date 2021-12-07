<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;

Route::get('/', function () {
    return view('cursos.home');
})->name('home');

Route::get('/contact', function () {
    return view('messages.contact');
})->name('contact');

Route::post('contact', [MessagesController::class, 'store']);


Route::get('/about', function () {
    return view('cursos.about');
})->name('about');

Route::resource('cursos', CursosController::class);


 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

