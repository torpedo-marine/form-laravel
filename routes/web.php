<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InquiryController;

Route::get('/', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/thanks', [ContactController::class, 'send'])->name('contact.send');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::get('/admin/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
Route::get('/admin/inquiries/{id}', [InquiryController::class, 'show'])->name('inquiries.show');