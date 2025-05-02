<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\front\AuthController;
    use App\Http\Controllers\front\HomeController;
    use App\Http\Controllers\front\SocialiteController;
    use App\Http\Controllers\front\GoogleController;
    use App\Http\Controllers\front\FacebookController;




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

    Route::get('/clear', function () {
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('optimize:clear');

        dd('clear');
    });

    Route::get('/create-model-and-migration/{name}', function ($name) {
        Artisan::call('make:model', [
            'name' => $name,
            '--migration' => true,
        ]);
        dd("Model and migration created successfully for: {$name}");
    });

    Route::get('/run-migrate', function () {
        try {
            Artisan::call('migrate', [
                '--path' => 'database/migrations/2025_01_01_111624_create_log_details_table.php',
            ]);
            dd("Migration for `contact_us` table ran successfully!");
        } catch (Exception $e) {
            dd("Error running the migration: " . $e->getMessage());
        }
    });

    Route::get('/get-property', function () {
        return view('front.get-property');
    });
    Route::get('/forgot-password', function () {
        return view('front.auth.forgot-password');
    });
    Route::get('/property-listing', function () {
        return view('front.auth.property-listing');
    });
    Route::get('/property-listing-form', function () {
        return view('front.property-listing-form');
    });
    Route::get('/explore-new-delhi', function () {
        return view('front.index');
    });
    Route::get('/explore-noida', function () {
        return view('front.index');
    });
    Route::get('/explore-agra', function () {
        return view('front.index');
    });
    Route::get('/explore-jaipur', function () {
        return view('front.index');
    });
    Route::get('/explore-gurgaon', function () {
        return view('front.index');
    });
    // Route::get('/terms-and-conditions', function () {
    //     return view('front.Terms&Conditions');
    // });
    // Route::get('/privacy-policy', function () {
    //     return view('front.privacy-policy');
    // });
    Route::get('/travel-on-emi', function () {
        return view('front.travel-on-emi');
    });




    Route::match(['get', 'post'], 'register', [AuthController::class, 'register'])->name('register');
    Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('login');

    Route::match(['get', 'post'], 'property-login', [AuthController::class, 'property_login'])->name('property.login');

    Route::middleware('property.user')->group(function () {
        Route::match(['get', 'post'], 'property-register', [AuthController::class, 'property_register'])->name('property.register');

        Route::get('property-logout', [AuthController::class, 'property_logout'])->name('property.logout');
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // Route::get('login/google', [SocialiteController::class, 'redirectToGoogle'])->name('login.google');
    // Route::get('login/google/callback', [SocialiteController::class, 'handleGoogleCallback']);

    Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
    // Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
    Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');



    // Route::get('login/facebook', [SocialiteController::class, 'redirectToFacebook'])->name('login.facebook');
    // Route::get('login/facebook/callback', [SocialiteController::class, 'handleFacebookCallback']);

    Route::get('login/facebook', [FacebookController::class, 'redirectToFacebook']);
    Route::get('login/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);





    require __DIR__ . '/admin.php';
    require __DIR__ . '/front.php';
    require __DIR__ . '/vendor.php';
