<?php

use App\Http\Controllers\Dentist\DentistController;
use App\Http\Controllers\Radiology\RadiologyController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/test', function () {
//     dd(Auth::user()->type);
// });

Auth::routes();

Route::get('/register/dentist', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('dentist');
Route::get('/register/center', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('center');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'FAQ'])->name('faq');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'Contact'])->name('contact');


Route::get('/dentist', [DentistController::class, 'show'])->name('show.dentist');

Route::get('/radiology', [RadiologyController::class, 'show'])->name('show.center');
