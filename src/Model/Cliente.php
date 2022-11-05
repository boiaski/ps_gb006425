<?php

namespace Petshop\Model;

//clientes
class Cliente
{
    //Cód. Cliente, pk, nn, auto
    protected $idCliente;

    //Tipo de cliente, nn
    protected $tipo;

    //CpfCnpj do cliente, nn
    protected $cpfCnpj;

    //Nome do cliente, nn
    protected $nome;

    //Email do cliente, nn
    protected $email;

    //Senha do cliente, nn
    protected $senha;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;
        return $this;
    }

    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }
    public function setCpfCnpj($cpfCnpj): self
    {
        $this->cpfCnpj = $cpfCnpj;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha): self
    {
        $this->senha = $senha;
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