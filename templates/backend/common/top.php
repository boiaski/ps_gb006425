<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP, BOOTSTRAP ICONS, FONT-AWESOME ICONS, ANIMATE CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- ANIMATED.CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- CSS PRINCIPAL -->
    <link rel="stylesheet" href="/assets/css/style-sb-admin.css">
    <link rel="stylesheet" href="/assets/css/style-admin.css">
    <!-- SWEET ALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title><?= $titulo??'' ?></title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/admin"><?= $nomesite??'' ?></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search-->
        <form action="/admin/busca" method="POST" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" name="busca" placeholder="Buscar por..." aria-label="Buscar por..." aria-describedby="btnNavbarSearch">
                <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/admin/config">Configurações</a></li>
                    <li><a class="dropdown-item" href="/admin/log">Exibir log</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/logout">Sair</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- EXEMPLO DE TÍTULO DO GRUPO DE LINKS NO MENU -->
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <!-- EXEMPLO DE LINK NO MENU -->
                        <a class="nav-link" href="/admin/dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fs-5"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="/admin/usuarios">
                            <div class="sb-nav-link-icon"><i class="bi bi-person-fill-lock fs-5"></i></div>
                            Usuários
                        </a>
                        <a class="nav-link" href="/admin/clientes">
                            <div class="sb-nav-link-icon"><i class="bi bi-people-fill fs-5"></i></div>
                            Clientes
                        </a>
                        <a class="nav-link" href="/admin/dicas">
                            <div class="sb-nav-link-icon"><i class="bi bi-lightbulb-fill fs-5"></i></div>
                            Dicas
                        </a>
                        <a class="nav-link" href="/admin/marcas">
                            <div class="sb-nav-link-icon"><i class="bi bi-bookmarks-fill fs-5"></i></div>
                            Marcas
                        </a>
                        <a class="nav-link" href="/admin/categorias">
                            <div class="sb-nav-link-icon"><i class="bi bi-card-list fs-5"></i></div>
                            Categorias
                        </a>
                        <a class="nav-link" href="/admin/produtos">
                            <div class="sb-nav-link-icon"><i class="bi bi-tags-fill fs-5"></i></div>
                            Produtos
                        </a>
                        <a class="nav-link" href="/admin/empresas">
                            <div class="sb-nav-link-icon"><i class="bi bi-geo-alt-fill fs-5"></i></div>
                            Empresas
                        </a>
                        <a class="nav-link" href="/admin/fornecedores">
                            <div class="sb-nav-link-icon"><i class="bi bi-building-check fs-5"></i></div>
                            Fornecedores
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logado como:</div>
                    <?= $usuario['nome']??'' ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"><?= $tituloInterno??'' ?></h1>
                    <!-- <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol> -->