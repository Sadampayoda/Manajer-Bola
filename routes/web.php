<?php

// use App\Http\Controllers\BuyclubController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PlaygameController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;


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

Route::middleware('auth')->group(function(){
    Route::get('/buy{club}',[BuyController::class,'BuyClub']);
    Route::resource('profile',ProfileController::class);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/play-game',[PlaygameController::class , 'index'])->name('playgame');
    Route::get('/play-game/{formasi}/susunan',[PlaygameController::class,'susunanPemain'])->name('susunan');
    Route::post('play-game/{formasi}/susunan',[PlaygameController::class,'validasiSusunan'])->name('validasi-bola');
    Route::get('/play-game/{formasi}/susunan/hasil',[PlaygameController::class,'hasilFormasi'])->name('hasil');
});


//Netral
Route::get('/',[DashboardController::class,'index']);
Route::resource('daftar-pemain',PemainController::class);
Route::resource('daftar-pelatih',PelatihController::class);
Route::resource('daftar-club', ClubController::class);


Route::middleware('guest')->group(function(){
    
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'authenticate']);
    Route::get('/register',[RegisterController::class,'index']);
    Route::post('/register',[RegisterController::class,'newAccount']);

});



