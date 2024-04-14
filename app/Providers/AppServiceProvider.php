<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


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
        Validator::extend('valid_referral_code', function ($attribute, $value, $parameters, $validator) {

            // Check if referral code exists in the users table
            return \App\Models\User::where('reffernce_code', $value)->exists();
        });
        //
    }
}
