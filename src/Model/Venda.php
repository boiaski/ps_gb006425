<?php

namespace Petshop\Model;

//vendas
class Venda
{
    //Cód. Venda, pk, nn, auto
    protected $idVenda;

    //Cód. Carrinho, nn
    protected $idCarrinho;

    //FormaGPTO, nn
    protected $formaGpto;

    //Informa o status da Venda, nn
    protected $status;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    public function getIdVenda()
    {
        return $this->idVenda;
    }

    public function getIdCarrinho()
    {
        return $this->idCarrinho;
    }
    public function setIdCarrinho($idCarrinho): self
    {
        $this->idCarrinho = $idCarrinho;
        return $this;
    }

    public function getFormaGpto()
    {
        return $this->formaGpto;
    }
    public function setFormaGpto($formaGpto): self
    {
        $this->formaGpto = $formaGpto;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status): self
    {
        $this->status = $status;
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