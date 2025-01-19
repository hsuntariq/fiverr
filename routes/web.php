<?php

use App\Http\Controllers\GigController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/', [GigController::class, 'getGigs']);

// Routes to handle success and cancellation
Route::get('/payment-success', [OrderController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/payment-cancel', [OrderController::class, 'paymentCancel'])->name('payment.cancel');


// seller route


Route::prefix('seller')->group(function () {
    Route::view('/dashboard', 'seller.pages.dashboard')->name('seller-dashboard')->middleware('auth');
    Route::view('/gigs', 'seller.pages.gigs')->name('seller-gigs');
    Route::view('/create-gigs', 'seller.pages.create-gig')->name('seller-add-gigs');
    Route::view('/single-gig/{id}', 'seller.pages.single-gig')->middleware('auth');
    Route::view('/login', 'seller.pages.login')->name('login')->middleware('guest');
    Route::view('/signup', 'seller.pages.sign-up')->name('signup')->middleware('guest');
    // get routes
    Route::get('/create-gigs', [GigController::class, 'getCategories']);
    Route::get('/get-single-gig/{id}', [GigController::class, 'getSingleGig']);


    // post routes

    Route::post('/get-relevant-values', [GigController::class, 'getRelevantValues']);
    Route::post('/add-gig', [GigController::class, 'addGig']);
    Route::post('/signup', [UserController::class, 'loginUser']);
    Route::post('/place-order', [OrderController::class, 'placeOrder']);
    Route::post('/place-order2', [OrderController::class, 'order2']);
});
