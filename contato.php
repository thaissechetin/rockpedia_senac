<?php
require "includes/header.php";
?>

<div class="container pt-3">
    <h3 class="display-6 text-center">Entre em contato com a gente</h3>

    <form id="my-form" action="https://formspree.io/f/meqnwakw" method="post">

        <div class="form-group label-float">
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" id="nome" name="nome" required placeholder="Seu nome">
        </div>

        <div class="form-group label-float">
            <label for="email">E-mail:</label>
            <input class="form-control" type="email" id="email" name="email" required placeholder="Exemplo@gmail.com">
        </div>

        <div class="form-group label-float">
            <label for="telefone">Telefone:</label>
            <input class="form-control" type="tel" id="telefone" name="telefone" required placeholder="(00)1234-56789">
        </div>

        <div class="form-group label-float">
            <label for="assunto">Assunto:</label>
            <select class="form-select" name="assunto" id="assunto" required>
                <option value=""></option>
                <option value="critica">Critíca</option>
                <option value="elogio">Elogio</option>
                <option value="curiosidade">Curiosidade</option>
                <option value="seugestao">Sugestão</option>
            </select>
        </div>

        <div class="form-group textos">
            <label for="mensagem">Mensagem (máximo de 250 caracteres):</label>
            <span id="maximo" class="badge bg-danger">0</span>
            <textarea class="form-control" name="mensagem" id="mensagem" maxlength="250" cols="10" rows="3" required></textarea>
        </div>
        <br>
        <button class="btn btn-dark" id="inserir" name="inserir">Enviar</button>
        <h1 id="my-form-status" class="display-6 text-center"></h1>
    </form>
</div>

<?php
require "includes/footer.php";
?>