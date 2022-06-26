<?php
require "includes/header.php";
require "includes/funcoes-comentarios.php";

$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isset($_POST['comentar'])) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $ip = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_SPECIAL_CHARS);

    inserirComentario($conexao, $ip, $nome, $titulo, $comentario, $idPost);
    echo "<script>window.opener.location.reload();</script>";
    header("location:post-detalhe.php?id=" . $idPost);
}
?>

<article class="container pt-4">
    <h1 class="text-center display-6">Deixe seu comentário</h1>
    <form action="" method="post">
        <div class="form-group label-float">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Jane Austen" required>
        </div>
        <div class="form-group label-float">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Essa banda é incrível!" required>
        </div>
        <div class="form-group textos">
            <label for="comentario" class="form-label">Comentário:</label>
            <textarea class="form-control" cols="10" rows="5" id="comentario" name="comentario" required></textarea>
        </div>
        <br>
        <button class="btn btn-dark" name="comentar">Enviar Comentário</button>

    </form>
</article>

<?php
require "includes/footer.php";
?>