<?php

use App\Http\Controllers\LecturerController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PemateriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Pemateri;
use App\Http\Middleware\Peserta;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth'])->group(function () {
    // Route::get('/captcha-refresh', [CaptchaController::class, 'refresh']);
    Route::get('home', function () {
        return view('pages.app.dashboard_lms');
        
    })->name('home');
    Route::resource('user', UserController::class);
    Route::resource('lecturer', LecturerController::class);
    Route::resource('absensi', AttendanceController::class);

});

Route::middleware(Admin::class)->group(function () {
    
});

Route::middleware(Pemateri::class)->group(function () {
   
});
Route::middleware(Peserta::class)->group(function () {
    
});


// Route::get('/', function () {
//     return view('pages.app.dashboard_lms', ['type_menu' => '']); 
// });
// Route::get('/login', function () {
//     return view('pages.auth.auth-login');
// })->name('login');
// Route::get('register', function () {
//     return view('pages.auth.auth-register');
// })->name('register');

// Route::get('/forgot', function () {
//     return view('pages.auth.auth-forgot-password');
// })->name('forgot');

