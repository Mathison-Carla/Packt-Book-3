<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [app\Http\API\UserController::class, 'login'])
Route::post('register', [app\Http\API\UserController::class, 'register'])
Route::post('logout', [app\Http\API\UserController::class, 'logout'])
?>