<?php

namespace App\Providers;

use App\Tn\Ranji\Ipl\IndianPlayer;
use Illuminate\Support\ServiceProvider;

class IndianPlayerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('cricket',function(){
            return new IndianPlayer;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
