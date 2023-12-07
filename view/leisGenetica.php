<?php

session_start();

include_once('../view/pagina.php')

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/img/a.png">
    <title>Leis de Mendel - Aprenda Fácil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        main a {
            text-decoration: none;
            color: #007BFF;
        }

        main a:hover {
            cursor: pointer;
            color: #6959CD;
        }

        .leiGenetica h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .leiGenetica li {
            margin-bottom: 5px;
        }

        .leiGenetica img {
            width: 70%;
            border-radius: 1%;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .leiGenetica {
            align-items: center;
            justify-content: center;
        }

        .leiGenetica p {
            font-size: 17.5px;
            line-height: 1.35;
            margin-bottom: 10px;
        }

        .leiGenetica h2 {
            font-size: 1.6rem;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .leiGenetica h3 {
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .video h2 {
            margin-bottom: 10px;
        }

        .leiGenetica h5 {
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .video iframe {
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="leiGenetica">
            <h1><u>Leis de Mendel</u></h1>

            <p>As <strong>Leis de Mendel</strong> são um conjunto de fundamentos que explicam o mecanismo da transmissão hereditária durante as gerações.</p>

            <p>Os estudos do monge Gregor Mendel foram a base para explicar os mecanismos de hereditariedade. Ainda hoje, são reconhecidos como uma das maiores descobertas da Biologia. Isso fez com que Mendel fosse considerado o "Pai da Genética".</p>

            <img src="https://images.educamaisbrasil.com.br/content/banco_de_imagens/guia-de-estudo/D/dna-leis-de-mendel-biologia.jpg" alt="" style="width: 75%;">

            <h2>Experimentos de Mendel</h2>

            <p>Para conduzir os seus experimentos, Mendel escolheu as ervilhas-de-cheiro (Pisum sativum). Essa planta é de fácil cultivo, realiza autofecundação, possui um curto ciclo reprodutivo e apresenta muita produtividade.</p>

            <p>A metodologia de Mendel consistiu em realizar cruzamentos entre diversas linhagens de ervilhas consideradas "puras". A planta era considerada pura por Mendel quando após seis gerações ainda apresentava as mesmas características.</p>

            <p>Após encontrar as linhagens puras, Mendel começou a realizar cruzamentos de <strong>polinização cruzada</strong>. O procedimento consistia, por exemplo, de retirar pólen de uma planta com semente amarela e depositá-lo sob o estigma de uma planta com sementes verdes.</p>

            <p>As características observadas por Mendel foram sete: cor da flor, posição da flor no caule, cor da semente, textura da semente, forma da vagem, cor da vagem e altura da planta.</p>

            <p>Ao longo do tempo, Mendel foi realizando diversos tipos de cruzamentos com objetivo de verificar como as características eram herdadas ao longo das gerações.</p>

            <p>Com isso, ele estabeleceu as suas Leis, que também ficaram conhecidas por <strong>Genética Mendeliana</strong>.</p>

            <h2>Leis de Mendel</h2>

            <h3>Primeira Lei de Mendel</h3>

            <p>A <strong>Primeira Lei de Mendel</strong> também recebe o nome de <strong>Lei da Segregação dos Fatores</strong> ou <strong>Moibridismo</strong>. Ela possui o seguinte enunciado:</p>
            <p><strong>“Cada caráter é determinado por um par de fatores que se separam na formação dos gametas, indo um fator do par para cada gameta, que é, portanto, puro”.</strong></p>
            <br>
            <p>Essa Lei determina que cada característica é determinada por dois fatores, que se separam na formação dos gametas.</p>

            <p>Mendel chegou a essa conclusão, quando percebeu que linhagens diferentes, com os diferentes atributos escolhidos, sempre geram sementes puras e sem alterações ao longo das gerações. Ou seja, plantas de sementes amarelas sempre produziam 100% dos seus descendentes com sementes amarelas.</p>

            <p>Assim, os descendentes da primeira geração, denominada de geração F1,eram 100% puros.</p>

            <p>Como todas as sementes geradas eram amarelas, Mendel realizou a autofecundação entre elas. Na nova linhagem, geração F², surgiram sementes amarelas e verdes, na proporção 3:1 (amarelas:verdes).</p>

            <img src="https://static.todamateria.com.br/upload/pr/im/primeiralei1b.jpg" alt="" style="width: 45%;">
            <h5>cruzamentos da Primeira Lei de Mendel</h5>

            <p>Com isso, Mendel concluiu que a cor das sementes era determinada por dois fatores. Um fator era dominante e condiciona sementes amarelas, o outro era recessivo e determina sementes verdes.</p>

            <p>A Primeira Lei de Mendel se aplica para o estudo de uma única característica. Porém, Mendel ainda estava interessado em saber como ocorria a transmissão de duas ou mais características em simultâneo.</p>

            <h2>Segunda Lei de Mendel</h2>

            <p>A Segunda Lei de Mendel também recebe o nome de <strong>Lei da Segregação Independente dos Genes</strong> ou <strong>Diibridismo</strong>. Ela possui o seguinte enunciado:</p>

            <p><strong>“as diferenças de uma característica são herdadas independentemente das diferenças em outras características”.</strong></p>
            <br>
            <p>Nesse caso, Mendel também realizou o cruzamento de plantas com diferentes características. Ele cruzou plantas com sementes amarelas e lisas com plantas de sementes verdes e rugosas.</p>

            <p>Mendel já esperava que a geração F¹ seria composta por 100% de sementes amarelas e lisas, pois essas características apresentam caráter dominante.</p>

            <p>Por isso, fez o cruzamento dessa geração, pois imaginava que iriam surgir sementes verdes e rugosas, e ele estava certo.</p>

            <p>Os genótipos e fenótipos cruzados eram os seguintes:</p>

            <p>• <strong>V_</strong>: Dominante (cor Amarela)</p>
            <p>• <strong>R_</strong>: Dominante (forma Lisa)</p>
            <p>• <strong>vv</strong>: Recessivo (cor Verde)</p>
            <p>• <strong>rr</strong>: Recessivo (forma Rugosa)</p>

            <img src="https://static.todamateria.com.br/upload/er/vi/ervilha1.jpg?auto_optimize=low" alt="" style="width: 45%;">
            <h5>Cruzamentos da Segunda Lei de Mendel</h5>

            <p>Mendel descobriu na geração F² diferentes fenótipos, nas seguintes proporções: 9 amarelas e lisas; 3 amarelas e rugosas; 3 verdes e lisas; 1 verde e rugosa.</p>

            <h2>Biografia de Gregor Mendel</h2>

            <p>Nascido no ano de 1822, em Heinzendorf bei Odrau, na Áustria, <strong>Gregor Mendel</strong> era filho de pequenos e pobres fazendeiros. Por esse motivo, ingressou como noviço no mosteiro de agostiniano da cidade de Brünn em 1843, onde foi ordenado monge.</p>

            <p>Posteriormente, ingressou na Universidade de Viena em 1847. Ali, estudou matemática e ciências, realizando estudos meteorológicos sobre a vida das abelhas e o cultivo de plantas.</p>

            <p>A partir de 1856, iniciou seu experimento procurando explicar as características hereditárias.</p>

            <p>Seu estudo fora apresentado à "Sociedade de História Natural de Brünn", em 1865. Todavia, os resultados não foram compreendidos pela sociedade intelectual da época.</p>

            <p>Mendel morreu em Brünn, em 1884, amargurado por não obter reconhecimento acadêmico de sua obra, a qual só foi valorizada décadas depois.</p>


            <div class="video">
                <h2>Vídeo sobre as Leis De Mendel:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-Vv3USW7iRU?si=CHAd1uFe2n4--BIE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <h3>Veja Também:</h3>
            <li><a href="divisaoCelula.php">Divisão Celular</a></li>


        </div>
    </main>
</body>