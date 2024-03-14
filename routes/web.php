<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index'])->name("landing-page");
Route::get('/faq', [\App\Http\Controllers\PageController::class, 'faq'])->name("faq");
Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('admin', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
    Route::post('admin', [\App\Http\Controllers\Auth\AuthController::class, 'loginProcess'])->name('login.process');
});
Route::post('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->middleware('auth')->name('logout');
