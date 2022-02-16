<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PolitesseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});


Route::get('/hello', [PolitesseController::class, 'helloAll']);

Route::get('/au-revoir', [PolitesseController::class, 'goodbye']);

Route::get('/hello/{name}', [PolitesseController::class, 'helloSomeone']);

Route::get('/a-propos', [AboutController::class, 'aPropos']);

Route::get('/a-propos/{teams}', [AboutController::class, 'aProposDe']);
