<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'produtos')]
class Produto extends DAO
{
    #[Campo(label: 'Cód. Produto', nn:true, pk:true, auto:true)]
    protected $idProduto;

    #[Campo(label: 'Cód. Marca', nn:true)]
    protected $idMarca;

    #[Campo(label: 'Nome', nn:true)]
    protected $nome;

    #[Campo(label: 'Tipo', nn:true)]
    protected $tipo;

    #[Campo(label: 'Preço', nn:true)]
    protected $preco;

    #[Campo(label: 'Quantidade')]
    protected $quantidade;

    #[Campo(label: 'Largura')]
    protected $largura;

    #[Campo(label: 'Altura')]
    protected $altura;

    #[Campo(label: 'Profundidade')]
    protected $profundidade;

    #[Campo(label: 'Peso')]
    protected $peso;

    #[Campo(label: 'Descrição')]
    protected $descricao;

    #[Campo(label: 'Espicificações')]
    protected $especificacoes;

    #[Campo(label: 'Dt. Criação', nn:true, auto:true)]
    protected $created_at;

    #[Campo(label: 'Dt. Aleração', nn:true, auto:true)]
    protected $updated_at;

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function getIdMarca()
    {
        return $this->idMarca;
    }
    public function setIdMarca($idMarca): self
    {
        $this->idMarca = $idMarca;
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

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;
        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco): self
    {
        $this->preco = $preco;
        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getLargura()
    {
        return $this->largura;
    }
    public function setLargura($largura): self
    {
        $this->largura = $largura;
        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura): self
    {
        $this->altura = $altura;
        return $this;
    }

    public function getProfundidade()
    {
        return $this->profundidade;
    }
    public function setProfundidade($profundidade): self
    {
        $this->profundidade = $profundidade;
        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso): self
    {
        $this->peso = $peso;
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

    public function getEspecificacoes()
    {
        return $this->especificacoes;
    }
    public function setEspecificacoes($especificacoes): self
    {
        $this->especificacoes = $especificacoes;
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