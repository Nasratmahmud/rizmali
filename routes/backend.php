<?php

use App\Models\Package;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\HotelController;
use App\Http\Controllers\Web\Backend\PackageController;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\ItineraryController;
use App\Http\Controllers\Web\Backend\PackagePriceController;
use App\Http\Controllers\Web\Backend\PrimeDestinationController;

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


Route::prefix('/destination')->controller(PrimeDestinationController::class)->group( function () {
    Route::get('/','show')->name('prime.destinations.view');
    Route::get('/create', 'create')->name('prime.destinations.create');
    Route::post('/insert', 'insert')->name('prime.destinations.insert');
    Route::get('/edit/{id}','edit')->name('prime.destinations.edit');
    Route::patch('/update/{id}','update')->name('prime.destinations.update');
    Route::delete('/delete/{id}','delete')->name('prime.destinations.delete');
});


Route::prefix('/packagePrice')->controller(PackagePriceController::class)->group( function () {
    Route::get('/','show')->name('package.price.view');
    Route::get('/create', 'create')->name('package.price.create');
    Route::post('/insert', 'insert')->name('package.price.insert');
    Route::get('/edit/{id}','edit')->name('package.price.edit');
    Route::patch('/update/{id}','update')->name('package.price.update');
    Route::delete('/delete/{id}','delete')->name('package.price.delete');
});


Route::prefix('/itinerary')->controller(ItineraryController::class)->group( function () {
    Route::get('/','show')->name('itinerary.view');
    Route::get('/create', 'create')->name('itinerary.create');
    Route::post('/insert', 'insert')->name('itinerary.insert');
    Route::get('/edit/{id}','edit')->name('itinerary.edit');
    Route::patch('/update/{id}','update')->name('itinerary.update');
    Route::delete('/delete/{id}','delete')->name('itinerary.delete');
    Route::post('/get-package-details','packageDetail')->name('package.details');
});


