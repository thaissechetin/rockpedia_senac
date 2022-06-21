<?php 
require "includes/header.php"
?>

<div class="container">
    <h2 class="text-center">Acesso administrativo</h2>
    <form action="" method="post" id="form-login" name="form-login" class="card">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input class="form-control" type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <i class="fa-solid fa-eye senha1"></i>
            <input class="form-control" type="password" id="senha" name="senha">
        </div>
    </form>
</div>

<?php 
require "includes/footer.php";
?>