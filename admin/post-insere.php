<?php
require "../includes/header-admin.php";
require "../includes/funcoes-posts.php";

if (isset($_POST['inserir'])) {
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
    // obtendo dados do arquivo enviado
    $imagem = $_FILES['imagem'];
    // função de upload (função responsável por enviar o arquivo para o HD do servidor)
    upload($imagem);
    // função inserir post (atenção, mandaremos apenas o nome da imagem)
    inserirPost($conexao, $titulo, $texto, $descricao, $imagem['name'], $_SESSION['id']);
    header('location:posts.php');
}
?>
<h2 class="text-center display-4">Inserir Post</h2>

<!-- adicionamos o atributo enctype para habilitar o suporte de envio de arquivos via formulário -->
<form enctype="multipart/form-data" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

    <div class="form-group label-float">
        <label for="titulo">Título:</label>
        <input class="form-control" required type="text" id="titulo" name="titulo">
    </div>

    <div class="form-group textos">
        <label for="texto">Texto:</label>
        <textarea class="form-control" required name="texto" id="texto" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group textos">
        <label for="descricao">Descrição (máximo de 250 caracteres):</label>
        <span id="maximo" class="badge bg-danger">0</span>
        <textarea class="form-control" required name="descricao" id="descricao" cols="30" rows="3" maxlength="250"></textarea>
    </div>

    <div class="form-group label-float">
        <label for="imagem" class="form-label">Selecione uma imagem:</label>
        <input required class="form-control" type="file" id="imagem" name="imagem" accept="image/png, image/jpeg, image/gif, image/svg+xml">
    </div>
    <br>
    <button class="btn btn-dark" id="inserir" name="inserir">Inserir post</button>

</form>

<?php require "../includes/footer-admin.php"; ?>