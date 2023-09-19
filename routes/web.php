<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// home page
Route::get('/home', function () {
    return view('home');
});



// Authentication Routes...
Route::get('/',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/',[LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');


// Registration Routes...
Route::get('/register',[RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('/register',[RegisterController::class,'register']);

// Password Reset Routes...
Route::get('/password/reset',[ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
Route::post('/password/email',[ForgotPasswordController::class,'showRegistrationForm'])->name('password.email');
Route::get('/password/reset/{token}',[ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('/password/reset',[ResetPasswordController::class,'reset']);


// Email Verification Routes...
Route::get('/email/verify',[VerificationController::class,'show'])->name('verification.notice');
Route::get('/email/verify/{id}',[VerificationController::class,'verify'])->name('verification.verify');
Route::get('/email/resend',[VerificationController::class,'resend'])->name('verification.resend');


// contact-form
Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'store']);
