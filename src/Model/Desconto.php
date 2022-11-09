<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'descontos')]
class Desconto extends DAO
{
    #[Campo(label: 'Cód. Desconto', nn:true, pk:true, auto:true)]
    protected $idDesconto;

    #[Campo(label: 'Código')]
    protected $codigo;

    #[Campo(label: 'Dt. Validação Inicial')]
    protected $dataini;

    #[Campo(label: 'Dt. Validação Final')]
    protected $datafim;

    #[Campo(label: 'Percentual')]
    protected $percentual;

    #[Campo(label: 'Dt. Criação', nn:true, auto:true)]
    protected $created_at;

    #[Campo(label: 'Dt. Aleração', nn:true, auto:true)]
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

    public function getCreated_At()
    {
        return $this->created_at;
    }
    public function getUpdated_At()
    {
        return $this->updated_at;
    }
}