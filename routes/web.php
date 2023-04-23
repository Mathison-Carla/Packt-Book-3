<?php


use Illuminate\Support\Facades\Route;


Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');

Auth::routes();

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
//
//
//Route::get ('any', function() {
//    return view ('app');
//})->where('any', '.*');


?>

