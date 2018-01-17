<?php

namespace App\Http\Locators;

use App\Http\Controllers\LocatorExampleController;


class WebLocator
{
    /**
     * @return $basePathViews path's name of resources/views
     *
     */
    protected $basePathViews = '';


    /**
     * Example function to a call controller function and return data to user
     *
     */
    public function example()
    {
        $controller = new LocatorExampleController();

        $response   = $controller->callExample();

        return view($this->basePathViews.'locatorExample', $response);
    }
}
