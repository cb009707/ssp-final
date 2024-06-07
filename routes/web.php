<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeCon;
use App\Http\Controllers\PlanController;
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

// Public Routes
Route::get("/", [HomeCon::class, "index"]);

Route::view("/about", 'pages.about');
Route::view("/contact", 'pages.contact');
Route::view("/testimonial", 'pages.testimonial');
Route::view("/plans", 'pages.plans');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Plans
    Route::get('plans', [PlanController::class, 'index']);
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
});

// Subscription Success Route
Route::view('/subscription/success', 'subscription_success')->name('subscription.success');

// Booking Routes
Route::get('/booking', [BookingController::class, 'frontEndForm'])->name('booking.form');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/user/bookings', [BookingController::class, 'showuserbook'])->name('user-bookings');
Route::put('/booking/{booking}', [BookingController::class, 'update'])->name('booking.update');
Route::get('/booking/receipt/{booking}', [BookingController::class, 'receipt'])->name('booking.receipt');
Route::get('/admin/booking', [BookingController::class, 'index'])->name('admin.booking.index');

// Admin Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [BookingController::class, 'getServiceAnalytics'])->name('dashboard');
        Route::resource('user', \App\Http\Controllers\UserCon::class);
        Route::resource('booking', \App\Http\Controllers\BookingController::class);
        Route::get('/plans', [PlanController::class, 'frontForm'])->name('booking.form');
    });

// Plan Routes
Route::post('/plans', [PlanController::class, 'plan']);
Route::get('/user/plan', [PlanController::class, 'front'])->name('booking.forms');


