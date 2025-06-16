<?php

use Illuminate\Support\Facades\Route;
use App\Models\Actualite;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\TransfertController;
use App\Http\Controllers\PalmaresController;
use App\Http\Controllers\ChampionsLeagueController;
use App\Http\Controllers\NationsLeagueController;
use App\Http\Controllers\VideoController;

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

Route::get('/', [ActualiteController::class, 'index'])->name('actualites');

Route::get('/actualites/{id}', [ActualiteController::class, 'show'])->name('actualites.show');

Route::get('/transferts', [TransfertController::class, 'index'])->name('transferts');

Route::get('/palmares', [PalmaresController::class, 'index'])->name('palmares');

Route::get('/champions', [ChampionsLeagueController::class, 'index'])->name('champions');

Route::get('/nations', [NationsLeagueController::class, 'index'])->name('nations');

Route::get('/videos', [VideoController::class, 'index'])->name('videos');






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
