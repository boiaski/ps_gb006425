<?php

namespace Petshop\Core;

use Bramus\Router\Router;

class App
{
    /**
     * Variavel estatica que conterá o objeto Router responsavel pelo tratamento das rotas
     *
     * @var Router
     */
    private static $router;

    /**
     * Método que será carregado quando alguma pagina do site for invocada, decide qual a rota deve ser executada a partir da URL informada pelo usuario
     *
     * @return void
     */
    public static function start()
    {
        //associa um objeto Bramus\Router á variavel $router
        self::$router = new Router();

        //resgistra as rotas possiveis
        self::registraRotasDoFrontEnd();
        self::registraRotasDoBackEnd();

        //analisa a requisição e escolhe a rota compatível
        self::$router->run();
    }

    /**
     * Registra as rotas possiveis que estarão associadas aos controllers para o FRONT END
     *
     * @return void
     */
    private static function registraRotasDoFrontEnd()
    {
        self::$router->get('/', '\Petshop\Controller\HomeController@index');
    }

    /**
     * Registra as rotas possiveis que estarão associadas aos controllers para o BACK END
     *
     * @return void
     */
    private static function registraRotasDoBackEnd()
    {
        
    }
}