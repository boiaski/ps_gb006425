<?php

namespace Petshop\Model;

//usuarios
class Usuario
{
    //Cód. Usuario, pk, nn, auto
    protected $idUsuario;

    //Nome do Usuario, nn
    protected $nome;

    //Email do Usuario, nn
    protected $email;

    //Senha do Usuario, nn
    protected $senha;

    //Tipo de Usuario, nn
    protected $tipo;

    //Quantidade de Acessos do Usuario, nn
    protected $qtdacessos;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    public function getIdUsuario()
    {
        return $this->idUsuario;
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

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;
        return $this;
    }

    public function getQtdacessos()
    {
        return $this->qtdacessos;
    }
    public function setQtdacessos($qtdacessos): self
    {
        $this->qtdacessos = $qtdacessos;
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