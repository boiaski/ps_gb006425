<?php

namespace Petshop\Model;

//carrinhosprodutos
class CarrinhoProduto
{
    //Cód. Produto, pk, nn
    protected $idProduto;

    //Cód. Carrinho, pk, nn
    protected $idCarrinho;

    //Preço do produto, nn
    protected $preco;

    //Quantidade de produtos no carrinho, nn
    protected $quantidade;

    //Dt. Criação, nn, auto
    protected $created_at;

    public function getIdProduto()
    {
        return $this->idProduto;
    }
    public function setIdProduto($idProduto): self
    {
        $this->idProduto = $idProduto;
        return $this;
    }

    public function getIdCarrinho()
    {
        return $this->idCarrinho;
    }
    public function setIdCarrinho($idCarrinho): self
    {
        $this->idCarrinho = $idCarrinho;
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

    public function getCreatedAt()
    {
        return $this->created_at;
    }
}