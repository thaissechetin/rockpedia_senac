<?php
require "funcoes-posts.php";
$posts = lerTodosOsPosts($conexao);
?>
<div class="row my-1 mx-md-n1">
    <?php foreach ($posts as $post) { ?>
        <div class="col-sm-12 col-md-6 col-lg-3 my-1 px-md-1">
            <div class="card">
                <img class="card-img-top" src="imagens/<?= $post['imagem'] ?>" alt="Imagem de destaque do post">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $post['titulo'] ?></h5>
                    <p class="card-text"><?= $post['descricao'] ?></p>
                    <a href="post-detalhe.php?id=<?= $post['id'] ?>" class="btn btn-outline-dark mt-auto">Ler mais!</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
</main>