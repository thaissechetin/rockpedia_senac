https://ckeditor.com/ckeditor-4/download/

https://bennettfeely.com/clippy/

# problema 1 - redimensionar as imagens de post-detalhe.php

# problema 2 - achar uma solução melhor para os cards incluidos na index 

# problema 3 - adicionar comentario e incluir a tabela no banco

https://metring.com.br/endereco-ip-em-php;

1 - No Bootstrap:
(apenas e-mail do usuário e mensagem)

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

2- Plugin de comentários do facebook: O próprio Facebook gerencia.
- Entrar na página Facebook por developers;
- Ir em Comentários plugins code generator;
-Pegar o link da página que vc quer colocar o plugins (ex:no nosso projeto, colocar em cada página de post) e na página inicial depois do texto da história do rock;
- Colar no campo URL para comentar;
-Configurar largura e número de comentários (que vc quer que apareça na página);
-Clicar em obter código;
-copiar e colar os códigos;
-Fonte :https://www.youtube.com/watch?v=qEhCmd9DLIo 



3- Pegar IP do visitante no PHP:
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$ip = filter_input(INPUT_SERVER, REMOTE_ADDR,FILTER_VALIDATE_IP);
echo $ip;  //teste//
?>