<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProfileController;

//RUTAS DE ALUMNOS
Route::resource("alumnos", AlumnoController::class);
//Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
//Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
//Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
//Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
//Route::post('/alumnos.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
//Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');
//Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');

//RUTAS DE DEPARTAMENTOS
//Route::resource("puestos", PuestoController::class); //manera simplificada de hacer las rutas

//Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
//Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
//Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');
//Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
//Route::post('/puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');
//Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');
//Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');



Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
