<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
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

Route::get('/', function(){
    return view('welcome');
});

// MensParlour Pages Routes //

    Route::get('index', [AppointmentController::class, 'index'])->name('index');
    Route::get('about', [AppointmentController::class, 'about'])->name('about');
    Route::get('service', [AppointmentController::class, 'service'])->name('service');
    Route::get('contact', [AppointmentController::class, 'contact'])->name('contact');
    Route::post('appointment', [AppointmentController::class, 'AppointmentBooking'])->name('appointment');
    Route::post('contact_form', [AppointmentController::class, 'contact_form'])->name('contact_form');