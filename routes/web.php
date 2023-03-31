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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('can:home')->name('home');
Route::get('/eventos', [App\Http\Controllers\HomeController::class, 'eventos'])->name('eventos');

Route::get('/prueba', [App\Http\Controllers\HomeController::class, 'prueba'])->name('prueba');

Route::get('/hola', [App\Http\Controllers\HomeController::class, 'hola'])->name('hola');
Route::get('/form', [App\Http\Controllers\HomeController::class, 'form'])->name('form');
Route::get('/answer', [App\Http\Controllers\HomeController::class, 'formanswer'])->middleware('can:answer')->name('answer');


//aprendices
Route::get('/apprentices', [App\Http\Controllers\ApprenticeController::class, 'index'])->middleware('can:apprentices')->name('apprentices');
Route::get('/apprentices/add', [App\Http\Controllers\ApprenticeController::class, 'getapprenticeadd'])->name('apprentice.add');
Route::post('/apprentices/add', [App\Http\Controllers\ApprenticeController::class, 'postapprenticeadd'])->name('apprentice.add');
Route::get('/apprentices/edit/{id}', [App\Http\Controllers\ApprenticeController::class, 'getapprenticeedit'])->name('apprentice.edit');
Route::post('/apprentices/edit/{id}', [App\Http\Controllers\ApprenticeController::class, 'postapprenticeedit'])->name('apprentice.edit');
Route::get('/apprentices/delete/{id}', [App\Http\Controllers\ApprenticeController::class, 'getapprenticedelete'])->name('apprentice.delete');

//projecto
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');

//calculadora
Route::get('/calculator', [App\Http\Controllers\CalculatorController::class, 'index'])->middleware('can:calculator')->name('calculator');
Route::post('/resultado', [App\Http\Controllers\CalculatorController::class, 'resultado'])->name('resultado');
