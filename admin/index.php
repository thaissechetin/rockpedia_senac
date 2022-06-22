<?php
require "../includes/header-admin.php";
?>
<article class="conteudo">
<h2 class="h1">Olá, <?= $_SESSION['nome'] ?> !</h2>
<p class="lead">Você está no <b>painel de controle e administração</b> do
  site <span class="logo">RockPedia</span> e seu <b>nível de acesso</b> é <span class="badge bg-dark"><?= $_SESSION['tipo'] ?></span>.
</p>
</article>
<article class="btn-conteudo">
<a class="btn btn-outline-dark btn-lg" href="meu-perfil.php">Meu perfil</a>
<a class="btn btn-outline-dark btn-lg" href="posts.php">Gerenciar Posts</a>
<?php if ($_SESSION['tipo'] == 'admin') { ?>
  <a class="btn btn-outline-dark btn-lg" href="usuarios.php">Gerenciar Usuários</a>
<?php } ?>
</article>
<?php
require "../includes/footer-admin.php";
?>