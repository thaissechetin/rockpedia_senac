<?php
require "includes/header.php";
require "includes/funcoes-posts.php";
$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$post = lerDetalhes($conexao, $idPost);
?>

<h2 class="text-center display-3"> <?= $post['titulo'] ?> </h2>
<p class="font-weight-light lead">
    <time>
        <?= formataData($post['data']) ?>
    </time> - <span><?= $post['autor'] ?></span>
</p>

<img src="imagens/<?= $post['imagem'] ?>" alt="Imagem de destaque do post" class="float-center pr-2 img-fluid">

<p><?= nl2br($post['texto']) ?></p>


<?php
require "includes/footer.php";
?>