<?php

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
    return view('welcome');
});
//GET
//POST
//PUT
//DELETE

Route::get('/empresas', [App\Http\Controllers\EmpresasController::class, 'index'])->name('empresas.index');
Route::get('/empresas/create', [App\Http\Controllers\EmpresasController::class, 'create'])->name('empresas.create');
Route::post('/empresas/store', [App\Http\Controllers\EmpresasController::class, 'store'])->name('empresas.store');
Route::get('/empresas/show', [App\Http\Controllers\EmpresasController::class, 'show'])->name('empresas.show');
Route::get('/empresas/edit/{id}', [App\Http\Controllers\EmpresasController::class, 'edit'])->name('empresas.edit');
Route::put('/empresas/update/{id}', [App\Http\Controllers\EmpresasController::class, 'update'])->name('empresas.update');
Route::delete('/empresas/delete/{id}', [App\Http\Controllers\EmpresasController::class, 'delete'])->name('empresas.delete');

