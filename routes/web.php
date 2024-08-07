<?php

use App\Http\Controllers\DonorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\Food_helpController;
use App\Http\Controllers\frontend\ViewController;
use App\Http\Controllers\frontend\QurbaniController;
use App\Http\Controllers\frontend\PaidController;
use App\Http\Controllers\frontend\Fhs_viewController;
use App\Http\Controllers\frontend\WaqafqurbaniController;
use App\Http\Controllers\frontend\MahanakifalatController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/food_help', [Food_helpController::class, 'index'])->name('food_help.index');

Route::post('/donor/store', [DonorController::class, 'donor_category'])->name('donor_category.store');

Route::post('/food_help/store', [Food_helpController::class, 'store'])->name('food_help.store');
Route::post('/food_help/payments/store', [Food_helpController::class, 'store_payments'])->name('food_help.payments.store');
Route::get('/payments/{id}', [Food_helpController::class, 'payments'])->name('food.help.donor.payments');
Route::post('/food_help/update', [Food_helpController::class, 'update'])->name('food_help.update');
Route::get('/view_details/{id}', [ViewController::class, 'index'])->name('view.details');
Route::get('/qurbani', [QurbaniController::class, 'index'])->name('qurbani.index');
Route::get('/paid-food', [PaidController::class, 'index'])->name('paid.food');
Route::get('/fhs_view', [Fhs_viewController::class, 'index'])->name('fhs_view.index');
Route::get('/waqaf_qurbani', [WaqafqurbaniController::class, 'index'])->name('waqaf_qurbani.index');
Route::get('/mahana_kifalat', [MahanakifalatController::class, 'index']);
Route::post('/mahana_stor', [MahanakifalatController::class, 'mahanastor'])->name('mahana_kifalat.store');
Route::get('/mahana_kifalat', [MahanakifalatController::class, 'showMahanaKifalat'])->name('mahana_kifalat.store');


