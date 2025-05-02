<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\VendorController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\vendor\BookingController;
use App\Http\Controllers\vendor\PropertyController;


Route::controller(VendorController::class)->group(function(){
    Route::match(['get','post'], 'vendor/login', 'vendorLogin')->name('vendor.login');
    Route::match(['get','post'], 'vendor/register', 'vendorRegister')->name('vendor.register');
  
});


Route::prefix('vendor/')->name('vendor.')->middleware('vendor')->group(function(){
    Route::controller(VendorController::class)->group(function(){
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::match(['get','post'], 'profile', 'profile')->name('profile');

        Route::get('logout', 'logout')->name('logout');
      
    });

    Route::controller(PropertyController::class)->group(function(){
        Route::get('/property/add/view', 'addView')->name('addPropertyView');
        Route::get('/property/list', 'propertyListView')->name('propertyListView');
        Route::get('/property/view/{id}', 'propertyView')->name('propertyView');
        Route::post('/property/add','addProperty')->name('addProperty');
        Route::post('/status/update/{id}','statusUpdate')->name('statusUpdate');
        Route::get('/property/update/{id}', 'editPropertyView')->name('editPropertyView');
        Route::post('/property/edit/{id}', 'editProperty')->name('editProperty');
        Route::get('/property/delete/{id}','deleteProperty')->name('deleteProperty');
        Route::get('property/price/{id}','propertPrice')->name('property.price');
        Route::post('property/price/store','propertPriceStore')->name('property.price.store');
        Route::post('property/price/update','propertPriceUpdate')->name('property.price.update');
        Route::get('property/price/delete/{id}','propertPriceDelete')->name('property.price.delete');


    
        Route::get('/get-state/{id}', 'getState')->name('getState');
        Route::get('/get-city/{id}', 'getCity')->name('getCity');      
        Route::post('property/update-status', 'propertyupdateStatus')->name('property.updateStatus');

        Route::prefix('bookings')->name('booking.')->group(function(){
           Route::controller(BookingController::class)->group(function(){
            Route::get('list', 'list')->name('list');
            Route::get('view/{id}', 'view')->name('view');
           }); 
        });
    });   
});