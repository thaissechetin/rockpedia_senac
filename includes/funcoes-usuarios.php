<?php
require "conecta.php";

// Função inserirUsuario
function inserirUsuario(mysqli $conexao, string $nome, string $email, string $senha, string $tipo)
{
    $sql = "INSERT INTO usuarios(nome, email, senha, tipo)
            VALUES('$nome', '$email', '$senha', '$tipo')";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}
// fim inserirUsuario

// Função codificaSenha
function codificaSenha(string $senha): string
{
    return password_hash($senha, PASSWORD_DEFAULT);
}
// fim codificaSenha

// Função lerUsuarios
function lerUsuarios(mysqli $conexao): array
{
    $sql = "SELECT id, nome, email, tipo FROM usuarios ORDER BY nome";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $usuarios = [];
    while ($usuario = mysqli_fetch_assoc($resultado)) {
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}
// fim lerUsuarios

// Função excluirUsuario
function excluirUsuario($conexao, $id)
{
    $sql = "DELETE FROM usuarios WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}
// fim excluirUsuario

// Função lerUmUsuario
function lerUmUsuario(mysqli $conexao, int $id): array
{
    $sql = "SELECT id, nome, email, senha, tipo FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);
}
// fim lerUmUsuario

// Função verificaSenha
function verificaSenha(string $senhaFormulario, string $senhaBanco)
{
    // usamos a password_verify() para comparar as duas senhas: a senha digitada no formulário e a existente no banco de dados
    if (password_verify($senhaFormulario, $senhaBanco)) {
        // se elas forem iguais então significa que o usuário não mudou
        return $senhaBanco;
    } else {
        // mas se forem diferentes, codificamos antes de enviar para o banco
        return codificaSenha($senhaFormulario);
    }
}
// fim verificaSenha

// Função atualizarUsuario
function atualizarUsuario(mysqli $conexao, int $id, string $nome, string $email, string $senha, string $tipo)
{
    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha', tipo = '$tipo' WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}
// fim atualizarUsuario

// Função buscarUsuario
function buscarUsuario(mysqli $conexao, string $email)
{
    $sql = "SELECT id, nome, email, senha, tipo FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);
}
// fim buscarUsuario