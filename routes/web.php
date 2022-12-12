<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\admin\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () 
    return view('create');
});*/

Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario.index');

Route::get('/usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');
Route::post('/usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');

Route::get('usuario/edit/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::post('/usuario/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');

Route::delete('/usuario/{user}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');


