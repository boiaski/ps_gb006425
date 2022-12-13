<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;
use Petshop\Core\Exception;
use Respect\Validation\Validator as v;

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
    protected $telefone1;

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
    public function setNomeFantasia(string $nomeFantasia): self
    {
        $nomeFantasia = trim($nomeFantasia);
        $tamanhoValido = v::stringType()->length(1, 255)->validate($nomeFantasia);
        if(!$tamanhoValido) {
            throw new Exception('O tamanho do nome Fantasia é inválido');
        }
        $this->nomeFantasia = $nomeFantasia;
        return $this;
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }
    public function setRazaoSocial(string $razaoSocial): self
    {
        $razaoSocial = trim($razaoSocial);
        $tamanhoValido = v::stringType()->length(1, 255)->validate($razaoSocial);
        if(!$tamanhoValido) {
            throw new Exception('O tamanho da Razão Social é inválida é inválido');
        }
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo(string $tipo): self
    {
        $tipoValido = in_array($tipo, ['Matriz', 'Filial']);
        if(!$tipoValido) {
            throw new Exception('O tipo de ser Matriz ou Filial apenas');
        }
        $this->tipo = $tipo;
        return $this;
    }

    public function getCep()
    {
        return $this->cep;
    }
    public function setCep(string $cep): self
    {
        $cepValido = v::postalCode('BR')->validate($cep);
        if(!$cep) {
            throw new Exception('O campo CEP está incorreto');
        }
        $this->cep = $cep;
        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }
    public function setCidade(string $cidade): self
    {
        $cidade = trim($cidade);
        $tamanhoValido = v::stringType()->length(2, 35)->validate($cidade);
        if(!$tamanhoValido) {
            throw new Exception('O tamanho informado no campo Cidade é inválido');
        }
        $this->cidade = $cidade;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado(string $estado): self
    {
        $estado = trim($estado);
        $tamanhoValido = v::stringType()->length(2, 20)->validate($estado);
        if(!$tamanhoValido) {
            throw new Exception('O tamanho informado no campo Estado é inválido');
        }
        $this->estado = $estado;
        return $this;
    }

    public function getRua()
    {
        return $this->rua;
    }
    public function setRua($rua): self
    {
        if($rua==''){
            $this->rua = null;
        }
        $this->rua = $rua;
        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }
    public function setBairro(string $bairro): self
    {
        if($bairro==''){
            $this->bairro = null;
        }
        $this->bairro = $bairro;
        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero(string $numero): self
    {
        if($numero==''){
            $this->numero = null;
        }
        $this->numero = $numero;
        return $this;
    }

    public function getTelefone1()
    {
        return $this->telefone1;
    }
    public function setTelefone1(string $telefone1): self
    {
        $telefone1 = trim($telefone1);
        $tipoValido = v::phone()->validate($telefone1);
        if(!$tipoValido) {
            throw new Exception('O tipo informado no campo Telefone é inválido');
        }
        $this->telefone1 = $telefone1;
        return $this;
    }

    public function getTelefone2()
    {
        return $this->telefone2;
    }
    public function setTelefone2(string $telefone2): self
    {
        $telefone2 = trim($telefone2);
        $tipoValido = v::phone()->validate($telefone2);
        if($telefone2==''){
            $this->telefone2 = null;
        } else if(!$tipoValido) {
            throw new Exception('O tipo informado no campo Telefone 02 é inválido');
        }
        $this->telefone2 = $telefone2;
        return $this;
    }

    public function getSite()
    {
        return $this->site;
    }
    public function setSite(string $site): self
    {
        $site = trim($site);
        $tipoValido = v::url()->validate($site);
        if($site==''){
            $this->site = null;
        } else if(!$tipoValido) {
            throw new Exception('O valor informado no campo Site é inválido');
        }
        $this->site = $site;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        $email = trim($email);
        $tipoValido = v::email()->validate($email);
        if(!$tipoValido) {
            throw new Exception('O valor informado no campo E-mail é inválido');
        }
        $this->email = $email;
        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }
    public function setCnpj(string $cnpj): self
    {
        $tipoValido = v::cnpj()->validate($cnpj);
        if(!$tipoValido) {
            throw new Exception('O valor informado no campo CNPJ é inválido');
        }
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