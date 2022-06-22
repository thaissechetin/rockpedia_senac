<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RockPedia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="../js/slick/slick.css">
    <link rel="stylesheet" href="../js/slick/slick-theme.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- nosso CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <div class="pcd">
            <button class="btn-pcd" title="Contraste"><i class="fa-solid fa-circle-half-stroke"></i></button>
            <button class="btn-pcd" id="aumentar" title="Aumentar fonte">A +</button>
            <button class="btn-pcd" id="diminuir" title="Diminuir fonte">A -</button>
        </div>

        <nav class="navbar navbar-light navbar-expand-lg sticky-top bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">RockPedia</a>
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
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="login.php">Login</a>
                            </li>
                        </ul>
                        <form class="d-flex" action="search.php" method="get">
                            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="q">
                            <button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid">