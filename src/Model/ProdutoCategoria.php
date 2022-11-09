<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'produtos_categorias')]
class ProdutoCategoria extends DAO
{
    #[Campo(label: 'Cód. Produto', nn:true, pk:true)]
    protected $idProduto;

    #[Campo(label: 'Cód. Categoria', nn:true, pk:true)]
    protected $idCategoria;

    #[Campo(label: 'Dt. Criação', nn:true, auto:true)]
    protected $created_at;

    public function getIdProduto()
    {
        return $this->idProduto;
    }
    public function setIdProduto($idProduto): self
    {
        $this->idProduto = $idProduto;
        return $this;
    }

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
    public function setIdCategoria($idCategoria): self
    {
        $this->idCategoria = $idCategoria;
        return $this;
    }

    public function getCreated_At()
    {
        return $this->created_at;
    }
}