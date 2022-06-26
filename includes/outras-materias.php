<?php
require "funcoes-posts.php";
$posts = lerTodosOsPosts($conexao);
?>
<div id="slider">
    <?php foreach ($posts as $post) { ?>
        <div class="p-1">
            <div class="card border border-danger h-100">
                <a href="post-detalhe.php?id=<?= $post['id'] ?>" class="card-link">
                    <span class="mask-img">
                        <img class="card-img-top" src="imagens/<?= $post['imagem'] ?>" alt="Imagem de destaque do post">
                    </span>
                    <div class="card-body">
                        <h5 class="card-title"><?= $post['titulo'] ?></h5>
                        <p class="card-text"><?= $post['descricao'] ?></p>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>
</div>