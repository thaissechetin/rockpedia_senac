<?php 
require "conecta.php";

// Função inserircomentario
function inserircomentario(mysqli $conexao, string $nome, string $titulo, string $comentario)
{
$sql = "INSERT INTO comentarios(nome, titulo, comentario) VALUES('$nome', '$titulo', '$comentario')";

mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); 
} //fim inserircomentario

// Função lerTodosOsComentarios
function lerTodosOsComentarios(mysqli $conexao): array
{
    $sql = "SELECT id, data, nome, titulo, comentario FROM comentarios ORDER BY data DESC";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $comentarios = [];
    while ($comentario = mysqli_fetch_assoc($resultado)) {
        array_push($comentarios, $comentario);
    }
    return $comentarios;
}
// fim lerTodosOsComentarios