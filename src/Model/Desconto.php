<?php

namespace Petshop\Model;

//descontos
class Desconto
{
    //Cód. Desconto, pk, nn, auto
    protected $idDesconto;

    //Código de desconto
    protected $codigo;

    //Data de validade Inicial
    protected $dataini;

    //Data de validade Final
    protected $datafim;

    //Percecntua de desconto
    protected $percentual;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    public function getIdDesconto()
    {
        return $this->idDesconto;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo): self
    {
        $this->codigo = $codigo;
        return $this;
    }

    public function getDataini()
    {
        return $this->dataini;
    }
    public function setDataini($dataini): self
    {
        $this->dataini = $dataini;
        return $this;
    }

    public function getDatafim()
    {
        return $this->datafim;
    }
    public function setDatafim($datafim): self
    {
        $this->datafim = $datafim;
        return $this;
    }

    public function getPercentual()
    {
        return $this->percentual;
    }
    public function setPercentual($percentual): self
    {
        $this->percentual = $percentual;
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