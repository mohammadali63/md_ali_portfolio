<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MenuController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[WebController::class,'index'])->name('home');
Route::post('/save-message',[WebController::class,'saveMessage'])->name('save.message');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/manage-message',[DashboardController::class,'manageMessage'])->name('manage.message');
    Route::get('/add-portfolio',[PortfolioController::class,'addPortfolio'])->name('add.portfolio');
    Route::post('/save-portfolio',[PortfolioController::class,'savePortfolio'])->name('save.portfolio');

    Route::get('/logo',[LogoController::class,'addLogo'])->name('logo.protfolio');
    Route::post('/save-logo',[LogoController::class,'saveLogo'])->name('save.logo');

    Route::get('/menu',[MenuController::class, 'addMenu'])->name('add.menu');
    Route::post('/save/menu',[MenuController::class,'saveMenu'])->name('save.menu');
});
