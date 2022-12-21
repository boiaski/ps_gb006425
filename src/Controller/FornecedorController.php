<?php

namespace Petshop\Controller;

use Petshop\Core\FrontController;
use Petshop\Model\Fornecedor;
use Petshop\View\Render;

class FornecedorController extends FrontController
{
    public function listaFornecedor()
  {
    $dados = [];
    $dados['topo'] = $this->carregaHTMLTopo();
    $dados['rodape'] = $this->carregaHTMLRodape();

    $fornecedor = new Fornecedor();
    $rowsFornecedor = $fornecedor->find();

    foreach ($rowsFornecedor as &$f) {
      $fornecedor = new Fornecedor();
      $fornecedor->loadById($f['idfornecedor']);
      $f['imagens'] = $fornecedor->getFiles();
    }
    $dados['fornecedor'] = $rowsFornecedor;

    Render::front('fornecedores', $dados);
  }
}