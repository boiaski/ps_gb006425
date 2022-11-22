<?php

namespace Petshop\Core;

use Bramus\Router\Router;
use Petshop\Controller\ErrorController;

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
        self::registra404Generico();

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
        self::$router->get('/login', '\Petshop\Controller\LoginController@login');
        self::$router->get('/cadastro', '\Petshop\Controller\CadastroController@cadastro');
    }

    /**
     * Registra as rotas possiveis que estarão associadas aos controllers para o BACK END
     *
     * @return void
     */
    private static function registraRotasDoBackEnd()
    {
        
    }

    /**
     * Registra as rota genérica para erro da URL digitada
     *
     * @return void
     */
    private static function registra404Generico()
    {
        self::$router->set404(function() {
            header('HTTP/1.1 404 Not Found');
            $objErro = new ErrorController();
            $objErro->erro404();
        });
    }
}