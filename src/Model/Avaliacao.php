<?php

namespace Petshop\Model;

//avaliacoes
class Avaliacao
{
    //Cód. Avaliacao, pk, nn, auto
    protected $idAvaliacao;

    //Cód. Produto, nn
    protected $idProduto;

    //Cód. Cliente, nn
    protected $idCliente;

    //Nota do cliente, nn
    protected $nota;

    //Comentario do cliente
    protected $comentario;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;
    
    public function getIdAvaliacao()
    {
        return $this->idAvaliacao;
    }

    public function getIdProduto()
    {
        return $this->idProduto;
    }
    public function setIdProduto($idProduto): self
    {
        $this->idProduto = $idProduto;
        return $this;
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

    public function getNota()
    {
        return $this->nota;
    }
    public function setNota($nota): self
    {
        $this->nota = $nota;
        return $this;
    }

    public function getComentario()
    {
        return $this->comentario;
    }
    public function setComentario($comentario): self
    {
        $this->comentario = $comentario;

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