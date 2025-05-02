<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\NewsletterSubscriptionController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ContactDetailController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('admin/login', [AdminController::class, 'login']);
Route::post('/subscribe', [NewsletterSubscriptionController::class, 'store'])->name('subscribe');
Route::get('/subscriptions', [NewsletterSubscriptionController::class, 'index'])->name('subscriptions');
Route::post('/contact-submit', [ContactUsController::class, 'store'])->name('contact-submit');
Route::get('/contacts', [ContactUsController::class, 'index'])->name('contacts');
Route::put('/contact-details', [ContactDetailController::class, 'update'])->name('contact-details');
Route::get('/contact-details', [ContactDetailController::class, 'index'])->name('contact-details');
