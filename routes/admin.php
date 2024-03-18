<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DahboardController::class, 'index'])->name('dashboard');
    Route::resource('templates', \App\Http\Controllers\Admin\TemplateController::class);
    Route::resource('faqs', \App\Http\Controllers\Admin\FaqController::class);
    Route::get('profile', [\App\Http\Controllers\Admin\UserControlller::class, 'profile'])->name('profile');
    Route::put('profile', [\App\Http\Controllers\Admin\UserControlller::class, 'updateProfile'])->name('profile.update');
    Route::put('profile/password', [\App\Http\Controllers\Admin\UserControlller::class, 'updatePassword'])->name('profile.password');
    Route::prefix('settings')->group(function () {
        Route::get('app', [\App\Http\Controllers\Admin\SettingController::class, 'app'])->name('settings.app');
    });
});
