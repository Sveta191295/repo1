<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\View\greeting.php;
use Illuminate\Pagination\Paginator;

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
       //View::share('key', 'value');
       Paginator::useBootstrap();
    }
}
