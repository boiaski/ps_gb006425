<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'avaliacoes')]
class Avaliacao extends DAO
{
    #[Campo(label: 'Cód. Avaliação', nn:true, pk:true, auto:true)]
    protected $idAvaliacao;

    #[Campo(label: 'Cód. Produto', nn:true)]
    protected $idProduto;

    #[Campo(label: 'Cód. Cliente', nn:true)]
    protected $idCliente;

    #[Campo(label: 'Nota', nn:true)]
    protected $nota;

    #[Campo(label: 'Comentario')]
    protected $comentario;

    #[Campo(label: 'Dt. Criação', nn:true, auto:true)]
    protected $created_at;

    #[Campo(label: 'Dt. Aleração', nn:true, auto:true)]
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

    public function getCreated_At()
    {
        return $this->created_at;
    }
    public function getUpdated_At()
    {
        return $this->updated_at;
    }
}