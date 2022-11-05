<?php

namespace Petshop\Model;

//produtos
class Produto
{
    //Cód. Produto, pk, nn, auto
    protected $idProduto;

    //Cód. Marca, nn
    protected $idMarca;

    //Nome do Produto, nn
    protected $nome;

    //Tipo de Produto, nn
    protected $tipo;

    //Preço do produto, nn
    protected $preco;

    //Quantidade de produtos
    protected $quantidade;

    //Largura do Prooduto
    protected $largura;

    //Altura do Prduto
    protected $altura;

    //Profundidade do Produto
    protected $profundidade;

    //Peso do Produto
    protected $peso;

    //Descrição do Produto
    protected $descricao;

    //Especificações do Produto
    protected $especificacoes;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
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

    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}