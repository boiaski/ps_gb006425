<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'empresas')]
class Empresa extends DAO
{
    #[Campo(label: 'Cód. Empresa', nn:true, pk:true, auto:true)]
    protected $idEmpresa;

    #[Campo(label: 'Nome', nn:true)]
    protected $nomeFantasia;

    #[Campo(label: 'Razão Social', nn:true)]
    protected $razaoSocial;

    #[Campo(label: 'Tipo', nn:true)]
    protected $tipo;

    #[Campo(label: 'Cep', nn:true)]
    protected $cep;

    #[Campo(label: 'Cidade', nn:true)]
    protected $cidade;

    #[Campo(label: 'Estado', nn:true)]
    protected $estado;

    #[Campo(label: 'Rua')]
    protected $rua;

    #[Campo(label: 'Bairro')]
    protected $bairro;

    #[Campo(label: 'Numero')]
    protected $numero;

    #[Campo(label: 'Telefone', nn:true)]
    protected $telefone;

    #[Campo(label: 'Telefone - 2')]
    protected $telefone2;

    #[Campo(label: 'Site')]
    protected $site;

    #[Campo(label: 'Email', nn:true)]
    protected $email;

    #[Campo(label: 'Cnpj', nn:true)]
    protected $cnpj;

    #[Campo(label: 'Dt. Criação', nn:true, auto:true)]
    protected $created_at;

    #[Campo(label: 'Dt. Aleração', nn:true, auto:true)]
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

    public function getCreated_At()
    {
        return $this->created_at;
    }
    public function getUpdated_At()
    {
        return $this->updated_at;
    }
}