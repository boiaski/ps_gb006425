<?php

namespace Petshop\Core;

class DAO
{
    /**
     * Metodo GET para acesso direto via nomes de propriedades
     * de classe
     *
     * @param string $name
     * @return mixed
     */
    public function __get(string $name)
    {
        $metodoProcurado = 'get' . $name;
        if (method_exists($this, $metodoProcurado)) {
            return $this->$metodoProcurado();
        } else {
            throw new Exception("O atributo {$name} não tem 
            método 'get' associado");
        }
    }

    /**
     * Método SET para gravação direta via nomes de propriedades 
     * da classe
     *
     * @param string $name Nome da propriedade
     * @param [type] $value Valor a ser inserido
     */
    public function __set(string $name, $value)
    {
        $metodoProcurado = 'set' . $name;
        if (method_exists($this, $metodoProcurado)) {
            return $this->$metodoProcurado($value);
        } else {
            throw new Exception("O atributo {$name} não tem 
            método 'set' associado");
        }
    }
}