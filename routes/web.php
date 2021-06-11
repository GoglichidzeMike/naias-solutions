<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeadController;
use App\Mail\MessageSubmitted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


//some public routes
Route::get('/', function(){
    return view('home');
})->name('home');



//dashboard route
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');

// contact controllers
Route::get('/dashboard/leads', [LeadController::class, 'index'])->name('lead.dashboard')->middleware('auth');
Route::post('/contact', [LeadController::class,'store'])->name('contact');
Route::post('/contact/leads/{id}', [LeadController::class, 'destroy'])->name('lead.destroy')->middleware('auth');
Route::get('/leads/export', [LeadController::class, 'exportCsv'])->name('lead.export')->middleware('auth');
Route::get('/leads/{id}', [LeadController::class, 'show'])->name('lead.show')->middleware('auth');

//Auth routes
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);
Route::post('/logout', [LogoutController::class,'store'])->name('logout');