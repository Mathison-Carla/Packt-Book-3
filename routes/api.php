<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/states" , [StateController::class, "index"]);
Route::get('/views/Alabama', function () {
    return redirect('/views/Wisconsin');

});
 
?>