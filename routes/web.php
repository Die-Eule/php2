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

Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');

Route::post('/reports', [ReportController::class, 'add'])->name('reports.add');

Route::get('reports/{report}', [ReportController::class, 'show'])->name('reports.show');
Route::put('reports/{report}', [ReportController::class, 'update'])->name('reports.update');