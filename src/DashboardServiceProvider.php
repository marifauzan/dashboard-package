<?php

namespace Bjb\Dashboard;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Bjb\Dashboard\Http\Controllers\DashboardController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard');

        $this->publishes([
            __DIR__ . '/../resources/config/dashboard.php' => config_path('dashboard.php')
        ], 'config');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/dashboard')
        ], 'views');
    }
}
