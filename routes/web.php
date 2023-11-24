<?php

use Illuminate\Support\Facades\Route;
use App\Models\Song;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/veggies/baigan', function () {
    return 'Baigan';
});*/

/* Route::get('/veggies/{veggieName}', function (string $veggiename) {
        return $veggiename;
});*/

Route::get('/veggies/{veggiename}', function (string $veggiename) {
    return $veggiename;
})->whereIn('veggiename', ['baigan', 'gobhi', 'aaloo','bhindi']);

/*Route::get('/veggies/{veggiename}', function (string $veggiename) {
    return view('veggies');
})->whereIn('veggiename', ['baigan', 'gobhi', 'aaloo','bhindi']);*/
Route::get('/songs_static', function () {
    return view('songs_static');
});

Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});