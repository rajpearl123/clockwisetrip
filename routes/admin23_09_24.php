<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\PropertyController;
use App\Http\Controllers\backend\CmsController;

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

        Route::controller(PropertyController::class)->group(function(){
            Route::match(['get','post'],'property/category/list', 'propertyCategory')->name('propertyCategory');
            Route::post('property/category/edit', 'propertyCategoryEdit')->name('propertyCategoryEdit');
            Route::get('property/category/delete/{id}', 'propertyCategoryDelete')->name('propertyCategoryDelete');
            Route::match(['get','post'],'property/list', 'propertyList')->name('propertyList');

            Route::get('property/detail/edit/{id}', 'editPropertyDetail')->name('editPropertyDetail');
            Route::post('remove/propert/image', 'removePropertyImage')->name('removePropertyImage');
            Route::post('property/detail/update', 'updatePropertyDetail')->name('updatePropertyDetail');
            Route::get('property/detail/delete/{id}', 'propertyDetailDelete')->name('propertyDetailDelete');

        });

        Route::controller(CmsController::class)->group(function(){
            Route::get('about-us', 'about_us')->name('about-us');
            Route::get('contact-us', 'contact')->name('contact-us');
        
            Route::get('privacy-policy', 'privacy_policy')->name('privacy-policy');
        });
});