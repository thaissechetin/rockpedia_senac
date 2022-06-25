<?php
require "includes/header.php";
require "includes/funcoes-posts.php";
require "includes/funcoes-comentarios.php";
$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$post = lerDetalhes($conexao, $idPost);

$comentarios = lerTodosOsComentarios($conexao)
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
    <hr>
    <h1 class="text-center display-6">Comentário de outros leitores</h1>
    <?php foreach ($comentarios as $comentario) { ?>
        <article class="comentario m-2">
            <div>
                <time>
                    <?= formataData($comentario['data']) ?>
                </time> - <span><?= $comentario['nome'] ?></span>
            </div>
            <div>
                <h5> <?= $comentario['titulo'] ?></h5>
                <p><?= $comentario['comentario'] ?></p>
            </div>
        </article>
    <?php } ?>
    <hr>
    <?php require "includes/comentario.php"; ?>
</div>

<?php
require "includes/footer.php";
?>