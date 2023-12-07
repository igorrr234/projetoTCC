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
    <title>Ciclos Biogeoquímicos - Aprenda Fácil</title>
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

        .ciclo h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .ciclo li {

            margin-bottom: 5px;
        }

        .ciclo img {
            width: 70%;
            border-radius: 1%;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .ciclo {
            align-items: center;
            justify-content: center;
        }

        .ciclo p {
            font-size: 17.5px;
            line-height: 1.35;
            margin-bottom: 10px;
        }

        .ciclo h2 {
            font-size: 1.6rem;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .ciclo h3 {
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .video h2 {
            margin-bottom: 10px;
        }

        .ciclo h5 {
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
        <div class="ciclo">
            <h1><u>Ciclos Biogeoquímicos</u></h1>

            <p>Os <strong>ciclos biogeoquímicos</strong> representam o movimento dos elementos químicos entre os seres vivos e a atmosfera, litosfera e hidrosfera do planeta.</p>


            <img src="https://static.todamateria.com.br/upload/ci/cl/ciclos-biogeoquimicos-og.jpg" alt="" style="width: 55%;">

            <p>A <strong>Biogeoquímica</strong> é a ciência que estuda os processos químicos que ocorrem no planeta, e mais especificamente, dos fluxos de elementos entre eles.</p>

            <p>Os principais ciclos biogeoquímicos são:</p>

            <p>• Ciclo do nitrogênio;</p>
            <p>• Ciclo do carbono;</p>
            <p>• Ciclo do oxigênio;</p>
            <p>• Ciclo do fósforo;</p>
            <p>• Ciclo da água.</p>

            <h2>Como funcionam os ciclos biogeoquímicos?</h2>


            <p>Uma característica fundamental dos ciclos biogeoquímicos é o fato dos componentes bióticos e abióticos estarem intimamente relacionados.</p>

            <p>Os elementos químicos são retirados do ambiente, utilizados pelos organismos e novamente devolvidos à natureza. A vida está continuamente sendo recriada a partir dos mesmos átomos.</p>

            <p>Quando um organismo morre, sua matéria orgânica é degradada pelos seres decompositores, representados por fungos e bactérias. Assim, os átomos que constituíam esse organismo retornam ao ambiente e podem ser novamente incorporados por outros seres vivos para produção de suas substâncias orgânicas.</p>

            <p>Sem essa reciclagem, os átomos de alguns elementos químicos fundamentais para a vida poderiam desaparecer.</p>

            <p>Para que ocorra o ciclo biogeoquímico é necessária a existência de um reservatório do elemento químico. Este reservatório pode ser a crosta terrestre ou a atmosfera. Além disso, são necessários os seres vivos que auxiliam no movimento dos elementos químicos.</p>

            <h2>Classificação dos ciclos biogeoquímicos</h2>

            <p>Os ciclos biogeoquímicos podem ser classificados em dois tipos básicos, conforme a natureza de seu reservatório abiótico:</p>

            <p><strong>Ciclo Gasoso</strong>: Possuem como reservatório a atmosfera. Exemplo: Ciclo do Nitrogênio e Ciclo do Oxigênio.</p>

            <p><strong>Ciclo Sedimentar</strong>: Possuem como reservatório as crosta terrestre. Exemplo: Ciclo do fósforo e Ciclo da Água.</p>

            <p>Os elementos necessários à vida participam dos ciclos biogeoquímicos. São eles: a água, o carbono, o oxigênio, o nitrogênio e o fósforo.</p>




            <div class="video">
                <h2>Vídeo sobre os Ciclos Biogeoquímicos:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/q2nWZskxkvU?si=5wEQ_cGigGrPMQEq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>


            <h3>Veja Também:</h3>
            <li><a href="divisaoCelula.php">Divisão Celular</a></li>
            <li><a href="teoriaCelular.php">Teoria Celular</a></li>
        </div>
    </main>
</body>