<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //The following code is to send data to all view (layouts/footer/header)
        // View::composer('layouts.home_layout', function( $view )
        // {
        // $data = 'hello';

        // //pass the data to the view
        // $view->with( 'data', $data );
        //  });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
