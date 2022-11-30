<?php

/**################ PROCESSANDO AS COLUNAS/TITULOS DA TABELA ######################### */

    //pega as propriedades dos campos do objeto e converte os nomes para minúsculo
    $colunasObjeto = array_change_key_case($objeto->getFields());
    
    //monta o cabeçalho da tabela a partir das informações do objeto
    $htmlColunas = '';
    foreach($colunas as $coluna) {
        $infoColuna = $colunasObjeto[$coluna['campo']];

        $class = $coluna['class'] ?? '';

        $htmlColunas .= <<<HTML
            <th class="{$class}">{$infoColuna['label']}</th>
        HTML;
    }
    $htmlColunas .= '<th class="text-center">Opções</th>';

    /** ################ PROCESSANDO AS LINHAS DE DADOS #########################*/

    //pegar o nome do campo chave da tabela atual
    $campoChave = $objeto->getPkName();
    
    //pega a rota atual para fazer o link de edição
    $rotaAtual = $_SERVER['REQUEST_URI'];
    
    //pegar todos os registros cadastrados nesta tabela/objeto
    $rows = $objeto->find();

    //montando as linhas de dados da tabela
    $htmlLinhas = '';
    foreach($rows as $row) {
        $htmlLinhas .= '<tr>';

        foreach($colunas as $coluna) {
            $class = $coluna['class'] ?? '';
            $valorColuna = $row[$coluna['campo']];

            $htmlLinhas .= "<td class='{$class}'>{$valorColuna}</td>";
        }

        //criando botão de editar
        $valorChave = $row[$campoChave];
        $linkEdicao = "{$rotaAtual}/{$valorChave}";
        $htmlLinhas .= <<<HTML
            <td class="text-center">
                <a href="{$linkEdicao}" class="text-danger" title="Editar registro">
                    <i class="bi bi-pencil-square"></i>
                </a>
            </td>  
        HTML;

        $htmlLinhas .= '</tr>';
    }
?>
<div class="text-end mb-2">
    <a href="<?= $rotaAtual?>/add" class="btn btn-danger">
        <i class="bi bi-plus-circle"> Novo Registro</i>
    </a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-middle">
        <thead>
            <tr>
                <?=$htmlColunas?>
            </tr>
        </thead>
        <tbody>
            <?=$htmlLinhas?>
        </tbody>
        <tfoot>
            <tr>
                <td class="text-end" colspan="<?=count($colunas)+1?>">
                    Total de registros encontrados: <strong><?=count($rows)?></strong>
                </td>
            </tr>
        </tfoot>
    </table>
</div>