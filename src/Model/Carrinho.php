<?php

namespace Petshop\Model;

//carrinhos
class Carrinho
{
    //Cód. Carrinho, pk, nn, auto
    protected $idCarrinho;

    //Cód. Cliente, nn
    protected $idCliente;

    //Valor total do carrinho, nn
    protected $valorTotal;

    //Carrinho encerrado (Compra finalizada), nn
    protected $encerrado;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    public function getIdCarrinho()
    {
        return $this->idCarrinho;
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

    public function getValorTotal()
    {
        return $this->valorTotal;
    }
    public function setValorTotal($valorTotal): self
    {
        $this->valorTotal = $valorTotal;
        return $this;
    }

    public function getEncerrado()
    {
        return $this->encerrado;
    }
    public function setEncerrado($encerrado): self
    {
        $this->encerrado = $encerrado;
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