<?php

namespace Lux\Contus;

use Illuminate\Support\ServiceProvider;
use Lux\Contus\Commands\ControllerCommand;

class ContusServiceProvider extends ServiceProvider
{
   protected $commands = [
        'Lux\Contus\Commands\ControllerCommand'
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }   
}
