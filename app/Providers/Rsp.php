<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class Rsp extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       $this->app->bind(

          'App\Repo\UserInterface',
          'App\Repo\UserRepo'

       );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
