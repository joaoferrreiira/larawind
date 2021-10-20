<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\AvatarsController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\GlossaryController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\JourneysController;
use App\Http\Controllers\ChallengesCategoriesController;
use App\Http\Controllers\PlantsTypesCategoriesController;
use App\Http\Controllers\JourneysChallengesController;
use App\Http\Controllers\PlantsController;
use App\Http\Controllers\PlantsTypesController;
use App\Http\Controllers\PlantsCoordinatesController;
use App\Http\Controllers\ChallengesController;
use App\Http\Controllers\PrizesController;

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

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::resource('jogadores', UsersController::class);
    Route::resource('avatares', AvatarsController::class);
    Route::resource('plantas', PlantsController::class);
    Route::resource('categorias-tipos-plantas', PlantsTypesCategoriesController::class);
    Route::resource('tipos-plantas', PlantsTypesController::class);
    Route::resource('coordenadas-plantas', PlantsCoordinatesController::class);
    Route::resource('categorias-desafios', ChallengesCategoriesController::class);
    Route::resource('desafios', ChallengesController::class);
    Route::resource('premios', PrizesController::class);
    Route::resource('jornadas', JourneysController::class);
    Route::resource('desafios-jornadas', JourneysChallengesController::class);
    Route::resource('dicas', TipsController::class);
    Route::resource('glossario', GlossaryController::class);
    Route::resource('definicoes', SettingsController::class);
});
