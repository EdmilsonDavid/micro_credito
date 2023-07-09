<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD

Route::get('ClientesController', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes.index');

Route::get('EmprestimosController', [App\Http\Controllers\EmprestimosController::class, 'index'])->name('emprestimos.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes');
Route::get('all/clientes', [ClientesController::class, 'allClientes'])->name('all.clientes');
>>>>>>> 7022c4aba1eccc3615e6925020b1424313e3da2c
