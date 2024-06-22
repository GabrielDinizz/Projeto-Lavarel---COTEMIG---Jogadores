<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogadorController;

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
Route::get('/', [JogadorController::class, 'index']);
Route::get('/cadastrar', [JogadorController::class, 'cadastro']);
Route::post('/store', [JogadorController::class, 'store']);
Route::delete('/cadastrar/{id}', [JogadorController::class,'destroy']); 