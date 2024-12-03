<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\HotelController;
use App\Http\Controllers\Web\Backend\PackageController;
use App\Http\Controllers\Web\Backend\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


Route::prefix('/package')->controller(PackageController::class)->group( function () {
    Route::get('/','show')->name('package.view');
    Route::get('/create', 'create')->name('package.create');
    Route::post('/insert', 'insert')->name('package.insert');
    Route::get('/edit/{id}','edit')->name('package.edit');
    Route::patch('/update/{id}','update')->name('package.update');
    Route::delete('/delete/{id}','delete')->name('package.delete');
});



Route::prefix('/hotel')->controller(HotelController::class)->group( function () {
    Route::get('/','show')->name('hotel.view');
    Route::get('/create', 'create')->name('hotel.create');
    Route::post('/insert', 'insert')->name('hotel.insert');
    Route::get('/edit/{id}','edit')->name('hotel.edit');
    Route::patch('/update/{id}','update')->name('hotel.update');
    Route::delete('/delete/{id}','delete')->name('hotel.delete');
});


