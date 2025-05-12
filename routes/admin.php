<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\PropertyController;
use App\Http\Controllers\backend\CmsController;
use App\Http\Controllers\NewsletterSubscriptionController;
use App\Http\Controllers\backend\TaxRateController;
use App\Http\Controllers\backend\RoomTypeController;
use App\Http\Controllers\backend\TrendingDestination;
use App\Http\Controllers\backend\VendorController;
use App\Http\Controllers\backend\LogController;
use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\front\CommentController;


// Route::middleware(['auth.custom'])->group(function () {

Route::match(['get','post'], 'admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::prefix('admin/')->name('admin.')->middleware('admin')->group(function(){
        Route::controller(AuthController::class)->group(function(){
            Route::get('dashboard', 'dashboard')->name('dashboard');
            Route::get('users', 'users')->name('users');
            Route::get('logout', 'logout')->name('logout');
        });

        Route::controller(AdminController::class)->group(function(){
            Route::get('users/list', 'usersList')->name('users.list');
        
        });

        Route::post('/user/change-status/{id}', [AdminController::class, 'user_change_Status'])->name('user.change.status');
        Route::get('/user/delete/{id}', [AdminController::class, 'userDelete'])->name('userDelete');
        Route::post('/user/add', [AdminController::class, 'userAdd'])->name('userAdd');
        Route::post('/user/edit', [AdminController::class, 'userUpdate'])->name('userUpdate');

        Route::get('/user/profile', [AdminController::class, 'userProfile'])->name('userProfile');
        Route::post('/upload/image', [AdminController::class, 'uploadImage'])->name('upload.image');
        Route::post('/user/profile', [AdminController::class, 'storeOtherInformation'])->name('store.profile');
        Route::get('/subscriptions', [NewsletterSubscriptionController::class, 'index'])->name('subscriptions');
        Route::delete('/subscriptions/{id}', [NewsletterSubscriptionController::class, 'destroy'])->name('subscriptions.destroy');

       

        Route::controller(PropertyController::class)->group(function(){
            Route::match(['get','post'],'property/category/list', 'propertyCategory')->name('propertyCategory');
            Route::post('property/category/edit', 'propertyCategoryEdit')->name('propertyCategoryEdit');
            Route::get('property/category/delete/{id}', 'propertyCategoryDelete')->name('propertyCategoryDelete');
            Route::get('property/list', 'propertyList')->name('propertyList');
            Route::match(['get','post'],'property/add', 'propertyAdd')->name('property.add');
            Route::get('property/edit/{slug}', 'propertyEdit')->name('property.edit');
            Route::post('property/update', 'propertyUpdate')->name('property.update');
            Route::post('property/update-status', 'propertyupdateStatus')->name('property.updateStatus');


            Route::get('get-states/{country_id}', 'getStates')->name('get-states');
            Route::get('get-cities/{state_id}', 'getCities')->name('get-cities');

            Route::get('property/detail/edit/{id}', 'editPropertyDetail')->name('editPropertyDetail');
            Route::post('remove/propert/image', 'removePropertyImage')->name('removePropertyImage');
            Route::post('property/detail/update', 'updatePropertyDetail')->name('updatePropertyDetail');
            Route::get('property/detail/delete/{id}', 'propertyDetailDelete')->name('propertyDetailDelete');

             // Route::get('weekend/deal', 'weekend_deal')->name('propertyWeekendDeal');
            Route::get('weekend/deal', 'weekend_deal')->name('propertyWeekendDeal');
            Route::post('weekend/deal', 'store_weekend_deal')->name('store.propertyWeekendDeal');

            Route::get('property/weeked-deal/delete/{id}', 'propertyWeekDealDelete')->name('propertyWeekDealDelete');


             //treanding destination
             Route::get('treanding/destination', 'treanding_destination')->name('treanding.destination');
             Route::post('treanding/destination', 'store_treanding_destination')->name('store.treanding.destination');
             Route::get('property/treanding-destination/delete/{id}', 'treandingDestinationDelete')->name('treandingDestinationDelete');

             

            

        });

        Route::controller(CmsController::class)->group(function(){
            Route::get('about-us', 'about_us')->name('about-us');
            Route::post('store-about-us', 'store_about_us')->name('store-about-us');
            Route::get('contact-us', 'contact')->name('contact-us');        
            Route::get('privacy-policy', 'privacy_policy')->name('privacy-policy');
            Route::post('store-policy', 'store_privacy_policy')->name('store-privacy-policy');            
            Route::get('terms-and-conditions', 'terms_and_conditions')->name('terms-and-conditions');
            Route::post('store-tearm-and-condition', 'store_tearm_condition')->name('store-tearms-and-conditions');
            Route::get('footer', 'footer')->name('footer');
            Route::post('store-footer', 'store_footer')->name('store-footer');
            Route::get('home', 'home')->name('home');
            Route::post('store-home', 'store_home')->name('store-home');
            Route::post('banner-store', 'bannerStore')->name('banner-store');


        });

        Route::controller(TaxRateController::class)->group(function(){
            Route::get('tax-rate', 'view_tax_rate')->name('tax-rate');
            Route::get('get-property/{id}', 'category_wise_property')->name('get.property');
            Route::post('add-tax', 'store_tax_price')->name('tax.add');
            Route::post('/tax/change-status/{id}','tax_change_Status')->name('tax.change.status');
            Route::get('/tax/delete/{id}', 'taxDelete')->name('taxDelete');
            Route::post('/tax/edit','taxUpdate')->name('taxUpdate');
        
        });

        Route::controller(RoomTypeController::class)->group(function(){
            Route::get('room-type', 'index')->name('room-type');
            Route::post('add-room', 'store_room')->name('room.add');
            Route::post('/room-type/edit','roomUpdate')->name('roomUpdate');
            Route::get('/room/delete/{id}', 'roomDelete')->name('roomDelete');
            Route::post('/room/change-status/{id}','room_change_Status')->name('room.change.status');

        
        });


         Route::controller(CommentController::class)->group(function(){
            Route::get('show-comment', 'index')->name('show.comment');
            Route::post('/comments/{id}/status','updateStatus')->name('comments.update.status');

            // Route::post('add-room', 'store_room')->name('room.add');
            // Route::post('/room-type/edit','roomUpdate')->name('roomUpdate');
            // Route::get('/room/delete/{id}', 'roomDelete')->name('roomDelete');
            // Route::post('/room/change-status/{id}','room_change_Status')->name('room.change.status');

        
        });

        //@trending-destination on home page
        Route::get('/trending-destination', [TrendingDestination::class, 'view'])->name('trending-destination');
        Route::post('/trending-destination/add', [TrendingDestination::class, 'add'])->name('add-trending-destination');
        Route::get('/trending-destination/edit/{id}', [TrendingDestination::class, 'edit_view'])->name('edit-trending-destination');
        Route::post('/trending-destination/update/{id}', [TrendingDestination::class, 'update'])->name('update-trending-destination');
        Route::get('/trending-destination/delete/{id}', [TrendingDestination::class, 'delete'])->name('delete-trending-destination');
        //@active/inactive
        Route::post('admin/trending-destination/update-status/{id}', [TrendingDestination::class, 'status'])->name('status');

        //@get state and city
        Route::get('admin/get-state/{id}', [TrendingDestination::class, 'getState'])->name('get.state');
        Route::get('admin/get-city/{id}', [TrendingDestination::class, 'getCity'])->name('get.city');

        //vendor-list
        Route::get('admin/vendors/list', [VendorController::class, 'vendorList'])->name('vendorList');
        Route::get('admin/vendors/view/{id}', [VendorController::class, 'vendorView'])->name('vendorView');
        Route::post('admin/vendor/add', [VendorController::class, 'addVendor'])->name('vendorAdd');
        Route::post('admin/vendor/status/update/{id}', [VendorController::class, 'vendorStatusUpdate'])->name('vendorStatusUpdate');
        Route::get('admin/vendor/delete/{id}', [VendorController::class, 'deleteVendor'])->name('vendorDelete');

        //@vendor-Property
        Route::get('admin/vendor/property/{id}', [VendorController::class, 'vendorPropertyView'])->name('vendorPropertyView');
        Route::post('admin/vendor/property/status/{id}', [VendorController::class, 'vendorPropertyStatus'])->name('vendorPropertyStatus');


        //@facility
        Route::get('admin/add/facility', [PropertyController::class, 'addFacilitiesView'])->name('addFacilitiesView');
        Route::post('admin/add/facility/new', [PropertyController::class, 'addFacility'])->name('addFacility');
        Route::post('admin/update/facility/{id}', [PropertyController::class, 'updateStatus'])->name('updateStatus');
        Route::post('admin/delete/facility/{id}', [PropertyController::class, 'deleteFacility'])->name('deleteFacility');


        
        Route::controller(LogController::class)->group(function(){
            Route::get('log-detail', 'logDetail')->name('log.detail');
            Route::get('log-details', 'logDetail2')->name('vendor.log.detail');        
        });

        Route::controller(BookingController::class)->group(function(){
            Route::get('hotel-booking-listing', 'hotelBookingListing')->name('hotel.detail.listing');
            Route::post('update-offline-amount', 'updateOfflineAmount')->name('update.offline.amount');
        });



    });