<?php

use App\Http\Controllers\front\HomeController;



Route::get('/', [HomeController::class, 'index']);
Route::get('trending-destination', [HomeController::class, 'trendingDestination'])->name('trendingDestination');
Route::get('trending-destination-details', [HomeController::class, 'trendingDestinationDetails'])->name('trendingDestinationDetails');

Route::get('booking', [HomeController::class, 'booking'])->name('booking');
Route::get('booking-details', [HomeController::class, 'bokkingDetails'])->name('bokkingDetails');
Route::get('emi', [HomeController::class, 'emi'])->name('emi');
Route::get('carbooking', [HomeController::class, 'carbooking'])->name('carbooking');
Route::get('bikebooking', [HomeController::class, 'bikebooking'])->name('bikebooking');
Route::get('busbooking', [HomeController::class, 'busbooking'])->name('busbooking');
Route::get('trainbooking', [HomeController::class, 'trainbooking'])->name('trainbooking');
Route::get('carbookingdetails', [HomeController::class, 'carbookingdetails'])->name('carbookingdetails');

Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('term', [HomeController::class, 'term'])->name('term');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('terms-and-conditions', [HomeController::class, 'terms_and_conditions'])->name('terms-and-conditions');


Route::get('contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('monthlystays', [HomeController::class, 'monthlystays'])->name('monthlystays');
Route::get('sitemap', [HomeController::class, 'sitemap'])->name('sitemap');

Route::get('property-list/{slug}', [HomeController::class, 'propertyListSlug'])->name('propertyListSlug');
Route::get('property-list', [HomeController::class, 'propertyListAll'])->name('propertyListAll');
Route::get('property-details/{slug}', [HomeController::class, 'propertySlug'])->name('propertySlug');

// Route::get('forgot-Password', [HomeController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('password/reset', [HomeController::class, 'showLinkRequestForm'])->name('password.request');

Route::post('password/email', [HomeController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', [HomeController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [HomeController::class, 'reset'])->name('password.update');
Route::get('profile', [HomeController::class, 'user_profile'])->name('user.profile');
Route::post('profile', [HomeController::class, 'update_profile'])->name('update.user.profile');
Route::post('update-profile', [HomeController::class, 'update_profile_other_detail'])->name('update.user.profile.other');

Route::get('search-stay', [HomeController::class, 'index'])->name('search.stay');



