<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\AdminController;

// HALAMAN PUBLIK (Bisa diakses siapa saja)
Route::get('/', [SoftwareController::class, 'index'])->name('home');
Route::get('/software/{id}/download', [SoftwareController::class, 'download'])->name('software.download');
Route::post('/software/{id}/report', [SoftwareController::class, 'reportLink'])->name('software.report');
Route::post('/software/{id}/rate', [SoftwareController::class, 'rate'])->name('software.rate');
// HALAMAN KHUSUS ADMIN
// Login
Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login']);
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AdminController::class, 'showForgotPassword'])->name('password.forgot');
Route::post('/forgot-password', [AdminController::class, 'processForgotPassword'])->name('password.process');

// Group Admin (Harus Login dulu baru bisa masuk sini)
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
    Route::get('/admin/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/admin/users/store', [AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::post('/admin/resolve/{id}', [AdminController::class, 'resolve'])->name('admin.resolve');
   
});