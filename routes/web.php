<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\MessagesController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('cursos.home');
})->name('home');

Route::get('/contact', function () {
    return view('cursos.contact');
})->name('contact');

Route::get('/about', function () {
    return view('cursos.about');
})->name('about');

Route::get('/cursos', [CursosController::class, 'index'])->name('cursos.index');
Route::post('/cursos', [CursosController::class, 'store'])->name('cursos.store');
Route::get('/cursos/crear', [CursosController::class, 'create'])->name('cursos.crear');
Route::get('/cursos/{cursos}', [CursosController::class, 'show'])->name('cursos.show');
Route::post('contact', [MessagesController::class, 'store']);

