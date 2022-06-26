<?php 
require "conecta.php";

// Função inserirComentario
function inserirComentario(mysqli $conexao, string $ip, string $nome, string $titulo, string $comentario, int $idPost)
{
$sql = "INSERT INTO comentarios(ip, nome, titulo, comentario, id_post) VALUES('$ip', '$nome', '$titulo', '$comentario', $idPost)";

mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
} //fim inserirComentario

// Função lerTodosOsComentarios
function lerTodosOsComentarios(mysqli $conexao, int $idPost): array
{
    $sql = "SELECT id, data, nome, titulo, comentario FROM comentarios WHERE id_post = $idPost ORDER BY data DESC";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $comentarios = [];
    while ($comentario = mysqli_fetch_assoc($resultado)) {
        array_push($comentarios, $comentario);
    }
    return $comentarios;
}
// fim lerTodosOsComentarios