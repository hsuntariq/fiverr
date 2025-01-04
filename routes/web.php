<?php

use App\Http\Controllers\GigController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');




// seller route


Route::prefix('seller')->group(function () {
    Route::view('/dashboard', 'seller.pages.dashboard')->name('seller-dashboard');
    Route::view('/gigs', 'seller.pages.gigs')->name('seller-gigs');
    Route::view('/create-gigs', 'seller.pages.create-gig')->name('seller-add-gigs');


    // get routes
    Route::get('/create-gigs', [GigController::class, 'getCategories']);



    // post routes

    Route::post('/get-relevant-values', [GigController::class, 'getRelevantValues']);
    Route::post('/add-gig', [GigController::class, 'addGig']);
});