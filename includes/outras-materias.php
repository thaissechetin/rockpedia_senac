<?php
require "funcoes-posts.php";
$posts = lerTodosOsPosts($conexao);
?>
<div id="slider">
    <?php foreach ($posts as $post) { ?>
        <div class="card">
            <img class="card-img-top" src="imagens/<?= $post['imagem'] ?>" alt="Imagem de destaque do post">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= $post['titulo'] ?></h5>
                <p class="card-text"><?= $post['descricao'] ?></p>
                <a href="post-detalhe.php?id=<?= $post['id'] ?>" class="btn btn-dark mt-auto">Ler mais!</a>
            </div>
        </div>
    <?php } ?>
</div>
</main>