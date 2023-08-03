<?php
namespace AndreyKuzmenko;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/app.php' => config_path('app.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes(base_path().'/../database/migrations');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/app.php', 'andrey-config'
        );
    }
}