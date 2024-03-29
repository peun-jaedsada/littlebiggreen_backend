<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \View::share('cuturl',function( $title ){
            $titles = preg_replace('![^ก-๙\pL\pN\s]+!u', '', $title);
            return preg_replace('/\s/', '-', $titles);
        });
    }
}
