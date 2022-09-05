<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
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


Route::middleware('auto-logout')->group(function () {
// LandingPage
    Route::get('/', function () {
        return redirect()->route('home');
    });
    Route::get('/home', [FrontendController::class, 'homepage'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/client', [FrontendController::class, 'client'])->name('client');
    Route::get('/finishing-machine', [FrontendController::class, 'finishingMachines'])->name('finishing-machine');
    Route::get('/products', [FrontendController::class, 'showAllProduct'])->name('product.show-all');
    Route::get('/loginAdmin', fn () => redirect('/login'));
});
    Route::get('/product/{product}', [FrontendController::class, 'showProduct'])->name('detail');

// Dashboard
Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::resource('product', ProductController::class)->except('show');
    Route::resource('finishing-machine', FinishingMachineController::class)->except('show');
    Route::apiResource('contact', ContactController::class)->except(['show', 'destroy']);
    Route::resource('client', ClientController::class)->except('show');
    Route::get('/reset-password', fn () => view('auth.reset-password'))->name('update-password.page');
});
