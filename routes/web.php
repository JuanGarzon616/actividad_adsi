<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JornadaController;
use App\Http\Controllers\ProgramaFormacionController;
use App\Http\Controllers\FichaController;

Route::get('jornadas/{jornada}/delete',JornadaController::class)->name('jornadas.delete');

Route::resource('jornadas',JornadaController::class);

Route::resource('programaformaciones',ProgramaFormacionController::class);

Route::resource('fichas',FichaController::class);
