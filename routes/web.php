<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LawyerAuthController;
use App\Http\Controllers\Auth\LawyerForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LawyerRegistrationController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('/free-legal-advice', function () {
    return view('frontend.free-legal-advice');
})->name('free-legal-advice');

Route::get('/contact', function() {
    return view('frontend.contact');
})->name('contact');

Route::get('/book', function() {
    return view('frontend.book');
})->name('Book-an-appointment');

Route::get('/myaccount', function() {
    return view('frontend.myaccount');
})->name('myaccount');

Route::get('/profile', function() {
    return view('frontend.profile');
})->name('profile');

Route::get('/forgot-password', function() {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/talk-to-lawyer', function(){
    return view('frontend.talk-to-lawyer');
})->name('talk-to-lawyer');

// Route::get('/lawyer-login', function(){
//     return view('lawyer-login');
// })->name('lawyer-login');

Route::get('/lawyer-dashboard', function(){
    return view('frontend.lawyer-dashboard');
})->name('lawyer-dashboard');

Route::get('/find-lawyer', function(){
    return view('frontend.find-lawyer');
})->name('find-lawyer');

Route::get('/blog-profile', function(){
    return view('blog-profile');
})->name('blogs');

Route::get('/blog', function(){
    return view('blog');
})->name('blog');

Route::post('lawyer/login', [LawyerAuthController::class, 'login'])->name('lawyer.login');

Route::get('/lawyer/register', [LawyerRegistrationController::class, 'showRegistrationForm'])->name('lawyer.register');
// Lawyer Authentication and Registration Routes
Route::prefix('lawyer')->group(function () {
    Route::get('/register', [LawyerRegistrationController::class, 'showRegistrationForm'])->name('lawyer.register.form');
    Route::post('/send-otp', [LawyerRegistrationController::class, 'sendOtp'])->name('lawyer.sendOtp');
    Route::post('/verify-otp', [LawyerRegistrationController::class, 'verifyOtp'])->name('lawyer.verifyOtp');
    Route::post('/register', [LawyerRegistrationController::class, 'register'])->name('lawyer.register');
    

    Route::get('/login', [LawyerAuthController::class, 'showLoginForm'])->name('lawyer.login');
    Route::post('/login', [LawyerAuthController::class, 'login'])->name('lawyer.login.submit');
    Route::post('/logout', [LawyerAuthController::class, 'logout'])->name('lawyer.logout');

    Route::middleware(['auth:lawyer'])->group(function () {
        Route::get('/dashboard', [LawyerController::class, 'showDashboard'])->name('lawyer.dashboard');
        Route::get('/profile', [LawyerController::class, 'showProfile'])->name('lawyer.profile');
        Route::post('/profile/update', [LawyerController::class, 'updateProfile'])->name('lawyer.updateProfile');
    });
});

// Password Reset Routes
// Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Forgot Password Routes for Lawyer
Route::get('/lawyer/forgot-password', [LawyerForgotPasswordController::class, 'showForgotPasswordForm'])->name('lawyer.forgot-password');
Route::post('/lawyer/forgot-password/send-otp', [LawyerForgotPasswordController::class, 'sendOtp'])->name('lawyer.forgot-password.send-otp');
Route::get('/lawyer/forgot-password/verify-otp', [LawyerForgotPasswordController::class, 'showVerifyOtpForm'])->name('lawyer.forgot-password.verify-otp');
Route::post('/lawyer/forgot-password/verify-otp', [LawyerForgotPasswordController::class, 'verifyOtp'])->name('lawyer.forgot-password.verify-otp.submit');
Route::get('/lawyer/reset-password', [LawyerForgotPasswordController::class, 'showResetPasswordForm'])->name('lawyer.reset-password');
Route::post('/lawyer/reset-password', [LawyerForgotPasswordController::class, 'resetPassword'])->name('lawyer.reset-password.submit');