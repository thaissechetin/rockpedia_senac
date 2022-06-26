<?php
require "includes/header.php";
require "includes/funcoes-posts.php";
require "includes/funcoes-comentarios.php";
$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$post = lerDetalhes($conexao, $idPost);

$comentarios = lerTodosOsComentarios($conexao, $idPost);
?>

<div class="container pt-4">
<div class="row">
    <h2 class="text-center display-4"> <?= $post['titulo'] ?> </h2>
    <p class="font-weight-light lead">
        <time>
            <?= formataData($post['data']) ?>
        </time> - <span><?= $post['autor'] ?></span>
    </p>
        <section class="detalhe col-12">
            <img src="imagens/<?= $post['imagem'] ?>" alt="Imagem de destaque do post" class="float-left pr-2 image-fluid">
        </section>
            <p><?= $post['texto'] ?></p>
    </div>
    <hr>
    <div class="comentar-btn">
        <a href="comentario.php?id=<?= $post['id'] ?>" class="btn btn-dark btn-lg">Inserir Comentário</a>
    </div>
    <br>
    <h1 class="text-center display-6">Comentário de outros leitores</h1>
    <?php foreach ($comentarios as $comentario) { ?>
        <?php if ($comentario['id_post'] = $idPost) { ?>
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
    <?php } ?>
</div>
<?php
require "includes/footer.php";
?>