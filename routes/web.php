
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (!auth()->check()) {
        return redirect()->route('signin');
    }
    return view('welcome');
});

Route::get('/signin', [App\Http\Controllers\AuthController::class, 'signIn'])->name('signin');
Route::post('/signin', [App\Http\Controllers\AuthController::class, 'handleSignIn'])->name('signin.post');
// Forgot Password Route
Route::get('/forgot-password', [App\Http\Controllers\AuthController::class, 'showForgotPassword'])->name('forgot.password');
// Google OAuth Routes
Route::get('/auth/google', [App\Http\Controllers\AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [App\Http\Controllers\AuthController::class, 'handleGoogleCallback']);
// Other routes...
Route::get('/signup', [App\Http\Controllers\AuthController::class, 'signUp'])->name('signup');
// Route::post('/signin', [App\Http\Controllers\AuthController::class,
// Facebook OAuth Routes
Route::get('/auth/facebook', [App\Http\Controllers\AuthController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('/auth/facebook/callback', [App\Http\Controllers\AuthController::class, 'handleFacebookCallback']);
