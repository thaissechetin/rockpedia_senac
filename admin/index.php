<?php
require "../includes/header-admin.php";
?>

<h2 class="h1">Olá, <?= $_SESSION['nome'] ?> !</h2>
<p class="lead">Você está no <b>painel de controle e administração</b> do
  site Microblog e seu <b>nível de acesso</b> é <span class="badge bg-dark"><?= $_SESSION['tipo'] ?></span>.
</p>
<a class="btn btn-outline-dark" href="meu-perfil.php">Meu perfil</a>
<a class="btn btn-outline-dark" href="posts.php">Gerenciar Posts</a>
<?php if ($_SESSION['tipo'] == 'admin') { ?>
  <a class="btn btn-outline-dark" href="usuarios.php">Gerenciar Usuários</a>
<?php } ?>

<?php
require "../includes/footer-admin.php";
?>