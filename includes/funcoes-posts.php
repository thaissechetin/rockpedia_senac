<?php
require "conecta.php";

// Função inserirPost
function inserirPost(mysqli $conexao, string $titulo, string $texto, string $descricao, string $imagem, int $idUsuarioLogado)
{
    $sql = "INSERT INTO posts(titulo, texto, descricao, imagem, usuario_id) VALUES('$titulo', '$texto', '$descricao', '$imagem', $idUsuarioLogado)";

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
} // fim inserirPost



// Função lerPosts
function lerPosts(
    mysqli $conexao,
    int $idUsuarioLogado,
    string $tipoUsuarioLogado
): array {

    /* Se o tipo de usuário for admin */
    if ($tipoUsuarioLogado == 'admin') {
        // traga todos os posts
        $sql = "SELECT posts.id, posts.titulo, posts.data, 
        usuarios.nome AS autor FROM posts INNER JOIN usuarios
        ON posts.usuario_id = usuarios.id ORDER BY data DESC";
    } else {
        // Senão, traga os posts apenas do editor
        $sql = "SELECT id, titulo, data FROM posts 
                WHERE usuario_id = $idUsuarioLogado ORDER BY data DESC";
    }

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $posts = [];
    while ($post = mysqli_fetch_assoc($resultado)) {
        array_push($posts, $post);
    }
    return $posts;
} // fim lerPosts


// Função lerUmPost
function lerUmPost(mysqli $conexao, int $idPost, int $idUsuarioLogado, string $tipoUsuarioLogado): array
{
    // se o usuário for admin, então pode carregar os dados de qualquer post de qualquer usuário
    if($tipoUsuarioLogado == 'admin') {
        $sql = "SELECT titulo, texto, descricao, imagem, usuario_id FROM posts WHERE id =  $idPost";
    } else {
    // se for editor, só poderá carrgar os dados de seus proprios posts
        $sql = "SELECT titulo, texto, descricao, imagem, usuario_id FROM posts WHERE id =  $idPost AND usuario_id = $idUsuarioLogado";
    }
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);
} // fim lerUmPost

// Função atualizaPost
function atualizarPost(mysqli $conexao, int $idPost, int $idUsuarioLogado, string $tipoUsuarioLogado, string $titulo, string $texto, string $descricao, string $imagem)
{
    if($tipoUsuarioLogado == 'admin'){
        $sql = "UPDATE posts SET titulo = '$titulo', texto = '$texto', descricao = '$descricao', imagem = '$imagem' WHERE id = $idPost";
    } else {
        $sql = "UPDATE posts SET titulo = '$titulo', texto = '$texto', descricao = '$descricao', imagem = '$imagem' WHERE id = $idPost AND usuario_id = $idUsuarioLogado";
    }
    
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
} // fim atualizarPost

// Função excluirPost
function excluirPost(mysqli $conexao, int $idPost, int $idUsuarioLogado, string $tipoUsuarioLogado)
{
    if ($tipoUsuarioLogado == 'admin') {
        $sql = "DELETE FROM posts WHERE id = $idPost";
    } else {
        $sql = "DELETE FROM posts WHERE id = $idPost AND usuario_id = $idUsuarioLogado";
    }

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
} // fim excluirPost

/* Funções utilitárias */
function upload(array $arquivo)
{
    // definir os tipos de imagens aceitas
    $tiposValidos = ['image/png', 'image/jpeg', 'image/gif', 'image/svg+xml'];

    // verificando se o arquivo enviado NÃO É um dos aceitos
    if (!in_array($arquivo['type'], $tiposValidos)) {
        die("<script> alert('Formato inválido!'); history.back(); </script>");
    }

    // acessando apenas o nome do arquivo
    $nome = $arquivo['name']; //$_FILES['arquivo']['name'];

    // acessando dados de acesso temporario ao arquivo
    $temporario = $arquivo['tmp_name'];

    // pasta de destino do arquivo que está sendo enviado
    $destino = "../imagens/$nome";

    // se o processo de envio temporario para destino for feito com sucesso, então a função retorna verdadeiro (indicando sucesso no processo)
    if (move_uploaded_file($temporario, $destino)) {
        return true;
    }
} // fim upload

function formataData(string $data):string
{
    // pegamos a data, transformamos em texto e depois aplicamos o formato brasileiro
    return date('d/m/Y H:i', strtotime($data));
} // fim formataData

/*** Funções para a área PÚBLICA do site ***/

// index.php
function lerTodosOsPosts(mysqli $conexao): array
{
    $sql = "SELECT id, titulo, imagem, descricao FROM posts ORDER BY data DESC";

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $posts = [];
    while ($post = mysqli_fetch_assoc($resultado)) {
        array_push($posts, $post);
    }
    return $posts;
} // fim lerTodosOsPosts

//post-detalhe.php
function lerDetalhes(mysqli $conexao, int $idPosts): array
{
    $sql = "SELECT posts.id, posts.titulo, posts.imagem, posts.data, posts.texto, usuarios.nome AS autor FROM posts INNER JOIN usuarios ON posts.usuario_id = usuarios.id WHERE posts.id = $idPosts";

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);
} // fim lerDetalhes

// Search
function busca($conexao, string $termo): array
{
    $sql = "SELECT id, titulo, data, descricao FROM posts WHERE titulo LIKE '%$termo%' OR descricao LIKE '%$termo%' OR texto LIKE '%$termo%' ORDER BY data DESC";

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $posts = [];
    while ($post = mysqli_fetch_assoc($resultado)) {
        array_push($posts, $post);
    }
    return $posts;
} // fim busca