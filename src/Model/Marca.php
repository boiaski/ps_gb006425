<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'marcas')]
class Marca extends DAO
{
    #[Campo(label: 'Cód. Marca', nn:true, pk:true, auto:true)]
    protected $idMarca;

    #[Campo(label: 'Nome', nn:true)]
    protected $marca;

    #[Campo(label: 'Fabricante')]
    protected $fabricante;

    #[Campo(label: 'Dt. Criação', nn:true, auto:true)]
    protected $created_at;

    #[Campo(label: 'Dt. Aleração', nn:true, auto:true)]
    protected $updated_at;

    public function getIdMarca()
    {
        return $this->idMarca;
    }

    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca): self
    {
        $this->marca = $marca;
        return $this;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }
    public function setFabricante($fabricante): self
    {
        $this->fabricante = $fabricante;
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