<?php

use App\Http\Controllers\Api\FlightController;
use App\Http\Controllers\Api\SeatsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('login', [\API\UserController::class, 'login']);
//Route::post('register', [\API\UserController::class, 'register']);
//Route::post('logout', [\API\UserController::class, 'logout'])->middleware('auth:sanctum');
//Route::get('state', [\API\StateController::class, 'state']);

Route::apiResource('flights', FlightController::class);
Route::apiResource('seats', SeatsController::class);
Route::post('seats/{seats_id}/reserve',[SeatsController::class,'reserve']);
Route::post('seats/{seats_id}/cancel',[SeatsController::class,'cancel']);

?>
