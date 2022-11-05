<?php

namespace Petshop\Model;

//enderecos
class Endereco
{
    //Cód. Endereco, pk, nn, auto
    protected $idEndereco;

    //Cód Cliente, nn
    protected $idCliente;

    //Cep, nn
    protected $cep;

    //Cidade, nn
    protected $cidade;

    //Estado, nn
    protected $estado;

    //Rua
    protected $rua;

    //Bairro  
    protected $bairro;

    //Numero de Endereço
    protected $numero;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    public function getIdEndereco()
    {
        return $this->idEndereco;
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

    public function getCep()
    {
        return $this->cep;
    }
    public function setCep($cep): self
    {
        $this->cep = $cep;
        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;
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

    public function getRua()
    {
        return $this->rua;
    }
    public function setRua($rua): self
    {
        $this->rua = $rua;
        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }
    public function setBairro($bairro): self
    {
        $this->bairro = $bairro;
        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero): self
    {
        $this->numero = $numero;
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