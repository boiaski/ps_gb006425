<?php

namespace Petshop\Model;

//empresas
class Empresa
{
    //Cód. Empresa, pk, nn, auto
    protected $idEmpresa;

    //Nomde de Fantasia, nn
    protected $nomeFantasia;

    //Razão Social da empresa, nn
    protected $razaoSocial;

    //Tipo de empresa, nn
    protected $tipo;

    //Cep de onde é a empresa, nn
    protected $cep;

    //Cidade de onde é a empresa, nn
    protected $cidade;

    //Estado de onde é a empresa, nn
    protected $estado;

    //Rua da empresa
    protected $rua;

    //Bairro da empresa
    protected $bairro;

    //Numero da empresa
    protected $numero;

    //Telefone da empresa, nn
    protected $telefone;

    //Telefone 2 da empresa
    protected $telefone2;

    //Site da empresa
    protected $site;

    //Email da empresa, nn
    protected $email;

    //Cnpj da empresa, nn
    protected $cnpj;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }
    public function setNomeFantasia($nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;
        return $this;
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }
    public function setRazaoSocial($razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;
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

    public function getCep()
    {
        return $this->cep;
    }
    public function setCep($cep): self
    {
        $this->cep = $cep;
        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado): self
    {
        $this->estado = $estado;
        return $this;
    }

    public function getRua()
    {
        return $this->rua;
    }
    public function setRua($rua): self
    {
        $this->rua = $rua;
        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }
    public function setBairro($bairro): self
    {
        $this->bairro = $bairro;
        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone): self
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getTelefone2()
    {
        return $this->telefone2;
    }
    public function setTelefone2($telefone2): self
    {
        $this->telefone2 = $telefone2;
        return $this;
    }

    public function getSite()
    {
        return $this->site;
    }
    public function setSite($site): self
    {
        $this->site = $site;

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

    public function getCnpj()
    {
        return $this->cnpj;
    }
    public function setCnpj($cnpj): self
    {
        $this->cnpj = $cnpj;
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