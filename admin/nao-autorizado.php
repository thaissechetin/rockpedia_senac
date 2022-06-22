<?php require "../includes/header-admin.php"; ?>

<article class="jumbotron bg-light shadow">
  <h2 class="display-4 bg-warning rounded text-center">Não autorizado</h2>
  <p class="lead">
    Desculpe <b><?= $_SESSION['nome'] ?></b>, mas você <span class="badge bg-danger">não tem permissão</span> para acessar este recurso.</p>
  <p class="lead">
    <a class="btn btn-dark" href="index.php">Voltar para a página inicial</a>
  </p>
</article>


<?php require "../includes/footer-admin.php"; ?>