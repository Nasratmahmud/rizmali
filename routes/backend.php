<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\PackageController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


Route::prefix('/package')->controller(PackageController::class)->group( function () {
    Route::get('/','show')->name('package.view');
    Route::get('/create', 'create')->name('package.create');
    Route::post('/insert', 'insert')->name('package.insert');
    Route::get('/edit/{id}','edit')->name('package.edit');
    Route::patch('/update/{id}','update')->name('package.update');
});
