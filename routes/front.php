<?php

use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\LikeController;
use App\Http\Controllers\front\BookingNowController;
use App\Http\Controllers\front\OtpController;
use App\Http\Controllers\front\CommentController;
use App\Http\Controllers\front\RazorpayController;
use App\Http\Controllers\front\HotelBookingController;

Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    dd('clear');
});

Route::get('/test-middleware', function () {
    \Log::channel('prevent-history')->info('PreventBackHistory middleware triggered for URL: ');
    \Log::info('PreventBackHistory middleware triggered for URL: ');
    return 'Middleware test route.';
})->middleware('prevent.back.history');

Route::controller(HomeController::class)->group(function () {
    // Home and Trending Destinations
    Route::get('/', 'index')->name('home');
    Route::get('trending-destination', 'trendingDestination')->name('trendingDestination');
    Route::get('trending-destination-details', 'trendingDestinationDetails')->name('trendingDestinationDetails');
    Route::get('trending-destination-detailss/{slug}', 'single_propertyListSlug')->name('trendingDestinationDetailss');
    Route::get('/trending/properties/{id}', 'destination_products')->name('destination_products'); // @destination_products
    Route::get('search-single-property', 'search_single_property_by_name')->name('search-single-property');

    // Booking Routes
    Route::get('booking', 'booking')->name('booking');
    Route::get('booking-details', 'bokkingDetails')->name('bokkingDetails');
    Route::get('checkout-summary', 'checkoutSummary')->name('checkout.summary');

    // EMI and Vehicle Booking Routes
    Route::get('emi', 'emi')->name('emi');
    Route::get('carbooking', 'carbooking')->name('carbooking');
    Route::get('bikebooking', 'bikebooking')->name('bikebooking');
    Route::get('busbooking', 'busbooking')->name('busbooking');
    Route::get('trainbooking', 'trainbooking')->name('trainbooking');
    Route::get('carbookingdetails', 'carbookingdetails')->name('carbookingdetails');

    // Static Pages
    Route::get('about', 'about')->name('about');
    Route::get('blog', 'blog')->name('blog');
    Route::get('term', 'term')->name('term');
    Route::get('career', 'career')->name('career');
    Route::get('privacy-policy', 'privacy_policy')->name('privacy-policy');
    Route::get('terms-and-conditions', 'terms_and_conditions')->name('terms-and-conditions');

    Route::get('contactus', 'contactus')->name('contactus');
    Route::get('monthlystays', 'monthlystays')->name('monthlystays');
    Route::get('sitemap', 'sitemap')->name('sitemap');

    // Property Routes
    Route::get('property-list/{slug}', 'propertyListSlug')->name('propertyListSlug');
    Route::get('property-lists/{slug}', 'single_propertyListSlug')->name('stay.propertyListSlug');
    Route::get('property-list', 'propertyListAll')->name('propertyListAll');
    Route::get('property-details/{slug}', 'propertySlug')->name('propertySlug');

    // Password Reset Routes
    Route::get('password/reset', 'showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'showResetForm')->name('password.reset');
    Route::post('password/reset', 'reset')->name('password.update');

    // Profile Routes
    Route::get('profile', 'user_profile')->name('user.profile');
    Route::post('profile', 'update_profile')->name('update.user.profile');
    Route::post('update-profile', 'update_profile_other_detail')->name('update.user.profile.other');

    // Search and Booking Routes
    Route::get('search-stay', 'all_search_property')->name('search.stay');
    Route::get('booking', 'book_now')->name('book.now');

    Route::get('create-invoice/{property_id?}', 'create_invoice')->name('invoice.create');
    Route::get('city-wise-property/{city_id?}', 'city_wise_property')->name('city.wise.property');

    //newsletter

    Route::post('/subscribe', 'storeNewsletter')->name('newsletter.subscribe');

});


Route::controller(LikeController::class)->group(function () {
    Route::post('/property/{property_id}/like', 'like')->name('property.like');
    Route::post('/property/{property_id}/unlike', 'unlike')->name('property.unlike');
});

Route::controller(BookingNowController::class)->group(function () {
    Route::post('booking', 'store_book_now')->name('book.now.store');
    Route::get('booking-now', 'chose_payment_method')->name('booking-now');
    Route::post('booking-now', 'store_book_now_other')->name('book.now.store.other.detail');
    Route::get('bookings/{amount}/{property_id}', 'bookings')->name('store.booking.detail');
    Route::get('/hotel/booking/invoice', 'thankYou')->name('thank-you')->middleware('prevent.back.history');
});


Route::controller(OtpController::class)->group(function () {
    Route::post('send-otp', 'sendOtp')->name('otp.send');
    Route::post('verify-otp', 'verifyOtp')->name('otp.verify');
    Route::post('resend-otp', 'resendOtp')->name('otp.resend');
});



Route::controller(CommentController::class)->group(function () {
    Route::post('post-comment','store_comment')->name('comments.store');
});

Route::controller(RazorpayController::class)->group(function () {
    Route::post('booking-store', 'bookingStore')->name('booking.store');
});

Route::controller(HotelBookingController::class)->group(function () {
    Route::post('hotel-booking-store', 'hotelBookingStore')->name('hotel.booking.store');
    Route::get('thank-you', 'thankYou')->name('thank.you');
    Route::get('invoice/{invoiceNumber}','showInvoice')->name('invoice.show');
});









