<?php
namespace Xiaofengit\IndustryOfChinaForLaravel;

use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application service.
     * 
     * @return voild
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations')
        ], 'industry-of-china-migrations');

        $this->publishes([
            __DIR__ . '/../database/seeders' => database_path('seeders')
        ], 'industry-of-china-seeders');

        $this->publishes([
            __DIR__ . '/Models' => app_path('Models')
        ]);
    }
}