<?php

namespace Petshop\Model;

//favoritos
class Favorito
{
    //Cód. Favorito, pk, nn, auto
    protected $idFavorito;

    //Cód. Produto, nn
    protected $idProduto;

    //Cód. Cliente, nn
    protected $idCliente;

    //Favorito está como 'S' ou 'N', nn
    protected $ativo;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
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

    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}