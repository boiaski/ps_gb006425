<?php

namespace Petshop\Controller;

use Petshop\Core\FrontController;
use Petshop\Model\Produtos;
use Petshop\View\Render;

class MeusFavoritosController extends FrontController
{
    public function meusFavoritos()
    {
        // $valor = 0;
        // $objeto = new Empresa;
        //     $resultado = $objeto->find(['idempresa =' => $valor]);
        //     if(empty($resultado)) {
        //         redireciona('/nossas-lojas', 'danger', 'Link inválido, registro não localizado');
        //     }
        //     $_POST = $resultado[0];

        $dados = [];
        $dados['titulo'] = 'Meus Favoritos';
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();
        
        Render::front('favoritos', $dados);
    }

}