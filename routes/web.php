<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/states" , [StateController::class, "index"]);
Route::get('.\resources\views\alabama.blade.php', function () {
    return redirect('/');

});

Route::get ('any', function() {
    return view ('app');
})->where('any', '.*');

?>
