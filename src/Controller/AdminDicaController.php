<?php

namespace Petshop\Controller;

use Petshop\Core\Exception;
use Petshop\Model\Dica;
use Petshop\View\Render;

class AdminDicaController
{
    public function listar()
    {
        //alimentando dados para a tabela de listagem
        $dadosListagem = [];
        $dadosListagem['objeto'] = new Dica;
        $dadosListagem['colunas'] = [
            ['campo'=>'iddica',  'class'=>'text-center'],
            ['campo'=>'titulo'],
            ['campo'=>'created_at', 'class'=>'text-center'],
        ];
        $htmlTabela = Render::block('tabela-admin', $dadosListagem);

        //alimentando dados para a página de clientes
        $dados = [];
        $dados['titulo'] = 'Dicas - Listagem';
        $dados['usuario'] = $_SESSION['usuario'];
        $dados['tabela'] = $htmlTabela;

        Render::back('dicas', $dados);
    }

    public function form($valor)
    {
        //verifica se o parâmetro tem um número e, se for número, é um ID válido
        if(is_numeric($valor)) {
            $objeto = new Dica;
            $resultado = $objeto->find(['iddica =' => $valor]);
            if(empty($resultado)) {
                redireciona('/admin/dicas', 'danger', 'Link inválido, registro não localizado');
            }
            $_POST = $resultado[0];
        }

        //Cria e exibe o formulario
        $dados = [];
        $dados['titulo'] = 'Dicas - Manutenção';
        $dados['formulario'] = $this->renderizaFormulario(empty($_POST));

        Render::back('dicas', $dados);
    }

    public function postForm($valor)
    {
        $objeto = new Dica;

        //se $valor tem um número, carrego os dados do registro informado nele
        if(is_numeric($valor)) {
            if(!$objeto->loadById($valor)) {
                redireciona('/admin/dicas', 'danger', 'Link inválido, registro não localizado');
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

        redireciona('/admin/dicas', 'success', 'Alterações realizadas com sucesso');
    }

    public function renderizaFormulario($novo)
    {
        $dados = [
            'btn_class' => 'btn btn-warning px-5 mt-5',
            'btn_label' => ($novo ? 'Adicionar' : 'Atualizar'),
            'fields' => [
                ['type'=>'readonly', 'name'=>'iddica',    'class'=>'col-2',  'label'=>'Id. Dica'],
                ['type'=>'text',     'name'=>'titulo',    'class'=>'col-10', 'label'=>'Título da Dica', 'required'=>true],
                ['type'=>'textarea', 'name'=>'descricao', 'class'=>'col-12', 'label'=>'Descrição', 'required'=>true],
                ['type'=>'readonly',     'name'=>'created_at',   'class'=>'col-3', 'label'=>'Criado em:'],
                ['type'=>'readonly',     'name'=>'updated_at',   'class'=>'col-3', 'label'=>'Atualizado em:'],
            ]
        ];
        
        return Render::block('form', $dados);
    }
}