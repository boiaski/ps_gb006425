<?php

namespace Petshop\Controller;

use Petshop\Core\Exception;
use Petshop\Model\Fornecedor;
use Petshop\View\Render;

class AdminFornecedorController
{
    public function listar()
    {
        //alimentando dados para a tabrla de listagem
        $dadosListagem = [];
        $dadosListagem['objeto'] = new Fornecedor;
        $dadosListagem['imagens'] = true;
        $dadosListagem['colunas'] = [
            ['campo'=>'idfornecedor', 'class'=>'text-center'],
            ['campo'=>'razaosocial',  'class'=>'text-center'],
            ['campo'=>'nomefantasia', 'class'=>'text-center'],
            ['campo'=>'telefone1',    'class'=>'text-center'],
            ['campo'=>'created_at',   'class'=>'text-center'],
        ];
        $htmlTabela = Render::block('tabela-admin', $dadosListagem);

        //alimentando dados para a página de clientes
        $dados = [];
        $dados['titulo'] = 'Fornecedores - Listagem';
        $dados['usuario'] = $_SESSION['usuario'];
        $dados['tabela'] = $htmlTabela;

        Render::back('fornecedores', $dados);
    }

    public function form($valor)
    {
        //verifica se o parâmetro tem um número e, se for número, é um ID válido
        if(is_numeric($valor)) {
            $objeto = new Fornecedor;
            $resultado = $objeto->find(['idfornecedor =' => $valor]);
            if(empty($resultado)) {
                redireciona('/admin/fornecedores', 'danger', 'Link inválido, registro não localizado');
            }
            $_POST = $resultado[0];
        }

        //Cria e exibe o formulario
        $dados = [];
        $dados['titulo'] = 'Fornecedores - Manutenção';
        $dados['formulario'] = $this->renderizaFormulario(empty($_POST));

        Render::back('fornecedores', $dados);
    }

    public function postForm($valor)
    {
        $objeto = new Fornecedor;

        //se $valor tem um número, carrego os dados do registro informado nele
        if(is_numeric($valor)) {
            if(!$objeto->loadById($valor)) {
                redireciona('/admin/fornecedores', 'danger', 'Link inválido, registro não localizado');
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

        redireciona('/admin/fornecedores', 'success', 'Alterações realizadas com sucesso');
    }

    public function renderizaFormulario($novo)
    {
        $dados = [
            'btn_class' => 'btn btn-warning px-5 mt-5',
            'btn_label' => ($novo ? 'Adicionar' : 'Atualizar'),
            'fields' => [
                ['type'=>'readonly', 'name'=>'idfornecedor', 'class'=>'col-2', 'label'=>'Id. Fornecedor'],
                ['type'=>'text',     'name'=>'razaosocial',  'class'=>'col-4', 'label'=>'Razão Social', 'required'=>true],
                ['type'=>'text',     'name'=>'nomefantasia', 'class'=>'col-4', 'label'=>'Nome Fantasia', 'required'=>true],
                ['type'=>'text',     'name'=>'telefone1',    'class'=>'col-2', 'label'=>'Telefone - 1', 'required'=>true],
                ['type'=>'text',     'name'=>'telefone2',    'class'=>'col-2', 'label'=>'Telefone - 2'],
                ['type'=>'email',    'name'=>'email',        'class'=>'col-3', 'label'=>'Email',        'required'=>true],
                ['type'=>'text',     'name'=>'contato',      'class'=>'col-2', 'label'=>'Nome do Contato'],
                ['type'=>'readonly', 'name'=>'created_at', 'class'=>'col-3', 'label'=>'Criado em:'],
                ['type'=>'readonly', 'name'=>'updated_at', 'class'=>'col-3', 'label'=>'Atualizado em:'],
            ]
        ];
        
        return Render::block('form', $dados);
    }
}