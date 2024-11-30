<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\PackageController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


Route::prefix('/package')->controller(PackageController::class)->group( function () {
    Route::get('/create', 'create')->name('package.create');
    Route::post('/insert', 'insert')->name('package.insert');
});
