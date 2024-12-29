<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');




// seller route


Route::prefix('seller')->group(function () {
    Route::view('/dashboard', 'seller.pages.dashboard')->name('seller-dashboard');
    Route::view('/gigs', 'seller.pages.gigs')->name('seller-gigs');
});