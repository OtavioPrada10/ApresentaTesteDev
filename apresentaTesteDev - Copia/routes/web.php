<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/pessoa', [App\Http\Controllers\PessoaController::class, 'index'])->middleware('auth');
Route::get('/pessoa/new', [App\Http\Controllers\PessoaController::class, 'new'])->middleware('auth');
Route::post('/pessoa/add', [App\Http\Controllers\PessoaController::class, 'add'])->middleware('auth');
Route::get('/pessoa/{id}/edit', [App\Http\Controllers\PessoaController::class, 'edit'])->middleware('auth');
Route::post('/pessoa/update/{id}', [App\Http\Controllers\PessoaController::class, 'update'])->middleware('auth');
Route::delete('/pessoa/delete/{id}', [App\Http\Controllers\PessoaController::class, 'delete'])->middleware('auth');
