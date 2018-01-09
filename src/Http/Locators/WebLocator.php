<?php

/*
 *  WebController possui as funções que serão instanciadas pelas rotas web ('routes/web.php'), onde cada função irá realizar
 *  a chamada na respectiva controller e tratar o retorno vindo das controllers
 *
 *  A intenção de estruturar as chamadas dessa maneira, é para que as Controllers apenas executem suas regras de negócio,
 *  deixando que a WebController redirecione para os dados para as páginas ou API (em caso de chamada via ApiController)
 *
 *
 *  Por Daniel Barcelos
 *  12/07/2017 - 11:09
 *
 */


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
