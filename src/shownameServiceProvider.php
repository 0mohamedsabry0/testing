<?php

namespace 0mohamedsabry0\testing;

use Illuminate\Support\ServiceProvider;

class shownameServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //

	$this->loadRoutesFrom(__DIR__.'showname.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
