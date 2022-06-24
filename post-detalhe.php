<?php
require "includes/header.php";
require "includes/funcoes-posts.php";
$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$post = lerDetalhes($conexao, $idPost);
?>
<div class="container-fluid pt-4">
    <h2 class="text-center display-4"> <?= $post['titulo'] ?> </h2>
    <p class="font-weight-light lead">
        <time>
            <?= formataData($post['data']) ?>
        </time> - <span><?= $post['autor'] ?></span>
    </p>
    <section class="detalhe">
        <img src="imagens/<?= $post['imagem'] ?>" alt="Imagem de destaque do post" class="float-left pr-2 image-fluid">

        <p><?= nl2br($post['texto']) ?></p>
    </section>
</div>
<?php
require "includes/footer.php";
?>