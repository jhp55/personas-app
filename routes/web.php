<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PaisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// comunas
Route::get('/comunas', [ComunaController::class, 'index']) -> name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store']) ->name('comunas.store') ;
Route::get('/comunas/create', [ComunaController::class, 'create']) -> name('comunas.create');
Route::delete('/comunas/{comuna}',[ComunaController::class, 'destroy']) -> name('comunas.destroy');
Route::put('/comunas/{comuna}',[ComunaController::class, 'update']) -> name('comunas.update');
Route::get('/comunas/{comuna}/edit',[ComunaController::class, 'edit']) -> name('comunas.edit');
// municipios
Route::get('/municipios', [MunicipioController::class, 'index']) -> name('municipios.index');
Route::post('/municipios', [MunicipioController::class, 'store']) ->name('municipios.store') ;
Route::get('/municipios/create', [MunicipioController::class, 'create']) -> name('municipios.create');
Route::delete('/municipios/{municipio}',[MunicipioController::class, 'destroy']) -> name('municipios.destroy');
Route::put('/municipios/{municipio}',[MunicipioController::class, 'update']) -> name('municipios.update');
Route::get('/municipios/{municipio}/edit',[MunicipioController::class, 'edit']) -> name('municipios.edit');
// departamentos
Route::get('/departamentos', [DepartamentoController::class, 'index']) -> name('departamentos.index');
Route::post('/departamentos', [DepartamentoController::class, 'store']) ->name('departamentos.store') ;
Route::get('/departamentos/create', [DepartamentoController::class, 'create']) -> name('departamentos.create');
Route::delete('/departamentos/{departamento}',[DepartamentoController::class, 'destroy']) -> name('departamentos.destroy');
Route::put('/departamentos/{departamento}',[DepartamentoController::class, 'update']) -> name('departamentos.update');
Route::get('/departamentos/{departamento}/edit',[DepartamentoController::class, 'edit']) -> name('departamentos.edit');
// paises
Route::get('/paises', [PaisController::class, 'index']) -> name('paises.index');
Route::post('/paises', [PaisController::class, 'store']) ->name('paises.store') ;
Route::get('/paises/create', [PaisController::class, 'create']) -> name('paises.create');
Route::delete('/paises/{pais}',[PaisController::class, 'destroy']) -> name('paises.destroy');
Route::get('/paises/{pais}/edit', [PaisController::class, 'edit'])->name('paises.edit');
Route::put('/paises/{pais}', [PaisController::class, 'update'])->name('paises.update');