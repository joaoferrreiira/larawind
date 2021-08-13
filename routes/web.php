<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\PlantsController;
use App\Http\Controllers\PlantsTypeCategoryController;
use App\Http\Controllers\PlantsTypeController;
use App\Http\Controllers\PlantsCoordinatesController;
use App\Http\Controllers\ChallengesCategoriesController;
use App\Http\Controllers\ChallengesController;
use App\Http\Controllers\PrizesController;
use App\Http\Controllers\JourneysController;
use App\Http\Controllers\JourneysChallengesController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\GlossaryController;
use App\Http\Controllers\SettingsController;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::resource('jogadores', PlayersController::class);
    Route::resource('plantas', PlantsController::class);
    //Route::resource('categorias-tipo-plantas', PlantsTypeCategoryController::class); // as 'categorias-tipo-plantas' vao aparecer nos 'tipo-plantas' como categoria pai
    Route::resource('tipo-plantas', PlantsTypeController::class);
    Route::resource('coordenadas-plantas', PlantsCoordinatesController::class);
    Route::resource('categorias-desafios', ChallengesCategoriesController::class);
    Route::resource('desafios', ChallengesController::class);
    Route::resource('premios', PrizesController::class);
    Route::resource('jornadas', JourneysController::class);
    Route::resource('desafios-jornadas', JourneysChallengesController::class);
    Route::resource('dicas', TipsController::class);
    Route::resource('glossario', GlossaryController::class);
    Route::resource('definicoes', SettingsController::class);

    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('forms', 'forms')->name('forms');
    Route::view('cards', 'cards')->name('cards');
    Route::view('charts', 'charts')->name('charts');
    Route::view('buttons', 'buttons')->name('buttons');
    Route::view('modals', 'modals')->name('modals');
    Route::view('tables', 'tables')->name('tables');
    Route::view('calendar', 'calendar')->name('calendar');
});
