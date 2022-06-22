<?php
require "../includes/header-admin.php";
require "../includes/funcoes-posts.php";

$posts = lerPosts($conexao, $_SESSION['id'], $_SESSION['tipo']);
$quantidade = count($posts);
?>

<h2 class="text-center display-4">Posts <span class="badge bg-dark"><?= $quantidade ?></span></h2>
<p class="lead text-right">
    <a class="btn btn-dark" href="post-insere.php">Inserir novo post</a>
</p>

<div class="table-responsive">

    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th>Título</th>
                <th>Data</th>
                <?php if ($_SESSION['tipo'] == 'admin') { ?><th>Autor</th><?php } ?>
                <th colspan="2" class="text-center">Operações</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($posts as $post) {
            ?>
                <tr>
                    <td> <?= $post['titulo'] ?> </td>
                    <td> <?= formataData($post['data']) ?> </td>
                    <?php if ($_SESSION['tipo'] == 'admin') { ?><td> <?= $post['autor'] ?> </td><?php } ?>
                    <td class="text-center">
                        <a class="btn btn-warning btn-sm" href="post-atualiza.php?id=<?= $post['id'] ?>">
                            Atualizar
                        </a>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-danger btn-sm excluir" href="post-exclui.php?id=<?= $post['id'] ?>">
                            Excluir
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>


<?php require "../includes/footer-admin.php"; ?>