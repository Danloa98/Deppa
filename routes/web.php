<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    // Lógica de autenticación
    return redirect('/');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/modulo2', function () {
    return view('dashboard'); // Puedes cambiar la vista para Modulo 2 según sea necesario
})->name('modulo2');

Route::get('/modulo3', function () {
    return view('dashboard'); // Puedes cambiar la vista para Modulo 3 según sea necesario
})->name('modulo3');

Route::get('/relaciones-laborales', function () {
    return view('relaciones_laborales');
})->name('relaciones_laborales');


Route::get('/catalogos', function () {
    return view('catalogos');
})->name('catalogos');
