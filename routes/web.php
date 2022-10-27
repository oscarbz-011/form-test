<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::resource('formularios', App\Http\Controllers\FormularioController::class);

Route::resource('encuestados',App\Http\Controllers\ResultadoController::class);
Route::get('/', [App\Http\Controllers\FormController::class, 'create']);
Route::resource('form_view',App\Http\Controllers\FormController::class,);
Route::resource('encuestas', App\Http\Controllers\EncuestaController::class);
Route::resource('preguntas', App\Http\Controllers\EncuestaController::class);

Route::resource('graficos', App\Http\Controllers\GraficoController::class);

