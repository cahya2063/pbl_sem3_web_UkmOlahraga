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
        //

    Validator::extend('recaptcha', function ($attribute, $value, $parameters, $validator) {
        $recaptcha = new \ReCaptcha\ReCaptcha(env('NOCAPTCHA_SITEKEY'));
        $response = $recaptcha->verify($value, $_SERVER['REMOTE_ADDR']);
        return $response->isSuccess();
    });


    }
}
