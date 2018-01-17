<?php

namespace Daniel2mind\LaravelLocators;

use Illuminate\Support\ServiceProvider;

class LaravelLocatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        $this->publishes([
            __DIR__.'/views/locatorExample.blade.php' => resource_path('views/locatorExample.blade.php'),
            __DIR__.'/Http/Controllers/LocatorExampleController.php' => base_path('app/Http/Controllers/LocatorExampleController.php'),
            __DIR__.'/Http/Locators/WebLocator.php' => base_path('app/Http/Locators/WebLocator.php'),
            __DIR__.'/Http/Locators/ApiLocator.php' => base_path('app/Http/Locators/ApiLocator.php'),
            __DIR__.'/Providers/RouteServiceProvider.php' => base_path('app/Providers/RouteServiceProvider.php'),
        ]);

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
