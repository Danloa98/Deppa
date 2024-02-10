<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DetalleEmpleadoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DetalleDepartamentoController;
use App\Http\Controllers\DetalleEmpleadoDeptController;
use App\Http\Controllers\EstadisticasController;

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
    return view('dashboard'); 
})->name('modulo2');

Route::get('/modulo3', function () {
    return view('dashboard'); 
})->name('modulo3');

Route::get('/relaciones-laborales', function () {
    return view('relaciones_laborales');
})->name('relaciones_laborales');


Route::get('/catalogos', function () {
    return view('catalogos');
})->name('catalogos');


Route::get('/empleados', function () {
    return view('empleados');
})->name('empleados');


Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/detalles/{id}', [EmpleadoController::class, 'detalles']);

Route::get('/empleados/detalles/{id}/certificaciones', [DetalleEmpleadoController::class, 'certificaciones']);
Route::get('/empleados/detalles/{id}/capacitaciones', [DetalleEmpleadoController::class, 'capacitaciones']);
Route::get('/empleados/detalles/{id}/historial', [DetalleEmpleadoController::class, 'historial']);
Route::get('/empleados/detalles/{id}/evaluaciones', [DetalleEmpleadoController::class, 'evaluaciones']);




Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos');
Route::get('/departamentos/detalles/{departamento}', [DetalleDepartamentoController::class, 'detalles'])->name('detalle_departamento');



Route::get('/empleados/detalles-departamento/{id}', [DetalleEmpleadoDeptController::class, 'show'])->name('empleados.detalles-departamento');

Route::get('/estadisticas', [EstadisticasController::class, 'index'])->name('estadisticas');

//Route::get('/departamentos', 'DepartamentoController@index')->name('departamentos');
//Route::get('/detalle_departamento/{departamento}', 'DepartamentoController@detalle')->name('detalle_departamento');
//Route::get('/detalle_empleados', 'DepartamentoController@detalleEmpleados')->name('detalle_empleados');
