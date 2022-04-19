<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OcionController;
use App\Http\Controllers\ProfileController;

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

Route::get("ocion/get/{id}", [OcionController::class, 'readOcion']);
Route::get("ocion/get", [OcionController::class, 'readPost']);
Route::post("ocion/create", [OcionController::class, 'createOcion']);
Route::post('ocion/update/{id}', [OcionController::class, 'updateOcion']);
Route::delete("ocion/delete/{id}", [OcionController::class, 'deleteOcion']);
Route::get('ocion/search', [OcionController::class, 'searchOcion']);

Route::get("profile/get/{id}", [ProfileController::class, 'readProfile']);
Route::get("profile/get", [ProfileController::class, 'readProfiley']);
Route::post("profile/create", [ProfileController::class, 'createProfile']);
Route::post("profile/update/{id}", [ProfileController::class, 'updateProfile']);
Route::delete("profile/delete/{id}", [ProfileController::class, 'deleteProfile']);


