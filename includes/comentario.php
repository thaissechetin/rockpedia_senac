<?php
if (isset($_POST['comentar'])) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_SPECIAL_CHARS);

    inserircomentario($conexao, $nome, $titulo, $comentario);
}
?>

<article class="container">
    <h1 class="text-center display-6">Deixe seu comentário aqui</h1>
    <form action="" method="post">
        <div class="form-group label-float">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Jane Austen">
        </div>
        <div class="form-group label-float">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Essa banda é incrível!">
        </div>
        <div class="form-group textos">
            <label for="comentario" class="form-label">Comentário:</label>
            <textarea class="form-control" cols="10" rows="5" id="comentario" name="comentario"></textarea>
        </div>
        <br>
        <button class="btn btn-dark" name="comentar">Enviar Comentário</button>
    </form>
</article>