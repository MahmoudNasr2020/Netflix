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
        view()->share('frontEnd', asset('frontEnd/assets/'));
        //this to make frontend =>global variable to use in all pages
        // asset method => To go to the public folder
        //asset('frontEnd/assets/') To go to public/frontEnd/assets/
    }
}
