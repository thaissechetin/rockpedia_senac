</main>
<footer class="fixed-bottom">
    <p class="text-center lead">RockPedia | Senac Penha &copy; 2022</p>
</footer>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- nosso script -->
<script src="../js/senha.js"></script>

<?php if ($pagina == 'posts.php' || $pagina == 'usuarios.php') { ?>
    <script src="../js/confirmar-exclusao.js"></script>
<?php } ?>

<?php if ($pagina == 'post-insere.php' || $pagina == 'post-atualiza.php') { ?>
    <script src="../js/contador-de-caracteres.js"></script>
<?php } ?>

</body>

</html>
<?php ob_end_flush(); ?>