<?php
require "includes/header.php"
?>
<article class="container rock pt-4">
    <div class="quiz-rock">
        <h1 class="text-center display-5"> Quiz RockPedia</h1>
        <h2 class="text-center lead"> Teste seus conhecimentos e veja se você também é uma lenda do Rock! </h2>
        <form id="questionario" name="questionario" method="post" action="resposta.php">
            <h5>1) Qual é o verdadeiro nome do Renato Russo?</h5>
            <p>
                <label>
                    <input type="radio" name="questao1" value="a" /> A) Renato Manfredini</label>
                <br />
                <label>
                    <input type="radio" name="questao1" value="b" /> B) Renato Manfredini Junior</label>
                <br />
                <label>
                    <input type="radio" name="questao1" value="c" /> C) Renato Manfredini Russo</label>
                <br />
                <br />
            <h5>2) Eric Carr e Vinnie Vicent foram músicos de qual banda? </h5>
            <label>
                <input type="radio" name="questao2" value="a" /> A) Metallica</label>
            <br />
            <label>
                <input type="radio" name="questao2" value="b" /> B) Queen</label>
            <br />
            <label>
                <input type="radio" name="questao2" value="c" /> C) Kiss</label>
            <br />
            <br />
            <h5>3) Qual é o nome do primeiro baixista do Metallica? </h5>
            <label>
                <input type="radio" name="questao3" value="a" /> A) Cliff Burton</label>
            <br />
            <label>
                <input type="radio" name="questao3" value="b" /> B) Jason Newsted </label>
            <br />
            <label>
                <input type="radio" name="questao3" value="c" /> C) Robert Trujillo </label>
            <br />
            <br />
            <h5>4) "O concreto já rachou" e "Nunca fomos tão brasileiros" são álbuns de qual banda? </h5>
            <label>
                <input type="radio" name="questao4" value="a" /> A) Legião Urbana</label>
            <br />
            <label>
                <input type="radio" name="questao4" value="b" /> B) Os Paralamas do Sucesso</label>
            <br />
            <label>
                <input type="radio" name="questao4" value="c" /> C) Plebe Rude</label>
            <br />
            <br />
            <h5>5) Ozzy Osbourne, vocalista do Black Sabbath já mordeu um morcego no palco. </h5>
            <label>
                <input type="radio" name="questao5" value="a" /> A) Verdadeiro</label>
            <br />
            <label>
                <input type="radio" name="questao5" value="b" /> B) Falso</label>
            <br />
            <br />
            <h5>6) Bruce Dickinson, além de vocalista do Iron Maiden. também é historiador, esgrimista, empresário, palestrante e piloto comercial. </h5>
            <label>
                <input type="radio" name="questao6" value="a" /> A) Verdadeiro</label>
            <br />
            <label>
                <input type="radio" name="questao6" value="b" /> B) Falso</label>
            <br />
            <br />
            <input type="submit" name="enviar" id="enviar" value="Enviar"/>
        </form>
    </div>
</article>
<?php
require "includes/footer.php"
?>