

1 - composer require daniel2mind/locators;

2 - Insert in config/app.php, providers:
    Daniel2mind\Locators\LocatorServiceProvider::class,
    
3 - Insert in root/composer.json, autoload->psr-4:
    "Daniel2mind\\Locators\\": "vendor/daniel2mind/locators/src"
    
4 - Execute composer dump-autoload

5 - php artisan vendor:publish --force; //exec force to overwrite Files (RouteServiceProvider)

6 - Insert in routes/web.php for test: "Route::get('locator', 'WebLocator@example');" and call the route in your browser
 
6 - Insert in routes/api.php for test: "Route::get('locator', 'ApiLocator@example');" and call (api/locator) the route in your browser 