<?php

namespace Thakur\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Thakur\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__ .'/views', 'calculator');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
    }
}
