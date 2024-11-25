<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\Admin;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [ReportController::class, 'index'])->name('dashboard');
    
    Route::view('/new', 'Report.new')->name('reports.new');
    Route::post('/new', [ReportController::class, 'add'])->name('reports.add');
});

Route::middleware(Admin::class)->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::put('/admin/{report}', [AdminController::class, 'makeDecision'])->name('admin.check');
});

require __DIR__.'/auth.php';
