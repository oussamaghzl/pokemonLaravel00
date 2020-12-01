<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TypeController;
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


Route::get('/formulaire-type', [TypeController::class,'create']);
Route::post('/creation-type', [TypeController::class,'store']);

// Pokemon

Route::get('/', [PokemonController::class,'index']);
Route::get('/formulaire-pokemon', [PokemonController::class,'create']);


Route::get('/show/{id}', [PokemonController::class,'show']);


Route::post('/creation-pokemon', [PokemonController::class,'store']);
Route::post('/modification-pokemon/{id}', [PokemonController::class,'update']);
Route::post('/suppr/{id}', [PokemonController::class,'destroy']);


