<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'estados')]
class Estado extends DAO
{
    #[Campo(label: 'UF', nn:true, pk:true, auto:true)]
    protected $uf;

    #[Campo(label: 'IBGE', nn:true)]
    protected $ibge;

    #[Campo(label: 'Nome', nn:true)]
    protected $estado;

    #[Campo(label: 'Região', nn:true)]
    protected $regiao;

    public function getUf()
    {
        return $this->uf;
    }
    public function setUf($uf): self
    {
        $this->uf = $uf;
        return $this;
    }

    public function getIbge()
    {
        return $this->ibge;
    }
    public function setIbge($ibge): self
    {
        $this->ibge = $ibge;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado): self
    {
        $this->estado = $estado;
        return $this;
    }

    public function getRegiao()
    {
        return $this->regiao;
    }
    public function setRegiao($regiao): self
    {
        $this->regiao = $regiao;
        return $this;
    }
}