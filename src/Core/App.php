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
        self::$router->get('/nossas-lojas', '\Petshop\Controller\NossasLojasController@nossasLojas');
        self::$router->get('/favoritos', '\Petshop\Controller\MeusFavoritosController@meusFavoritos');
        self::$router->get('/categoria{id}', '\Petshop\Controller\CategoriaController@listaCategoria');
        self::$router->get('/fornecedores', '\Petshop\Controller\FornecedorController@listaFornecedor');
        
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
        self::$router->before('GET|POST', '/admin/.*', function(){
            if(empty($_SESSION['usuario'])) {
                redireciona('/admin', 'danger', 'Faça seu logon para continuar');
            }
        });

        self::$router->mount('/admin', function() {
            /** GET */
            self::$router->get('/', '\Petshop\Controller\AdminLoginController@login');
            self::$router->get('/dashboard', '\Petshop\Controller\AdminDashboardController@index');
            self::$router->post('/', '\Petshop\Controller\AdminLoginController@postLogin');
            
            self::$router->get('/clientes', '\Petshop\Controller\AdminClienteController@listar');
            self::$router->get('/clientes/{valor}', '\Petshop\Controller\AdminClienteController@form');
            self::$router->post('/clientes/{valor}', '\Petshop\Controller\AdminClienteController@postForm');
            
            self::$router->get('/usuarios', '\Petshop\Controller\AdminUsuarioController@listar');
            self::$router->get('/usuarios/{valor}', '\Petshop\Controller\AdminUsuarioController@form');
            self::$router->post('/usuarios/{valor}', '\Petshop\Controller\AdminUsuarioController@postForm');

            self::$router->get('/dicas', '\Petshop\Controller\AdminDicaController@listar');
            self::$router->get('/dicas/{valor}', '\Petshop\Controller\AdminDicaController@form');
            self::$router->post('/dicas/{valor}', '\Petshop\Controller\AdminDicaController@postForm');

            self::$router->get('/marcas', '\Petshop\Controller\AdminMarcaController@listar');
            self::$router->get('/marcas/{valor}', '\Petshop\Controller\AdminMarcaController@form');
            self::$router->post('/marcas/{valor}', '\Petshop\Controller\AdminMarcaController@postForm');

            self::$router->get('/categorias', '\Petshop\Controller\AdminCategoriaController@listar');
            self::$router->get('/categorias/{valor}', '\Petshop\Controller\AdminCategoriaController@form');
            self::$router->post('/categorias/{valor}', '\Petshop\Controller\AdminCategoriaController@postForm');

            self::$router->get('/produtos', '\Petshop\Controller\AdminProdutoController@listar');
            self::$router->get('/produtos/{valor}', '\Petshop\Controller\AdminProdutoController@form');
            self::$router->post('/produtos/{valor}', '\Petshop\Controller\AdminProdutoController@postForm');

            self::$router->get('/empresas', '\Petshop\Controller\AdminEmpresaController@listar');
            self::$router->get('/empresas/{valor}', '\Petshop\Controller\AdminEmpresaController@form');
            self::$router->post('/empresas/{valor}', '\Petshop\Controller\AdminEmpresaController@postForm');

            self::$router->get('/fornecedores', '\Petshop\Controller\AdminFornecedorController@listar');
            self::$router->get('/fornecedores/{valor}', '\Petshop\Controller\AdminFornecedorController@form');
            self::$router->post('/fornecedores/{valor}', '\Petshop\Controller\AdminFornecedorController@postForm');
            
            self::$router->get('/imagens/(\w+)/(\d+)', '\Petshop\Controller\AdminImagemController@listar');
            self::$router->get('/imagens/(\w+)/(\d+)/(\w+)', '\Petshop\Controller\AdminImagemController@form');
            self::$router->post('/imagens/(\w+)/(\d+)/(\w+)', '\Petshop\Controller\AdminImagemController@postForm');
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