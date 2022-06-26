<?php
require "includes/header.php";
require "includes/funcoes-posts.php";
$posts = lerTodosOsPosts($conexao);
?>
<article class="container pt-4">
    <div class="row my-1 mx-md-n1">
        <?php foreach ($posts as $post) { ?>
            <div class="col-md-6 my-1 px-md-1">
                <a href="post-detalhe.php?id=<?= $post['id'] ?>" class="card-link">
                    <div class="card h-100 border border-danger">
                        <span class="mask-imagem">
                            <img class="card-img-top" src="imagens/<?= $post['imagem'] ?>" alt="Imagem de destaque do post">
                        </span>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= $post['titulo'] ?></h5>
                            <p class="card-text"><?= $post['descricao'] ?></p>
                            <button class="btn btn-dark mt-auto">Ler mais!</button>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
    <?php require "includes/footer.php"; ?>