<?php

namespace Petshop\Controller;

use Petshop\Core\Exception;
use Petshop\Model\Empresa;
use Petshop\View\Render;

class AdminEmpresaController
{
    public function listar()
    {
        //alimentando dados para a tabrla de listagem
        $dadosListagem = [];
        $dadosListagem['objeto'] = new Empresa;
        $dadosListagem['colunas'] = [
            ['campo'=>'idempresa',   'class'=>'text-center'],
            ['campo'=>'razaosocial', 'class'=>'text-center'],
            ['campo'=>'tipo',        'class'=>'text-center'],
            ['campo'=>'telefone1',   'class'=>'text-center'],
            ['campo'=>'created_at',  'class'=>'text-center'],
        ];
        $htmlTabela = Render::block('tabela-admin', $dadosListagem);

        //alimentando dados para a página de clientes
        $dados = [];
        $dados['titulo'] = 'Empresas - Listagem';
        $dados['usuario'] = $_SESSION['usuario'];
        $dados['tabela'] = $htmlTabela;

        Render::back('empresas', $dados);
    }

    public function form($valor)
    {
        //verifica se o parâmetro tem um número e, se for número, é um ID válido
        if(is_numeric($valor)) {
            $objeto = new Empresa;
            $resultado = $objeto->find(['idempresa =' => $valor]);
            if(empty($resultado)) {
                redireciona('/admin/empresas', 'danger', 'Link inválido, registro não localizado');
            }
            $_POST = $resultado[0];
        }

        //Cria e exibe o formulario
        $dados = [];
        $dados['titulo'] = 'Empresas - Manutenção';
        $dados['formulario'] = $this->renderizaFormulario(empty($_POST));

        Render::back('empresas', $dados);
    }

    public function postForm($valor)
    {
        $objeto = new Empresa;

        //se $valor tem um número, carrego os dados do registro informado nele
        if(is_numeric($valor)) {
            if(!$objeto->loadById($valor)) {
                redireciona('/admin/empresas', 'danger', 'Link inválido, registro não localizado');
            }
        }

        try {
            $campos = array_change_key_case($objeto->getFields());
            foreach($campos as $campo => $propriedades) {
                if(isset($_POST[$campo])) {
                    $objeto->$campo = $_POST[$campo];
                }
            }

            $objeto->save();
            
        } catch (Exception $e) {
            $_SESSION['mensagem'] = [
                'tipo' => 'warning',
                'texto' => $e->getMessage()
            ];
            $this->form($valor);
            exit;
        }

        redireciona('/admin/empresas', 'success', 'Alterações realizadas com sucesso');
    }

    public function renderizaFormulario($novo)
    {
        $dados = [
            'btn_class' => 'btn btn-warning px-5 mt-5',
            'btn_label' => ($novo ? 'Adicionar' : 'Atualizar'),
            'fields' => [
                ['type'=>'readonly', 'name'=>'idempresa',    'class'=>'col-2', 'label'=>'Id. Empresa'],
                ['type'=>'text',     'name'=>'nomefantasia', 'class'=>'col-4', 'label'=>'Nome Fantasia', 'required'=>true],
                ['type'=>'text',     'name'=>'razaosocial',         'class'=>'col-4', 'label'=>'Razão Social', 'required'=>true],
                ['type'=>'radio-inline',     'name'=>'tipo',      'class'=>'col-3', 'label'=>'Tipo', 'required'=>true, 
                    'options'=>[
                        ['value'=>'Matriz',   'label'=>'Matriz'],
                        ['value'=>'Filial',   'label'=>'Filial'],
                    ]
                ],
                ['type'=>'text',     'name'=>'cep',        'class'=>'col-2', 'label'=>'Cep',          'required'=>true],
                ['type'=>'text',     'name'=>'cidade',     'class'=>'col-2', 'label'=>'Cidade',       'required'=>true],
                ['type'=>'text',     'name'=>'estado',     'class'=>'col-1', 'label'=>'Estado',       'required'=>true],
                ['type'=>'text',     'name'=>'rua',        'class'=>'col-4', 'label'=>'Rua'],
                ['type'=>'text',     'name'=>'bairro',     'class'=>'col-2', 'label'=>'Bairro'],
                ['type'=>'text',     'name'=>'numero',     'class'=>'col-2', 'label'=>'Número'],
                ['type'=>'text',     'name'=>'telefone1',  'class'=>'col-2', 'label'=>'Telefone - 1', 'required'=>true],
                ['type'=>'text',     'name'=>'telefone2',  'class'=>'col-2', 'label'=>'Telefone - 2'],
                ['type'=>'text',     'name'=>'site',       'class'=>'col-3', 'label'=>'Site'],
                ['type'=>'email',    'name'=>'email',      'class'=>'col-3', 'label'=>'Email',        'required'=>true],
                ['type'=>'text',     'name'=>'cnpj',       'class'=>'col-2', 'label'=>'Cnpj',         'required'=>true],
                ['type'=>'readonly', 'name'=>'created_at', 'class'=>'col-3', 'label'=>'Criado em:'],
                ['type'=>'readonly', 'name'=>'updated_at', 'class'=>'col-3', 'label'=>'Atualizado em:'],
            ]
        ];
        
        return Render::block('form', $dados);
    }
}