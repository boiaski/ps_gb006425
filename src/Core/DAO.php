<?php

namespace Petshop\Core;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;

class DAO
{

    /**
     * Função que objetiva retornar as metainformações da classe, baseando-se
     * para isso na leitura dos Attributes
     *
     * @return array Propriedades da entidade (tabela e campos)
     */
    public function getTableInfo() : array
    {
        /*vetor que armazenara as informações da classe 
        referente as tabelas e campos do banco de dados
         */
        $info = [];

        /*pegando as metainformações da classe referente ao
        objeto atual instanciado
         */
        $ref = new \ReflectionClass($this::class);
        foreach($ref->getAttributes(Entidade::class) as $attrTable) {
            $info['tabela'] = $attrTable->getArguments();

            //procurando as metainformações das propriedades da classe
            foreach($ref->getProperties() as $propriedade) {
                // para cada campo/prop localizada, procura seus atributos
                foreach($propriedade->getAttributes(Campo::class) as $attrCampo) {
                    $info['campos'][$propriedade->getName()] = $attrCampo->getArguments();
                }
            }
        }

        if(!isset($info['tabela']) || !isset($info['campos'])) {
            throw new Exception('Os atributos da classe/propriedades não foram preenchidos');
        }
        
        return $info;
    }

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