<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
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
Route::get('/landing', function () {
    return view('product.landing');
});

Route::resource('movies', MoviesController::class);
