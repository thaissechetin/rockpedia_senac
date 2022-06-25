<?php
require "../includes/header-admin.php";
require "../includes/funcoes-posts.php";

$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$post = lerUmPost($conexao, $idPost, $_SESSION['id'], $_SESSION['tipo']);

if (isset($_POST['atualizar'])) {
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $texto = filter_input(INPUT_POST, 'editor2');
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
    // logicá de atualização da foto

    // se o campo imagem estiver vazio, singnifica que o usuário não quer trocar de imagem
    if (empty($_FILES['imagem']['name'])) {
        $imagem = $_POST['imagem-existente'];
    } else {
        // caso contrário, pegue a nova imagem e faça upload 
        $imagem = $_FILES['imagem']['name'];
        upload($_FILES['imagem']);
    }
    // e então atualizarPost
    atualizarPost($conexao, $idPost, $_SESSION['id'], $_SESSION['tipo'], $titulo, $texto, $descricao, $imagem);
    header('location:posts.php');
}
?>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

<h2 class="text-center display-4">Atualizar Post</h2>

<form enctype="multipart/form-data" class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

    <div class="form-group label-float">
        <label for="titulo">Título:</label>
        <input class="form-control" type="text" id="titulo" name="titulo" value="<?= $post['titulo'] ?>" required>
    </div>

    <div class="form-group textos">
        <label for="texto">Texto:</label>
        <textarea class="form-control" name="editor2" id="texto" cols="50" rows="10" required><?= $post['texto'] ?></textarea>
    </div>

    <div class="form-group textos">
        <label for="descricao">Descrição (máximo de 250 caracteres):</label>
        <span id="maximo" class="badge bg-success">0</span>
        <textarea class="form-control" name="descricao" id="descricao" cols="50" rows="3" required maxlength="250"><?= $post['descricao'] ?></textarea>
    </div>

    <div class="form-group label-float">
        <label for="imagem-existente">Imagem:</label>
        <!-- campo somente leitura, meramente informativo -->
        <input class="form-control" type="text" id="imagem-existente" name="imagem-existente" readonly value="<?= $post['imagem'] ?>">
    </div>

    <div class="form-group label-float">
        <label for="imagem" class="form-label">Caso queira mudar, selecione outra imagem:</label>
        <input class="form-control" type="file" id="imagem" name="imagem" accept="image/png, image/jpeg, image/gif, image/svg+xml">
    </div>
    <br>
    <button class="btn btn-dark" name="atualizar">Atualizar post</button>
</form>

<script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor2');
    CKEDITOR.plugins.addExternal('abbr', '/myplugins/abbr/', 'plugin.js');

    // extraPlugins needs to be set too.
    CKEDITOR.replace('editor2', {
        extraPlugins: 'abbr'
    });
    CKEDITOR.replace('editor2', {
        skin: 'moonocolor,/myskins/moonocolor/'
    });
</script>
<?php
require "../includes/footer-admin.php";
?>