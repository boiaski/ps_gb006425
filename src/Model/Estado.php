<?php

namespace Petshop\Model;

//estados
class Estado 
{
    //Sigla do estado, pk, nn
    protected $uf;

    //Instituto Brasileiro de Geografia e Estatistica, nn
    protected $ibge;

    //Nome do estado, nn
    protected $estado;

    //Regiao do estado, nn
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