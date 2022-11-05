<?php

namespace Petshop\Model;

//cidades
class Cidade
{
    //Cód. Cidade, pk, nn, auto
    protected $idCidade;

    //Estado, nn
    protected $uf;

    //Instituto Brasileiro de Geografia e Estatistica, nn
    protected $ibge;

    //ibge7, nn
    protected $igbe7;

    //Municipio, nn
    protected $municipio;

    //Região, nn
    protected $regiao;

    //Quantidade de pessoas na Cidade, nn
    protected $populacao;

    //Porte, nn
    protected $porte;

    //Capital 'S' ou 'N', nn
    protected $capital;

    public function getIdCidade()
    {
        return $this->idCidade;
    }

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

    public function getIgbe7()
    {
        return $this->igbe7;
    }
    public function setIgbe7($igbe7): self
    {
        $this->igbe7 = $igbe7;
        return $this;
    }

    public function getMunicipio()
    {
        return $this->municipio;
    }
    public function setMunicipio($municipio): self
    {
        $this->municipio = $municipio;
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

    public function getPopulacao()
    {
        return $this->populacao;
    }
    public function setPopulacao($populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    public function getPorte()
    {
        return $this->porte;
    }
    public function setPorte($porte): self
    {
        $this->porte = $porte;
        return $this;
    }

    public function getCapital()
    {
        return $this->capital;
    }
    public function setCapital($capital): self
    {
        $this->capital = $capital;
        return $this;
    }
}