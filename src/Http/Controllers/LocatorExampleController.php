<?php

namespace App\Http\Controllers;

class LocatorExampleController extends Controller
{

    public function __construct()
    {
        //
    }

    public function callExample()
    {
        $statusCode = 200;
        $message    = 'The locator called with success!';

        //code...

        $response['statusCode'] = $statusCode;
        $response['message']    = $message;
        return $response;
    }


}
