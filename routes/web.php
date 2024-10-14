<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('products');

Route::get('/reports', [ReportController::class, 'index'])->name('report.index');
