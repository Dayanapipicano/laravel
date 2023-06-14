<?php

use App\Http\Controllers\cursoController;
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
    return "hola pastuso";
});

Route::get('pepe', function () {
    return "que viva pasto carajo";
});
Route::get('cursos', [cursoController::class,'index']);
Route::get('amigo/{num1}/{num2}', [cursoController::class,'amigo']);
route::get('par/{num1}',[cursoController::class, 'par']);
route::get('primo/{num1}',[cursoController::class, 'primo']);
