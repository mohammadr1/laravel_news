<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('customer.home');
 
Route::namespace('Auth')->group(function(){
    Route::get('/login-register', [LoginRegisterController::class, 'loginRegisterForm'])->name('auth.customer.login-register-form');
    Route::middleware('throttle:customer-login-register-limiter')->post('/login-register', [LoginRegisterController::class, 'loginRegister'])->name('auth.customer.login-register');
    
    Route::get('login-confirm/{token}', [LoginRegisterController::class, 'loginConfirmForm'])->name('auth.customer.login-confirm-form');
    Route::middleware('throttle:customer-login-confirm-limiter')->post('/login-confirm/{token}', [LoginRegisterController::class, 'loginConfirm'])->name('auth.customer.login-confirm');
    
    Route::middleware('throttle:customer-login-resend-otp-limiter')->get('/login-resend-otp/{token}', [LoginRegisterController::class, 'loginResendOtp'])->name('auth.customer.login-resend-otp');
    
    Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('auth.customer.logout');
});


Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.home');
});