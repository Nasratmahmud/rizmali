<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\CMSController;
use App\Http\Controllers\Web\Backend\BlogController;
use App\Http\Controllers\Web\Backend\TermController;
use App\Http\Controllers\Web\Backend\HotelController;
use App\Http\Controllers\Web\Backend\RefundController;
use App\Http\Controllers\Web\Backend\AboutusController;
use App\Http\Controllers\Web\Backend\PackageController;
use App\Http\Controllers\Web\Backend\PrivacyController;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\ItineraryController;
use App\Http\Controllers\Web\Backend\PackagePriceController;
use App\Http\Controllers\Web\Backend\PrimeDestinationController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('admin.dashboard');

Route::prefix('/package')->controller(PackageController::class)->middleware(['auth'])->group( function () {
    Route::get('/','show')->name('package.view');
    Route::get('/create', 'create')->name('package.create');
    Route::post('/insert', 'insert')->name('package.insert');
    Route::get('/edit/{id}','edit')->name('package.edit');
    Route::patch('/update/{id}','update')->name('package.update');
    Route::delete('/delete/{id}','delete')->name('package.delete');
});


Route::prefix('/hotel')->controller(HotelController::class)->middleware('auth')->group( function () {
    Route::get('/','show')->name('hotel.view');
    Route::get('/create', 'create')->name('hotel.create');
    Route::post('/insert', 'insert')->name('hotel.insert');
    Route::get('/edit/{id}','edit')->name('hotel.edit');
    Route::patch('/update/{id}','update')->name('hotel.update');
    Route::delete('/delete/{id}','delete')->name('hotel.delete');
});


Route::prefix('/destination')->controller(PrimeDestinationController::class)->middleware('auth')->group( function () {
    Route::get('/','show')->name('prime.destinations.view');
    Route::get('/create', 'create')->name('prime.destinations.create');
    Route::post('/insert', 'insert')->name('prime.destinations.insert');
    Route::get('/edit/{id}','edit')->name('prime.destinations.edit');
    Route::patch('/update/{id}','update')->name('prime.destinations.update');
    Route::delete('/delete/{id}','delete')->name('prime.destinations.delete');
});


Route::prefix('/packagePrice')->controller(PackagePriceController::class)->middleware('auth')->group( function () {
    Route::get('/','show')->name('package.price.view');
    Route::get('/create', 'create')->name('package.price.create');
    Route::post('/insert', 'insert')->name('package.price.insert');
    Route::get('/edit/{id}','edit')->name('package.price.edit');
    Route::patch('/update/{id}','update')->name('package.price.update');
    Route::delete('/delete/{id}','delete')->name('package.price.delete');
});


Route::prefix('/itinerary')->controller(ItineraryController::class)->middleware('auth')->group( function () {
    Route::get('/','show')->name('itinerary.view');
    Route::get('/create', 'create')->name('itinerary.create');
    Route::post('/insert', 'insert')->name('itinerary.insert');
    Route::get('/edit/{id}','edit')->name('itinerary.edit');
    Route::patch('/update/{id}','update')->name('itinerary.update');
    Route::delete('/delete/{id}','delete')->name('itinerary.delete');
});


Route::prefix('/cms')->controller(CMSController::class)->middleware('auth')->group( function () {
    Route::get('/','show')->name('cms.view');
    Route::get('/create', 'create')->name('cms.create');
    Route::post('/insert', 'insert')->name('cms.insert');
    Route::get('/edit/{id}','edit')->name('cms.edit');
    Route::patch('/update/{id}','update')->name('cms.update');
    Route::delete('/delete/{id}','delete')->name('cms.delete');
});


Route::prefix('/aboutus')->controller(AboutusController::class)->middleware('auth')->group( function () {
    Route::get('/','show')->name('aboutus.view');
    Route::get('/create', 'create')->name('aboutus.create');
    Route::post('/insert', 'insert')->name('aboutus.insert');
    Route::get('/edit/{id}','edit')->name('aboutus.edit');
    Route::patch('/update/{id}','update')->name('aboutus.update');
    Route::delete('/delete/{id}','delete')->name('aboutus.delete');
});


Route::prefix('/term&condition')->controller(TermController::class)->middleware('auth')->group( function () {
    Route::get('/','show')->name('Term.view');
    Route::get('/create', 'create')->name('Term.create');
    Route::post('/insert', 'insert')->name('Term.insert');
    Route::get('/edit/{id}','edit')->name('Term.edit');
    Route::patch('/update/{id}','update')->name('Term.update');
    Route::delete('/delete/{id}','delete')->name('Term.delete');
});


Route::prefix('/privacyPolicy')->controller(PrivacyController::class)->middleware('auth')->group( function () {
    Route::get('/','show')->name('privacy.view');
    Route::get('/create', 'create')->name('privacy.create');
    Route::post('/insert', 'insert')->name('privacy.insert');
    Route::get('/edit/{id}','edit')->name('privacy.edit');
    Route::patch('/update/{id}','update')->name('privacy.update');
    Route::delete('/delete/{id}','delete')->name('privacy.delete');
});


Route::prefix('/refund')->controller(RefundController::class)->middleware('auth')->group( function () {
    Route::get('/','show')->name('refund.view');
    Route::get('/create', 'create')->name('refund.create');
    Route::post('/insert', 'insert')->name('refund.insert');
    Route::get('/edit/{id}','edit')->name('refund.edit');
    Route::patch('/update/{id}','update')->name('refund.update');
    Route::delete('/delete/{id}','delete')->name('refund.delete');
});


Route::prefix('/blog')->controller(BlogController::class)->middleware('auth')->group( function () {
    Route::get('/','show')->name('blog.view');
    Route::get('/create', 'create')->name('blog.create');
    Route::post('/insert', 'insert')->name('blog.insert');
    Route::get('/edit/{id}','edit')->name('blog.edit');
    Route::patch('/update/{id}','update')->name('blog.update');
    Route::delete('/delete/{id}','delete')->name('blog.delete');
});


