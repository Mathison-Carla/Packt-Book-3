<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');

});


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get ('any', function() {
    return view ('app');
})->where('any', '.*');

?>

