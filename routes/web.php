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


Route::post('/contact', [LeadController::class,'store'])->name('contact');
Route::get('/reload-captcha', [LeadController::class, 'reloadCaptcha'])->name('reload');