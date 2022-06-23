- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2022 às 21:51
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rockpedia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` smallint(6) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `usuario_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `data`, `titulo`, `texto`, `descricao`, `imagem`, `usuario_id`) VALUES
(3, '2022-06-22 16:11:53', 'Conheça a História da Banda Legião Urbana', 'A Legião Urbana surgiu no final de 1982 quando Renato Russo juntou-se a Marcelo Bonfá, Eduardo Paraná&#13;&#10;            (Hoje, Kadu Lambach) e Paulo Guimarães (o `Paulista`). Em 1983, Paulista e Paraná saem e Dado&#13;&#10;            Villa-Lobos assume a guitarra. Herbert Viana e Bi Ribeiro, este último ex-aluno de inglês de Renato em&#13;&#10;            Brasília, integravam a banda Paralamas do Sucesso (que já estava no elenco da EMI-Odeon) e indicaram&#13;&#10;            àquela gravadora a fita demo da nova banda de Brasília. Depois de a gravação chegar às mãos de&#13;&#10;            executivos da EMI-Odeon, a Legião Urbana foi contratada e lançou seu primeiro álbum, em 1985, emplacando&#13;&#10;            em junho daquele ano as canções “Será”, “Ainda é Cedo” e “Geração Coca-Cola”.&#13;&#10;             &#13;&#10;            A&#13;&#10;            Revista Bizz, leitura obrigatória para os amantes da música daquela época,&#13;&#10;            elegia a Legião como a melhor banda e Renato, o melhor cantor daquele ano.&#13;&#10;            Renato Rocha, o `Negrete` entra para a Legião como baixista, pouco antes da&#13;&#10;            gravação do primeiro disco, mas já depois de a banda ter feito os célebres&#13;&#10;            shows no Circo Voador, no Rio de Janeiro, e no Napalm em São Paulo. O maior&#13;&#10;            sucesso foi “Eduardo e Mônica”, que conta a história de dois jovens que se&#13;&#10;            apaixonam apesar dos estilos diferentes de vida. A Legião Urbana divulgava um&#13;&#10;            conteúdo que qualquer jovem brasileiro dos anos 80 compreendia e se identificava.    &#13;&#10;    &#13;&#10;            Em&#13;&#10;            dezembro de 1986, uma grande plateia segue a turnê do álbum que vinha fazendo&#13;&#10;            muito sucesso. Já em 1987 sai o terceiro álbum, Que País É Este, estourando o&#13;&#10;            improvável mega-hit “Faroeste Caboclo”, considerada inicialmente muito grande&#13;&#10;            (nove minutos) para ocupar a faixa radiofônica, o que logo caiu por terra. A&#13;&#10;            música conta a saga do brasileiro João do Santo Cristo, um personagem criado&#13;&#10;            por Renato e que chegou às telonas no ano de 2013, quando a letra foi adaptada&#13;&#10;            para o roteiro do filme homônimo. E depois de muita espera chega às lojas As&#13;&#10;            Quatro Estações, álbum que inicia a fase mais madura da Legião.&#13;&#10;&#13;&#10;                Nove&#13;&#10;            das onze músicas do álbum tocam no rádio e rapidamente o disco se torna o mais&#13;&#10;            vendido da carreira da banda, com quase dois milhões de cópias apenas no ano de&#13;&#10;            lançamento. Já “Vento no Litoral” foi composta por Renato para o ex-namorado&#13;&#10;            americano Scott, quando ele voltou para sua terra natal após morar com ele&#13;&#10;            alguns meses no Brasil. Em 1992 o disco duplo Música Para Acampamentos foi&#13;&#10;            montado pelo próprio Russo e pela EMI, na intenção de suprir os desejos por&#13;&#10;            novidades musicais da banda. E a Legião só entraria em estúdio e lançaria um&#13;&#10;            álbum de inéditas no ano seguinte.&#13;&#10;     &#13;&#10;            Só&#13;&#10;            dois discos solo depois (The Stonewall Celebration Concert e Equilibrio&#13;&#10;            Distante) e em 1996 Renato viria a trabalhar novamente em material inédito da&#13;&#10;            Legião Urbana, meio que “correndo contra o tempo”. Assim surgiram A Tempestade&#13;&#10;            ou O Livro Dos Dias, lançado um mês antes de sua morte, e Uma Outra Estação,&#13;&#10;            primeiro álbum póstumo, editado em 1997. Os álbuns trazem obras como “1º de&#13;&#10;            Julho”, que Renato fez para Cássia Eller quando estava grávida, “Dezesseis” e&#13;&#10;            “A Via Láctea”, essas duas também hits radiofônicos. E resgates como&#13;&#10;            “Clarisse”, que já deveria ter sido lançada antes, mas acabava sempre de fora&#13;&#10;            dos álbuns oficiais.&#13;&#10;&#13;&#10;            O&#13;&#10;            ano de 1998 é marcado pelo lançamento da compilação Mais do Mesmo, uma&#13;&#10;            coletânea com os maiores sucessos da banda.&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;            E os anos 90 foram definitivos para o Legião: Renato Russo, um dos maiores nomes da música brasileira e&#13;&#10;            fundador da banda de rock Legião Urbana, nos deixou no dia 11 de outubro de 1996, aos 36 anos, após&#13;&#10;            complicações decorrentes da Aids. Após sua morte, Dado Villa-Lobos e Marcelo Bonfá decidiram encerrar as&#13;&#10;            atividades da banda.&#13;&#10;       ', 'Conheça a História da Banda Legião Urbana', 'legiao-urbana.jpg', 3),
(4, '2022-06-22 16:19:25', 'Biografia Raul Seixas', 'Gênio, maluco, poeta, músico, inovador, um cara à frente de seu tempo… Há muitas facetas que podem definir o&#13;&#10;            pai do rock brasileiro, Raul Seixas, para os fãs.&#13;&#10;&#13;&#10;            Raul sonhava em ser cantor ou escritor e acabou indo além, unindo as duas formas de manifestações artísticas&#13;&#10;            e conquistando o Brasil.&#13;&#10;&#13;&#10;            Se tornou a figura mais importante da história do rock nacional, um sujeito questionador, místico, irônico e&#13;&#10;            que buscava compreender o mundo além da matéria.&#13;&#10;&#13;&#10;            * Como ele surgiu:&#13;&#10;&#13;&#10;         Nascido em Salvador, no dia 28 de junho de 1945, Raul Santos Seixas veio ao mundo predestinado a ser a&#13;&#10;            eterna Metamorfose Ambulante que revolucionou o rock and roll e colocou muita gente pra pensar.&#13;&#10;&#13;&#10;            Mesmo depois de 30 anos de sua morte, os fãs ainda buscam compreender essa figura icônica e muito respeitada&#13;&#10;            no meio da música.&#13;&#10;&#13;&#10;            A carreira de Raul começou no início da década de 60, quando formou a banda Relâmpagos do Rock, que depois&#13;&#10;            de algumas apresentações e de conquistar visibilidade em Salvador, mudou de nome para Os Panteras.&#13;&#10;            Mesmo com a gravação do primeiro disco, em 1968, Os Panteras não conquistaram o sucesso esperado e Raul&#13;&#10;            começou a passar dificuldades no Rio de Janeiro.&#13;&#10;&#13;&#10;Nesta época ele vivia em Ipanema e ia caminhando até o centro para divulgar seu disco, chegou a passar fome&#13;&#10;            e a sua experiência no Rio serviu de inspiração para a música Ouro de Tolo, que viria a fazer sucesso mais&#13;&#10;            tarde, com o cantor já em carreira solo.&#13;&#10;&#13;&#10;            Vendo que as coisas não estavam indo bem, ele voltou para Salvador e praticamente se trancou no quarto com&#13;&#10;            os livros de filosofia e misticismo.&#13;&#10;&#13;&#10;              * O místico Raul, um eterno buscador&#13;&#10;&#13;&#10;           Boa parte da inspiração de Raul para escrever vinha de seu interesse pelo ocultismo, filosofia, psicologia e&#13;&#10;            pela literatura de forma geral.&#13;&#10;&#13;&#10;            Desde pequeno, se encantou pela biblioteca vasta de seu pai e passava horas trancado dentro do quarto lendo,&#13;&#10;            acabou desenvolvendo até miopia.&#13;&#10;&#13;&#10;Autores como Lao-Tse, Nietzsche, George Orwell, Aldous Huxley e o ocultista Aleister Crowley eram os&#13;&#10;            preferidos do cantor.&#13;&#10;&#13;&#10;            Mas não podemos esquecer do fascínio de Raul pelas figuras de Jesus e do Diabo, que aparecem em diversas de&#13;&#10;            suas composições, como Eu Nasci Há Dez mil Anos Atrás, Fazendo o Que o Diabo Gosta, Rock do Diabo, Al&#13;&#10;            Capone, entre outras. &#13;&#10;&#13;&#10;           * As mulheres na vida de Raul&#13;&#10;&#13;&#10;         Raul teve muitos relacionamentos e se casou cinco vezes, sendo sua primeira esposa a americana Edith Wisner,&#13;&#10;            com que tem uma filha, Simone Andréa Wisner Seixas. Com Glória ele teve outra filha, Scarlet Vaquer Seixas.&#13;&#10;            Ângela Costa, a Kika Seixas, quarta esposa, conheceu Raul em 79 e juntos tiveram uma filha, Vivian Costa&#13;&#10;            Seixas.&#13;&#10;           &#13;&#10;         * A Morte de Raul:&#13;&#10;  Durante sua carreira, Raul teve momentos de altos e baixos por conta do abuso de álcool, lançou cerca de 17&#13;&#10;            discos que tiveram bom destaque, como Novo Aeon, Metrô Linha 743, A Panela do Diabo, O Dia em que a Terra&#13;&#10;            Parou, entre outros.&#13;&#10;&#13;&#10;            Ele faleceu de pancreatite aguda no dia 21 de agosto de 1989, mas deixou um enorme legado para a música e&#13;&#10;            permanece vivo e cultuado pelos fãs.&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;        &#13;&#10;  &#13;&#10;&#13;&#10;             &#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;', 'A Biografia de Raul Seixas', 'raulemarcelo.jpg', 3),
(5, '2022-06-22 16:25:12', 'A origem da banda The Beatles', 'Os Beatles foi formado incialmente em 1957 por John Lennon e seus colegas de escola, Peter Sholton, Eric&#13;&#10;            Griffths, Bill Smith e Rod Davis, em homenagem a escola em que estudaram o nome inicial foi “The&#13;&#10;            Quarrymen”. Ainda em 1957, Paul McCartney foi convidado para integrar a banda e em 1958 George junta-se&#13;&#10;            ao grupo, em 1960 a banda muda para seu, então, famoso nome “The Beatles”.&#13;&#10;Em 1961 os Beatles realizam sua primeira apresentação no The Cavem Club, onde permaneceram tocando até&#13;&#10;            assinarem o contrato com o empresário Brian Epstein, e nesse momento a banda muda de visual, trocando&#13;&#10;            suas roupas casuais por trajes formais e no mesmo ano Ringo Starr é convidado para se tornar baterista&#13;&#10;            da banda, que até o momento não tinha alguém fixo, e em agosto de 1962 a banda realiza sua primeira&#13;&#10;            apresentação com a formação definitiva, George, Paul, John e Ringo.&#13;&#10;', 'Se deleite com a história dessa banda que entrou para o Hall da fama', 'beatles.jpg', 1),
(6, '2022-06-22 16:34:49', 'Black Sabbath e seu trajeto até os dias atuais', 'O Black Sabbath foi formado em 1968 e durante as décadas de sua existência passou por várias&#13;&#10;            transformações. E a primeira delas foi transformar garotos fãs de Beatles em lendas que usavam preto e&#13;&#10;            falavam sobre coisas soturnas o suficiente para criarem o que hoje é o Heavy Metal. Os então estudantes&#13;&#10;            ingleses Geezer Butler, Tony Iommi, Bill War e Ozzy Osbourne fundaram o Polka Tulk Blues Band e depois a&#13;&#10;            banda Earth. Apesar da química entre os músicos e o som que rolava ser bom, havia uma banda com esse&#13;&#10;            nome então eles resolveram mudar o nome para Black Sabbath em 1969, e como o nome da banda, decidiram&#13;&#10;            que o som da banda também deveria ser pesado. O nome foi baseado na própria música chamada “Black&#13;&#10;            Sabbath” composta ainda no tempo do Earth.&#13;&#10;            A partir daí, o Sabbath passou a investir em ideias estranhas, demoníacas, polêmicas, que agradou os&#13;&#10;            jovens da época, embaladas por riffs de guitarra pesados. Com essa ideia, foi lançado no dia das bruxas&#13;&#10;            de 1970 o primeiro álbum da banda, chamado de Black Sabbath. Com músicas como The Wizzard, N.I.B e Black&#13;&#10;            Sabbath, esse foi um disco importante para o desenvolvimento do gênero Heavy Metal.&#13;&#10;*O sucesso em um passe de mágica&#13;&#10;Ainda em 1970, o Sabbath lança “Paranoid” considerado o maior sucesso comercial da banda. Com faixas que&#13;&#10;            abordam temas variados, como política, a guerra do Vietnã , ficção científica e efeitos de abuso de&#13;&#10;            drogas, a banda vendeu cinco mil cópias do disco no dia de lançamento e permaneceu nas paradas por&#13;&#10;            semanas a fio e rendendo uma turnê norte-americana.&#13;&#10;            O Sabbath continua colecionando sucessos, discos e turnês nos dois álbuns seguintes ( um deles, o V.4&#13;&#10;            considerado o melhor disco do Sabbath por muitos). E em 1976, com a banda já exausta de turnês, rotina&#13;&#10;            de estúdio e troca de empresários, o Sabbath lança o disco Techical Ecstasy muito mal recebido por&#13;&#10;            todos, inclusive por Ozzy Osbourne. Nessa época ele já passava por sérios problemas pessoais e com o&#13;&#10;            Sabbath, que culminaria na sua saída no final da década e na entrada de Ronnie James Dio.&#13;&#10;*Era Dio /Gillan&#13;&#10;Em 1980 é lançado Heaven And Hell, com Dio já como vocalista e foi aprovado pelos fãs. E a partir daí&#13;&#10;            começa a dança sabática de cadeiras na banda, pois em 1981, o baterista Bill Ward deixa a banda,&#13;&#10;            entrando Vinnie Appice em seu lugar.&#13;&#10;            Em 1983, o Sabbath lança um disco ao vivo “Live Evil” que causou várias polêmicas, pois Ozzy reclamou de&#13;&#10;            seu vocal não ter sido incluído nas faixas. Além disso, Dio e Iommi se desentenderam por causa da&#13;&#10;            mixagem do disco, o que levou Dio e o baterista Appice a deixar o Sabbath. Para o seu posto, Ian Gillan&#13;&#10;            ( ex- Deep Purple) foi o escolhido, e dizem que ele aceitou a proposta quando estava bêbado. Com essa&#13;&#10;            formação, o “Black Purple”, apelido recebido pelos críticos, lançou um disco mais maduro e consistente,&#13;&#10;            embora não bem aceito, chamado “Born Again” em 1983. Alguns meses depois, Ian Gillan anuncia que o Deep&#13;&#10;            Purple está de volta. Ozzy volta para a banda, mas apenas se apresentou com o Sabbath na formação&#13;&#10;            orginal para o Live Aid em 1985.&#13;&#10;            A segunda metade da década de 80 é mais sombria do que a banda tocava em suas canções. Iommi se sente&#13;&#10;            perdido pressionado a gravar mais um álbum, mas sem vocalista. O americano Ray Gillen entra para o&#13;&#10;            Sabbath em 1987 mas logo sai da banda sem gravar nenhum disco, falecendo de AIDS em 1993. Tony Martin&#13;&#10;            assume os vocais em uma formação que só tem Iommi como membro original do Sabbath. A década de 90 inicia&#13;&#10;            com o disco TYR, sem muita relevância e depois de outras mudanças na formação, Dio retorna aos vocais.&#13;&#10;Em 1992 houve uma reunião meio bizarra de antigos membros do Sabbath quando, durante sua turnê de&#13;&#10;            arrependimento da aposentadoria “Retirement Sucks”, pediu para o BS ser a banda de abertura. Dio não&#13;&#10;            aceitou o pedido, mas o Sabbath tocou mesmo assim, sem ele nos vocais, que foi substituído por Rob&#13;&#10;            Halford,do Judas Priest.&#13;&#10;            Em 1997 Ozzy cria o festival Ozzfest, que reuniu a formação original do Sabbath de novo. Após o&#13;&#10;            festival, em 1998 sai o álbum Reunion e nos anos 2000 o feito do Ozzfest foi repetido, mas sem&#13;&#10;            esperanças de que Ozzy assumiria os vocais.&#13;&#10;            Os anos 2000 seguiram com mudanças, brigas, Ozzy processando Iommi pelo uso da marca Black Sabbath, Dio&#13;&#10;            envolvido com o Heaven and Hell e a introdução ao Rock N Roll Hall Of Fame.&#13;&#10;Após a morte de Ronnie James Dio em 2010, diversas homenagens foram feitas ao vocalista e depois das&#13;&#10;            brigas judiciais entre Ozzy e Iommi, Ozzy começa a declarar uma possível reunião da banda. Em paralelo à&#13;&#10;            tudo isso, Iommi descobre um câncer. E após várias reuniões sobre o futuro do Sabbath, o baterista Bill&#13;&#10;            Ward declara que não faria mais parte dos planos da banda. BS resolve seguir sem ele com Tommy Clufetos,&#13;&#10;            baterista da banda de Ozzy Osbourne. Em junho de 2013 foi lançado o álbum 13, que correu com uma turnê&#13;&#10;            mundial , passando inclusive pelo Brasil.&#13;&#10;            Já em 2015 foi anunciada outra turnê mundial, de despedida chamada The End Tour. Ainda e definitivamente&#13;&#10;            sem o baterista Ward, a banda se despediu dos palcos fazendo incríveis shows e inclusive passando pelo&#13;&#10;            Brasil novamente ( Ozzy passou seu aniversário em 03/12 por aqui, já que o show aconteceu dia 04). E&#13;&#10;            exatos dois meses desse show, dia 04 de fevereiro de 2017, o Black Sabbath anuncia o fim de suas&#13;&#10;            atividades, deixando um legado de 49 anos de estrada, milhões de álbuns vendidos, inspiração para bandas&#13;&#10;            de outros subgêneros do Rock, o advento do Heavy Metal e a passagens de músicos brilhantes por toda a&#13;&#10;            trilha histórica da banda.', 'Conheça todos os integrantes e as músicas de sucesso da banda Black Sabbath', 'channels4_profile.jpg', 1),
(7, '2022-06-22 16:37:18', 'Queen a banda que mudou a história do rock', 'O início desta ilustre banda remonta a 1967, quando Brian May, Tim Stafell e Roger Taylor formaram o trio&#13;&#10;            Smile, onde estudavam em Londres. Após a saída de Tim Stafell em 1970, ele apresenta Farrokh Bulsara a&#13;&#10;            May e Taylor e em abril do mesmo ano encontram Freddie Mercury para ser o vocalista da banda e a batizam&#13;&#10;            com o nome “Queen”, em 1971 a banda fica completa quando John Deacon se torna integrante.&#13;&#10; Todos os integrantes compunham, cantavam e tocavam, mas ainda sim foram recusados em diversos testes de&#13;&#10;            produtoras, a carreira dos Queen se inicia de fato em 1973 com o lançamento do álbum que leva o nome da&#13;&#10;            banda, “Queen”, com este álbum inicial a sua assinatura “sem sintetizadores”, que representa um som puro&#13;&#10;            sem alterações.&#13;&#10;            Porém a banda só alcançou o sucesso em seu segundo álbum, em 1974, “Queen II”, foi o quinto álbum mais&#13;&#10;            vendido no Reino Unido, no mesmo ano lançaram “Sheer Heart Attack” que se tornou sucesso mundial, em&#13;&#10;            1975 lançam “A Night At The Opera”, considerado o melhor trabalho da carreira deles, este álbum marcou o&#13;&#10;            percurso da banda e definiu um tipo novo de rock, uma fusão de rock com música clássica.&#13;&#10;Em 1991 surgem os primeiros rumores sobre o estado de suade de Freddie, o que foi continuamente negado.&#13;&#10;            Gravaram o álbum “Innuendo”, considerada faixas mais serias e reflexivas segundo a mídia. Em novembro de&#13;&#10;            1991, 12 horas antes de morrer, Freddie Mercury anunciou ao mundo que os boatos sobre sua saúde eram&#13;&#10;            verdadeiros e que ele tinha Aids (SIGA) e morreu aos 45 anos. A banda seguiu realizando vários concertos&#13;&#10;            de tributo, em 1992 o “The Freddie Mercury Tribute Concert”, reuniu os maiores nomes da música como&#13;&#10;            Elton John, Extreme, Guns N’ Roses, George Michael e Metallica, que cantaram os maiores sucessos da&#13;&#10;            banda juntamente com os restantes elementos do grupo.&#13;&#10;            Em 1995, quatro anos após a morte de Freddie é lançado o último álbum da manda, chamada “Made In&#13;&#10;            Heaven”.', 'Conheça as faixas que levaram a banda a ser imortalizada no tempo', 'queen.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` enum('admin','editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(1, 'Izabelle', 'izabelle@gmail.com', '$2y$10$pTxP.WfEi.TenPO/m1y04.W6aJI375ZtYgcJcE1a.1P6j0RX3l6e6', 'admin'),
(2, 'Thaís', 'tais.sech@gmail.com', '$2y$10$JORhexBPNhSeMx4eQI946Oxwmxx5kJsxCK1/Vp1IZm.d4Dli8Izr2', 'admin'),
(3, 'Jpga32', 'pedroganacim@gmail.com', '$2y$10$l47dT3Y3twnd4/ALMszD1.i8RKhGspHG.dSpf3eoZkLVhHh.THSH6', 'admin'),
(4, 'camargo', 'guisafeju@gmail.com', '$2y$10$JcDAinOuAg.gv6Frw5E.yO3/34r9XX5AdO6nZH48wwQwjsmyxdTAi', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posts_usuarios` (`usuario_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


