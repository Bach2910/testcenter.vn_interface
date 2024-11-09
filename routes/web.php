<?php

use App\Http\Controllers\InterFaceController;
use Illuminate\Support\Facades\Route;


Route::get('/', [InterFaceController::class, 'index'])->name('index');
Route::get('/product', [InterFaceController::class, 'product'])->name('product');
Route::get('/dieu-khoan-su-dung/', [InterFaceController::class, 'termsUse'])->name('terms_use');
Route::get('/chinh-sach-bao-mat/', [InterFaceController::class, 'privacyPolicy'])->name('privacy_policy');

Route::prefix('register')->group(function () {
    Route::get('/', [InterFaceController::class, 'register'])->name('register');
    Route::get('/vn', [InterFaceController::class, 'registerVN'])->name('register_vn');
});

Route::prefix('login')->group(function () {
    Route::get('/', [InterFaceController::class, 'login'])->name('login');
    Route::get('/vn', [InterFaceController::class, 'loginVN'])->name('login_vn');
});

Route::prefix('forget-password')->group(function () {
    Route::get('/', [InterFaceController::class, 'forgetPassword'])->name('forget_password');
    Route::get('/vn', [InterFaceController::class, 'forgetPasswordVN'])->name('forget_password_vn');
});

Route::prefix('blog')->group(function () {
    Route::get('/', [InterFaceController::class, 'blog'])->name('blog');
    Route::get('/micromanagement-la-gi/', [InterFaceController::class, 'blogMicromanagement'])->name(
        'blog_micromanagement'
    );
    Route::get('/equity-theory-la-gi/', [InterFaceController::class, 'blogEquity'])->name('blog_equity');
    Route::get('/lean-la-gi/', [InterFaceController::class, 'blogLean'])->name('blog_lean');
    Route::get('/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc/', [InterFaceController::class, 'blogTrue'])->name('blog_true');
    Route::get('/s',[InterFaceController::class,'allPage'])->name('allPage');
    Route::prefix('danh-muc')->group(function () {
        Route::get('/tai-lieu/', [InterFaceController::class, 'document'])->name('document');
        Route::get('/mau-de-test/', [InterFaceController::class, 'exam'])->name('exam');
        Route::get('/tin-tuc/', [InterFaceController::class, 'news'])->name('news');
        Route::get('/nhan-su/', [InterFaceController::class, 'peoples'])->name('peoples');
    });
});

