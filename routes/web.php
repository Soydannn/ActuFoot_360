<?php

use Illuminate\Support\Facades\Route;
use App\Models\Actualite;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\TransfertController;
use App\Http\Controllers\PalmaresController;
use App\Http\Controllers\ChampionsLeagueController;
use App\Http\Controllers\NationsLeagueController;

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

Route::get('/', [ActualiteController::class, 'index'])->name('actualites.index');

Route::get('/actualites/{id}', [ActualiteController::class, 'show'])->name('actualites.show');

Route::get('/transferts', [TransfertController::class, 'index'])->name('transferts.index');

Route::get('/palmares', [PalmaresController::class, 'index'])->name('palmares.index');

Route::get('/champions-league', [ChampionsLeagueController::class, 'index'])->name('champions.index');

Route::get('/nations-league', [NationsLeagueController::class, 'index'])->name('nations.index');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
