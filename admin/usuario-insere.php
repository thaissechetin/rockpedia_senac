<?php
require "../includes/funcoes-usuarios.php";
require "../includes/header-admin.php";
if (isset($_POST['inserir'])) {
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = codificaSenha($_POST['senha']);
	$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);

	inserirUsuario($conexao, $nome, $email, $senha, $tipo);
	header("location:usuarios.php");
}
?>
<h2 class="text-center display-4">Inserir Usuário</h2>

<form class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

	<div class="form-group label-float">
		<label for="nome">Nome:</label>
		<input class="form-control" type="text" id="nome" name="nome" required>
	</div>

	<div class="form-group label-float">
		<label for="email">E-mail:</label>
		<input class="form-control" type="email" id="email" name="email" required>
	</div>

	<div class="form-group label-float">
		<label for="senha">Senha:</label>
		<input class="form-control" type="password" id="senha" name="senha" required>
	</div>

	<div class="form-group label-float">
		<label for="tipo">Tipo:</label>
		<select class="form-select" name="tipo" id="tipo" required>
			<option value=""></option>
			<option value="editor">Editor</option>
			<option value="admin">Administrador</option>
		</select>
	</div>
	<br>
	<button class="btn btn-dark" id="inserir" name="inserir">Inserir usuário</button>
</form>

<?php
require "../includes/footer-admin.php"
?>