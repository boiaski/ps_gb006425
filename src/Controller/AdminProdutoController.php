<?php

namespace Petshop\Controller;

use Petshop\Core\Exception;
use Petshop\Model\Marca;
use Petshop\Model\Produto;
use Petshop\View\Render;

class AdminProdutoController
{
    public function listar()
    {
        //alimentando dados para a tabrla de listagem
        $dadosListagem = [];
        $dadosListagem['objeto'] = new Produto;
        $dadosListagem['colunas'] = [
            ['campo'=>'idproduto',   'class'=>'text-center'],
            ['campo'=>'idmarca', 'class'=>'text-center'],
            ['campo'=>'nome'],
            ['campo'=>'tipo',        'class'=>'text-center'],
            ['campo'=>'preco',       'class'=>'text-center'],
            ['campo'=>'created_at',  'class'=>'text-center'],
        ];
        $htmlTabela = Render::block('tabela-admin', $dadosListagem);

        //alimentando dados para a página de clientes
        $dados = [];
        $dados['titulo'] = 'Produtos - Listagem';
        $dados['usuario'] = $_SESSION['usuario'];
        $dados['tabela'] = $htmlTabela;

        Render::back('produtos', $dados);
    }

    public function form($valor)
    {
        //verifica se o parâmetro tem um número e, se for número, é um ID válido
        if(is_numeric($valor)) {
            $objeto = new Produto;
            $resultado = $objeto->find(['idproduto =' => $valor]);
            if(empty($resultado)) {
                redireciona('/admin/produtos', 'danger', 'Link inválido, registro não localizado');
            }
            $_POST = $resultado[0];
            $_POST['preco']        = number_format($_POST['preco'], 2, ',', '');
            $_POST['largura']      = number_format($_POST['largura'], 2, ',', '');
            $_POST['altura']       = number_format($_POST['altura'], 2, ',', '');
            $_POST['profundidade'] = number_format($_POST['profundidade'], 2, ',', '');
            $_POST['peso']         = number_format($_POST['peso'], 2, ',', '');
        }

        //Cria e exibe o formulario
        $dados = [];
        $dados['titulo'] = 'Produtos - Manutenção';
        $dados['formulario'] = $this->renderizaFormulario(empty($_POST));

        Render::back('produtos', $dados);
    }

    public function postForm($valor)
    {
        $objeto = new Produto;

        //se $valor tem um número, carrego os dados do registro informado nele
        if(is_numeric($valor)) {
            if(!$objeto->loadById($valor)) {
                redireciona('/admin/produtos', 'danger', 'Link inválido, registro não localizado');
            }
        }

        try {
            // definindo os campos que tem valores decimais e estão vindo com vírgula no lugar de ponto
            $camposDecimal = ['preco', 'altura', 'largura', 'profundidade', 'peso'];

            $campos = array_change_key_case($objeto->getFields());
            foreach($campos as $campo => $propriedades) {
                if(isset($_POST[$campo])) {
                    //se o campo é tipo DECIMAL, então, trocamos vírgula por ponto
                    if(in_array($campo, $camposDecimal)) {
                        $_POST[$campo] = str_replace(',', '.', $_POST[$campo]);
                    }
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

        redireciona('/admin/produtos', 'success', 'Alterações realizadas com sucesso');
    }

    public function renderizaFormulario($novo)
    {
        $marcasOptions = [];
        $dadosMarcas = (new Marca)->find();
        foreach($dadosMarcas as $m) {
            $marcasOptions[] = ['value'=>$m['idmarca'], 'label'=>$m['marca']];
        }

        $dados = [
            'btn_class' => 'btn btn-warning px-5 my-5',
            'btn_label' => ($novo ? 'Adicionar' : 'Atualizar'),
            'fields' => [
                ['type'=>'readonly', 'name'=>'idproduto', 'class'=>'col-2', 'label'=>'Id. Produto'],
                ['type'=>'text',     'name'=>'nome',      'class'=>'col-6', 'label'=>'Nome do Produto', 'required'=>true],
                ['type'=>'select',   'name'=>'idmarca',   'class'=>'col-2', 'label'=>'Marca', 'required'=>true, 'options'=>$marcasOptions],
                ['type'=>'select',   'name'=>'tipo',      'class'=>'col-2', 'label'=>'Tipo', 'required'=>true, 
                    'options'=>[
                        ['value'=>'Ração',            'label'=>'Ração'],   
                        ['value'=>'Brinquedo',        'label'=>'Brinquedo'],  
                        ['value'=>'Medicamento',      'label'=>'Medicamento'],   
                        ['value'=>'Higiene e Beleza', 'label'=>'Higiene e Beleza']   
                    ]
                ],
                ['type'=>'text', 'name'=>'preco',        'class'=>'col-2', 'label'=>'Preço', 'required'=>true],
                ['type'=>'text', 'name'=>'quantidade',   'class'=>'col-2', 'label'=>'Quantidade', 'required'=>true],
                ['type'=>'text', 'name'=>'largura',      'class'=>'col-2'],
                ['type'=>'text', 'name'=>'altura',       'class'=>'col-2'],
                ['type'=>'text', 'name'=>'profundidade', 'class'=>'col-2'],
                ['type'=>'text', 'name'=>'peso',         'class'=>'col-2'],

                ['type'=>'textarea', 'name'=>'descricao',      'class'=>'col-12', 'label'=>'Descrição', 'rows'=>3],
                ['type'=>'textarea', 'name'=>'especificacoes', 'class'=>'col-12', 'label'=>'Especificações', 'rows'=>3],

                ['type'=>'readonly',     'name'=>'created_at',   'class'=>'col-3', 'label'=>'Criado em:'],
                ['type'=>'readonly',     'name'=>'updated_at',   'class'=>'col-3', 'label'=>'Atualizado em:'],
            ]
        ];
        
        return Render::block('form', $dados);
    }
}