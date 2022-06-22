<?php
// verificando se há sessão
if (!isset($_SESSION)) {
    session_start();
}

function verificaAcesso()
{
    // verifica se NÃO EXISTE sessão relacionada ao id do usuário logado
    if (!isset($_SESSION['id'])) {
        //  ele não está logado, então apague sessão e force o usuário a para o login.php
        session_destroy();
        header('location:../login');
        die();
    }
}

// usado na página de login.php
function login(int $id, string $nome, string $email, string $tipo)
{
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['tipo'] = $tipo;
}

// usado nas páginas administrativas quando clicamos em sair
function logout()
{
    session_start();
    session_destroy();
    header('location:../login.php?logout');
    die();
}

function verificaAcessoAdmin()
{
    // se o tipo de usuário logado NÃO FOR ADMIN
    if ($_SESSION['tipo'] != 'admin') {
        // vamos redirecionar ele para a página não autorizado
        header('location:nao-autorizado.php');
        die();
    }
}