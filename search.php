<?php
require "includes/header.php";
require "includes/funcoes-posts.php";
$termo = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);
$resultado = busca($conexao, $termo);
?>
<article class="container pt-4">
    <h2 class="col-12 font-weight-light">
        Você procurou por <span class="badge bg-dark"><?= $termo ?></span>
        e obteve <span class="badge bg-info"><?= count($resultado) ?> resultados</span>
    </h2>
    <?php foreach ($resultado as $post) { ?>
        <div class="col-12 my-1">
            <article class="card">
                <div class="card-body">
                    <h3 class="card-title font-weight-light"><?= $post['titulo'] ?></h3>
                    <p class="card-text">
                        <time>
                            <?= formataData($post['data']) ?>
                        </time> -
                        <?= $post['descricao'] ?>
                    </p>
                    <a href="post-detalhe.php?id=<?= $post['id'] ?>" class="card-link">Continuar lendo</a>
                </div>
            </article>
        </div>
    <?php } ?>
</article>
<?php
require "includes/footer.php";
?>