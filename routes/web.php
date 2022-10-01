<?php

use App\Http\Controllers\ContinentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\LotteryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name("home");
Route::resource('continent', ContinentController::class);
Route::resource('country', CountryController::class);
Route::resource('operator', OperatorController::class);
Route::resource('lottery', LotteryController::class);