<?php
    if(empty($cliente)) {
        $opcaoLogin = <<<HTML
            <a href="/login" title="Entrar/Cadastrar" class="d-flex align-items-center lh-1">
                <i class="bi bi-person fs-3 pe-2"></i>
                <span>Entrar<br>Cadastre-se</span>
            </a>
        HTML;
    } else {
        $opcaoLogin = <<<HTML
            <div>
                <i class="bi bi-person fs-3 pe-1"></i>
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Olá <strong>{$cliente['prinome']}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-light">
                    <li><a class="dropdown-item" href="/meus-dados">Minha Conta</a></li>
                    <li><a class="dropdown-item" href="/meus-pedidos">Pedidos</a></li>
                    <li><hr class="dropdown-divider border-light"></li>
                    <li><a class="dropdown-item" href="/logout">Sair</a></li>
                </ul>
            </div>
        HTML;
    }
?>

<!-- hack para o topo não "comer" o conteúdo da página -->
<div style="margin-top: 5.5em">&nbsp;</div>

<div class="topo-site fixed-top">
    <div class="container">
        <div class="topo-site-superior row pt-3 pb-1">
            <div class="col-2 topo-site-logo d-flex align-items-center">
                <a href="/" title="Voltar ao inicio do site">
                    <img src="https://picsum.photos/180/50" width="180" height="50" alt="Logo" class="img-fluid rounded-1">
                </a>
            </div>
            <div class="topo-site-busca col-6">
                <form action="/busca" method="GET" class="position-relative h-100 d-flex align-items-center">
                    <input type="text" name="ps-busca" class="form-control input-busca rounded-5 pe-5">
                    <button type="submit" class="btn-busca"><i class="bi bi-search"></i></button>
                </form>
            </div>
            <div class="topo-site-opcoes col-4 row align-items-center">
                <div class="topo-site-opcoes-usr col-8">
                    <?=$opcaoLogin?>
                </div>
                <div class="col-4 d-flex justify-content-between">
                    <a href="/favoritos" title="Favoritos" class="px-3">
                        <i class="bi bi-box2-heart fs-3"></i>
                    </a>
                    <a href="/carrinho" title="Carrinho de compras" class="px-3">
                        <i class="bi bi-cart-check fs-3"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="topo-site-inferior row ">
            <div class="topo-site-inferior-menu col-2">
                <a data-bs-toggle="offcanvas" href="#offcanvas-menu" aria-controls="offcanvas-menu" class="d-flex align-items-center">
                    <i class="bi bi-list fs-3 pe-1"></i>
                    <span>Departamentos</span>
                </a>
            </div>
            <div class="topo-site-inferior-contatos col-6 row">
                <div class="col-auto d-flex align-items-center">
                    <a href="/nossas-lojas" title="Conheça as nossas lojas">
                        <i class="bi bi-geo-alt pe-1"></i>
                        <span>Nossas Lojas</span>
                    </a>
                </div>
                <div class="col-auto d-flex align-items-center">
                    <a href="/fale-conosco" title="Fale Conosco">
                        <i class="bi bi-envelope-at pe-1"></i>
                        <span>Fale Conosco</span>
                    </a>
                </div>
            </div>
            <div class="topo-site-inferior-fone col-4 d-flex align-items-center justify-content-end">
                <i class="bi bi-headset pe-1"></i>
                <span><?= $telefone1??''?></span>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start rounded-2 m-2" data-bs-scroll="true" tabindex="-1" id="offcanvas-menu" aria-labelledby="offcanvas-menuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvas-menuLabel">Categorias do site</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p>Lista das categorias 1</p>
        <p>Lista das categorias 2</p>
        <p>Lista das categorias 3</p>
    </div>
</div>