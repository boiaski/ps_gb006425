<?php

namespace Petshop\Model;

//produtos_compras
class ProdutoCompra
{
    //Cód. Produto, pk, nn
    protected $idProduto;

    //Cód. Fornecedor, pk, nn
    protected $idFornecedor;

    //Preço do produto, nn
    protected $preco;

    //Quantidade de Produtos, nn
    protected $quantidade;

    public function getIdProduto()
    {
        return $this->idProduto;
    }
    public function setIdProduto($idProduto): self
    {
        $this->idProduto = $idProduto;
        return $this;
    }

    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }
    public function setIdFornecedor($idFornecedor): self
    {
        $this->idFornecedor = $idFornecedor;
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
}