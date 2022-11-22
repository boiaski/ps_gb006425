<?php

namespace Petshop\Controller;

use Petshop\Core\Exception;
use Petshop\Core\FrontController;
use Petshop\Model\Cliente;
use Petshop\View\Render;

class CadastroController extends FrontController
{
    public function cadastro()
    {
        $dados = [];
        $dados['titulo'] = 'Página de Login | Cadastro';
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();
        $dados['formCadastro'] = $this->formCadastro();

        Render::front('cadastro', $dados);
    }

    public function postCadastro()
    {
        try {
        $cliente = new Cliente();
        $cliente->tipo    = $_POST['tipo']    ?? null;
        $cliente->cpfcnpj = $_POST['cpfcnpj'] ?? null;
        $cliente->nome    = $_POST['nome']    ?? null;
        $cliente->email   = $_POST['email']   ?? null;
        $cliente->senha   = $_POST['senha']   ?? null;
        $cliente->save();
        } catch(Exception $e){
            $_SESSION['mensagem'] = [
                'tipo'=>'warning',
                'texto'=>$e->getMessage()
            ];
            $this->cadastro();
        }
    }

    private function formCadastro()
    {
        $dados = [
            'btn_label'=>'Criar linha conta',
            'btn_class'=>'btn btn-success mt-4',
            'fields'=>[
                ['type'=>'radio-inline', 'class'=>'col-6', 'label'=>'Você é pessoa...', 'name'=>'tipo',
                    'options'=>[
                        ['label'=>'Física', 'value'=>'F'],
                        ['label'=>'Jurídica', 'value'=>'J'],
                    ],
                    'required'=>true,
                ],
                ['type'=>'text', 'class'=>'col-6', 'label'=>'Documento', 'name'=>'cpfcnpj', 'required'=>true],
                ['type'=>'text', 'name'=>'nome', 'label'=>'Seu nome completo', 'required'=>true],
                ['type'=>'email', 'name'=>'email', 'label'=>'Seu e-mail', 'required'=>true],
                ['type'=>'password', 'class'=>'col-6', 'name'=>'senha', 'label'=>'Crie uma senha', 'required'=>true],
                ['type'=>'password', 'class'=>'col-6', 'name'=>'senha2', 'label'=>'Confirme a senha', 'required'=>true],
            ]
        ];

        return Render::block('form', $dados);
    }
}