<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'favoritos')]
class Favorito extends DAO
{
    #[Campo(label: 'Cód. Favorito', nn:true, pk:true, auto:true)]
    protected $idFavorito;

    #[Campo(label: 'Cód. Produto', nn:true)]
    protected $idProduto;

    #[Campo(label: 'Cód. Cliente', nn:true)]
    protected $idCliente;

    #[Campo(label: 'Ativo', nn:true)]
    protected $ativo;

    #[Campo(label: 'Dt. Criação', nn:true, auto:true)]
    protected $created_at;

    #[Campo(label: 'Dt. Aleração', nn:true, auto:true)]
    protected $updated_at;

    public function getIdFavorito()
    {
        return $this->idFavorito;
    }

    public function getIdProduto()
    {
        return $this->idProduto;
    }
    public function setIdProduto($idProduto): self
    {
        $this->idProduto = $idProduto;
        return $this;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }
    public function setIdCliente($idCliente): self
    {
        $this->idCliente = $idCliente;
        return $this;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }
    public function setAtivo($ativo): self
    {
        $this->ativo = $ativo;
        return $this;
    }

    public function getCreated_At()
    {
        return $this->created_at;
    }
    public function getUpdated_At()
    {
        return $this->updated_at;
    }
}