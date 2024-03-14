<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DahboardController::class, 'index'])->name('dashboard');
    Route::resource('templates', \App\Http\Controllers\Admin\TemplateController::class);
});
