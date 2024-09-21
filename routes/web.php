<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/forgot-password', function() {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/talk-to-lawyer', function(){
    return view('frontend.talk-to-lawyer');
})->name('talk-to-lawyer');

Route::get('/lawyer-login', function(){
    return view('lawyer-login');
})->name('lawyer-login');

Route::get('/lawyer-dashboard', function(){
    return view('frontend.lawyer-dashboard');
})->name('lawyer-dashboard');

Route::get('/find-lawyer', function(){
    return view('frontend.find-lawyer');
})->name('find-lawyer');

// Route::get('/lawyer-profile', function(){
//     return view('lawyer-profile');
// })->name('lawyer-profile');


Route::get('/blog-profile', function(){
    return view('blog-profile');
})->name('blogs');


Route::get('/blog', function(){
    return view('blog');
})->name('blog');


// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// // Forgot Password Routes
// Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// // Reset Password Routes
// Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Route::get('/lawyer/register', function () {
//     return view('lawyer.register'); // Adjust this to point to the correct form view
// })->name('lawyer.register.form');

// Route::post('/lawyer/register', [LawyerController::class, 'register'])->name('lawyer.register');
// Route::post('/lawyer/profile/update', [LawyerController::class, 'updateProfile'])->name('lawyer.updateProfile');



// Route::middleware('auth:lawyer')->group(function () {
//     Route::get('lawyer/profile', [LawyerController::class, 'showProfile'])->name('lawyer.profile');
//     Route::post('/lawyer/update-profile', [LawyerController::class, 'updateProfile'])->name('lawyer.updateProfile');
// });

// routes/web.php

use App\Http\Controllers\Auth\LawyerAuthController;

Route::prefix('lawyer')->group(function () {
    Route::get('register', [LawyerAuthController::class, 'showRegistrationForm'])->name('lawyer.register');
    Route::post('register', [LawyerAuthController::class, 'register']);
    Route::get('login', [LawyerAuthController::class, 'showLoginForm'])->name('lawyer.login');
    Route::post('login', [LawyerAuthController::class, 'login']);
    Route::post('logout', [LawyerAuthController::class, 'logout'])->name('lawyer.logout');

    Route::middleware(['auth:lawyer'])->group(function () {
        Route::get('dashboard', [LawyerAuthController::class, 'dashboard'])->name('lawyer.dashboard');
        Route::get('profile', [LawyerAuthController::class, 'showProfile'])->name('lawyer.profile');
        Route::post('profile', [LawyerAuthController::class, 'updateProfile']);
    });
});


use App\Http\Controllers\LawyerRegistrationController;

Route::get('/register', [LawyerRegistrationController::class, 'showRegistrationForm'])->name('lawyer.showRegisterForm');
Route::post('/send-otp', [LawyerRegistrationController::class, 'sendOtp'])->name('lawyer.sendOtp');
Route::post('/verify-otp', [LawyerRegistrationController::class, 'verifyOtp'])->name('lawyer.verifyOtp');
Route::post('/register', [LawyerRegistrationController::class, 'register'])->name('lawyer.register');

