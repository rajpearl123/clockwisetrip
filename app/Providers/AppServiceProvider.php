<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $name = "Harshit Chauhan";
        $adminEmail = "harshitk@pearlorganisation.com";
        View::share('name', $name);
        View::share('adminEmail', $adminEmail);
    }
}
