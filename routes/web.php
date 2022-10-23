<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihController;

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

Route::get('/',[DashboardController::class,'index']);


Route::resource('daftar-pemain',PemainController::class);
Route::resource('daftar-pelatih',PelatihController::class);
