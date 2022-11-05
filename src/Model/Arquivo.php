<?php

namespace Petshop\Model;

//arquivos
class Arquivo
{
    //Cód. Arquivo, pk, nn, auto
    protected $idArquivo;

    //Nome do arquivo, nn
    protected $nome;

    //Tipo do arquivo, nn
    protected $tipo;

    //Descreição do arquivo
    protected $descricao;

    //Tabela do arquivo
    protected $tabela;

    //Cód. Tabela
    protected $tabelaid;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    public function getIdArquivo()
    {
        return $this->idArquivo;
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
    
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }
    
    public function getTabela()
    {
        return $this->tabela;
    }
    public function setTabela($tabela): self
    {
        $this->tabela = $tabela;
        return $this;
    }
    
    public function getTabelaid()
    {
        return $this->tabelaid;
    }
    public function setTabelaid($tabelaid): self
    {
        $this->tabelaid = $tabelaid;        
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