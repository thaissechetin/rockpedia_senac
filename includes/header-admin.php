<?php
ob_start();
require "../includes/funcoes-sessao.php";
verificaAcesso();
// detectar quando o sair é acionado
if (isset($_GET['sair'])) {
    logout();
}
// Guardando o nome da página atual
$pagina = basename($_SERVER['PHP_SELF']);
switch ($pagina) {
    case 'index.php':
        $titulo = "Home";
        break;
    case 'meu-perfil.php':
        $titulo = "Perfil";
        break;
    case 'posts.php':
        $titulo = "Posts";
        break;
    case 'post-insere.php':
        $titulo = "Inserir Post";
        break;
    case 'post-atualiza.php':
        $titulo = "Atualizar Post";
        break;
    case 'usuarios.php':
        $titulo = "Usuários";
        break;
    case 'usuario-insere.php':
        $titulo = "Inserir Usuário";
        break;
    default:
        $titulo = "Atualizar Usuário";
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/guitarra.svg" type="image/x-icon">
    <title>Admin | RockPedia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- nosso CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-lg sticky-top bg-danger fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="index.php">Administração</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">RockPedia</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../index.php" target="_blank"><i class="fa-solid fa-lock-open"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="?sair"><i class="fa-solid fa-xmark"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php if ($pagina == 'index.php') { ?>
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                <?php } ?>
                <?php if ($pagina == 'meu-perfil.php') { ?>
                    <li class="breadcrumb-item" aria-current="page"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $titulo ?></li>
                <?php } ?>
                <?php if ($pagina == 'posts.php') { ?>
                    <li class="breadcrumb-item" aria-current="page"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $titulo ?></li>
                <?php } ?>
                <?php if ($pagina == 'post-insere.php') { ?>
                    <li class="breadcrumb-item" aria-current="page"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="posts.php">Posts</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $titulo ?></li>
                <?php } ?>
                <?php if ($pagina == 'post-atualiza.php') { ?>
                    <li class="breadcrumb-item" aria-current="page"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="posts.php">Posts</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $titulo ?></li>
                <?php } ?>
                <?php if ($pagina == 'usuarios.php') { ?>
                    <li class="breadcrumb-item" aria-current="page"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $titulo ?></li>
                <?php } ?>
                <?php if ($pagina == 'usuario-insere.php') { ?>
                    <li class="breadcrumb-item" aria-current="page"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="usuarios.php">Usuário</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $titulo ?></li>
                <?php } ?>
                <?php if ($pagina == 'usuario-atualiza.php') { ?>
                    <li class="breadcrumb-item" aria-current="page"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="usuarios.php">Usuário</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $titulo ?></li>
                <?php } ?>
            </ol>
    </header>
    <main class="container">