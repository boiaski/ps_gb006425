<?php

namespace Petshop\Model;

//dicas
class Dica
{
    //Cód. Dica, pk, nn, auto
    protected $idDica;

    //Titulo da dica, nn
    protected $titulo;

    //Descrição da dica, nn
    protected $descricao;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    public function getIdDica()
    {
        return $this->idDica;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

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