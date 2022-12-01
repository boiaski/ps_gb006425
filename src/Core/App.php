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
        //carrega uma sessão ou inicia uma nova em caso de novo acesso  
        self::carregaSessao();

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
        /** GET */
        self::$router->get('/', '\Petshop\Controller\HomeController@index');
        self::$router->get('/login', '\Petshop\Controller\LoginController@login');
        self::$router->get('/logout', '\Petshop\Controller\LoginController@logout');
        self::$router->get('/cadastro', '\Petshop\Controller\CadastroController@cadastro');
        self::$router->get('/meus-dados', '\Petshop\Controller\MeusDadosController@meusDados');
        self::$router->get('/fale-conosco', '\Petshop\Controller\FaleConoscoController@faleConosco');
        
        /** SET */
        self::$router->post('/login', '\Petshop\Controller\LoginController@postLogin');
        self::$router->post('/cadastro', '\Petshop\Controller\CadastroController@postCadastro');
        self::$router->post('/fale-conosco', '\Petshop\Controller\FaleConoscoController@postFaleConosco');
    }

    /**
     * Registra as rotas possiveis que estarão associadas aos controllers para o BACK END
     *
     * @return void
     */
    private static function registraRotasDoBackEnd()
    {
        self::$router->mount('/admin', function() {
            /** GET */
            self::$router->get('/', '\Petshop\Controller\AdminDashboardController@index');
            self::$router->get('/clientes', '\Petshop\Controller\AdminClienteController@listar');
            self::$router->get('/clientes/{valor}', '\Petshop\Controller\AdminClienteController@form');

            /** SET */
            self::$router->post('/clientes/{valor}', '\Petshop\Controller\AdminClienteController@postForm');
        });
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

    /**
     * Função que inicia uma nova sessão e, posteriormente, carrega o ID da sessão grava no dispositivo do usuario
     *
     * @return void
     */
    private static function carregaSessao()
    {
        session_start();
    }
}