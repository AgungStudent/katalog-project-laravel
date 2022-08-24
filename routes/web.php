<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FinishingMachineController;

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
    return view('welcome');
});

// LandingPage
Route::get('/home',[FrontendController::class,'homepage'])->name('home');
Route::get('/product/{product}',[ProductController::class,'showProduct'])->name('detail');
Route::get('/product',[ProductController::class, 'showAll'])->name('product.show-all');

// Dashboard
Route::middleware(['auth','verified'])->prefix('dashboard')->group(function () {
    Route::resource('product', ProductController::class)->except('show');
    Route::resource('finishing-machinge', FinishingMachineController::class);
});
