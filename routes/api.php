<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




// POST

Route::post('login', [\App\Http\Controllers\Api\AppController::class, 'login']);
Route::post('register', [\App\Http\Controllers\Api\AppController::class, 'register']);
Route::post('getUserPoints', [\App\Http\Controllers\Api\AppController::class, 'getUserPoints']);
Route::post('setUserPoints', [\App\Http\Controllers\Api\AppController::class, 'setUserPoints']);
Route::post('getCoordinates', [\App\Http\Controllers\Api\AppController::class, 'getCoordinates']);
Route::post('getPlantsFound', [\App\Http\Controllers\Api\AppController::class, 'getPlantsFound']);
Route::post('getPlantInfo', [\App\Http\Controllers\Api\AppController::class, 'getPlantInfo']);
Route::post('getSinglePlantInfo', [\App\Http\Controllers\Api\AppController::class, 'getSinglePlantInfo']);
Route::post('addCoordinate', [\App\Http\Controllers\Api\AppController::class, 'addCoordinate']);
Route::post('getJourneys', [\App\Http\Controllers\Api\AppController::class, 'getJourneys']);
Route::post('getJourneyChallenges', [\App\Http\Controllers\Api\AppController::class, 'getJourneyChallenges']);
Route::post('getInfoTopBarMap1', [\App\Http\Controllers\Api\AppController::class, 'getInfoTopBarMap1']);
Route::post('getInfoTopBarMap2', [\App\Http\Controllers\Api\AppController::class, 'getInfoTopBarMap2']);


// GET

Route::get('getEmailsRegistered', [\App\Http\Controllers\Api\AppController::class, 'getEmailsRegistered']);
Route::get('getSettings', [\App\Http\Controllers\Api\AppController::class, 'getSettings']);
Route::get('getPlantsTypesCategories', [\App\Http\Controllers\Api\AppController::class, 'getPlantsTypesCategories']);
Route::get('getPlantsTypes', [\App\Http\Controllers\Api\AppController::class, 'getPlantsTypes']);
Route::get('getTips', [\App\Http\Controllers\Api\AppController::class, 'getTips']);
Route::get('getChallengesCategories', [\App\Http\Controllers\Api\AppController::class, 'getChallengesCategories']);
Route::get('getChallenges', [\App\Http\Controllers\Api\AppController::class, 'getChallenges']);
Route::get('getPlantInfo', [\App\Http\Controllers\Api\AppController::class, 'getPlantInfo']);
Route::get('getPrizes', [\App\Http\Controllers\Api\AppController::class, 'getPrizes']);
Route::get('getAvatars', [\App\Http\Controllers\Api\AppController::class, 'getAvatars']);
Route::get('getGlossary', [\App\Http\Controllers\Api\AppController::class, 'getGlossary']);
