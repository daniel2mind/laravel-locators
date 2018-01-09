<?php


namespace App\Http\Locators;

use App\Http\Controllers\LocatorExampleController;


class ApiLocator
{

    /**
     * Example function to a call controller function and return data to user
     *
     */
    public function example()
    {
        $controller = new LocatorExampleController();

        $response   = $controller->callExample();

        return json_encode($response);
    }
}
