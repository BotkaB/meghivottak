<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganisatorController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('organisators', [FeladatController::class,'index']);
Route::get('organisators/{id}', [FeladatController::class,'show']);
Route::post('organisators', [FeladatController::class,'store']);
Route::put('organisators/{id}', [FeladatController::class, 'update']);
Route::delete('organisators/{id}', [FeladatController::class,'destroy']);