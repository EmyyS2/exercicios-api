<?php

use App\Http\Controllers\ExercicioCincoController;
use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExercicioDozeController;
use App\Http\Controllers\ExercicioOitoController;
use App\Http\Controllers\ExercicioQuatroController;
use App\Http\Controllers\ExercicioSeisController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioTres;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioTrezeController;
use App\Http\Controllers\ExercicioUmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', [ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', [ExercicioDoisController::class, 'retornar']);

Route::post('exercicio/tres',[ExercicioTresController::class, 'media']);

Route::post('exercicio/quatro',[ExercicioQuatroController::class, 'parimpar']);

Route::post('exercicio/cinco',[ExercicioCincoController::class, 'divisivel']);

Route::post('exercicio/seis',[ExercicioSeisController::class, 'idade']);

Route::get('exercicio/sete', [ExercicioSeteController::class, 'exibir']);

Route::post('exercicio/oito',[ExercicioOitoController::class, 'Tabuada']);

Route::get('exercicio/nove', [ExercicioSeteController::class, '']);

Route::get('exercicio/dez', [ExercicioSeteController::class, '']);

Route::get('exercicio/onze', [ExercicioSeteController::class, '']);

Route::get('exercicio/doze',[ExercicioDozeController::class, 'Decrescente']);

Route::get('exercicio/treze',[ExercicioTrezeController::class, 'Cinco']);