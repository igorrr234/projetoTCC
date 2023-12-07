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
    <title>Genética - Aprenda Fácil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .aulas-list {
            list-style-type: none;
            padding: 20;
            margin-top: 35px;
        }


        .aulas-list a {
            color: #333;
            text-decoration: none;
        }

        .aulas-list h1 {
            margin-bottom: 30px;
            text-align: center;
        }

        .aula {
            background-color: #fff;
            margin: 10px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .aula a:hover {
            color: #696969;
        }

        .aula h2 {
            color: #008BFF;
            margin-top: 0;
        }


        .aula p {
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <ul class="aulas-list">

        <h1><u>Genética</u></h1>

        <li class="aula">
            <a href="../view/leisGenetica.php">
                <h2>Leis de Mendel</h2>
                <p>
                    As leis genéticas, formuladas por Gregor Mendel no século XIX, representam os princípios fundamentais que governam a herança genética em organismos. Mendel conduziu seus estudos pioneiros com ervilhas, estabelecendo as bases para a compreensão da transmissão de características de geração em geração.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/aleloGenotipo.php">
                <h2>Alelos e Genótipos</h2>
                <p>A genética mendeliana também abrange o conceito de alelos e genótipos, peças-chave no entendimento da herança genética. Os alelos são variantes alternativas de um gene que podem determinar características específicas de um organismo.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/mutacaoGenetica.php">
                <h2>Mutação Genética</h2>
                <p>
                    A mutação genética é um fenômeno central na genética, representando alterações na sequência de DNA que podem ocorrer naturalmente ou serem induzidas por fatores ambientais. Essas alterações podem ter impactos variados nos organismos, podendo resultar em variações benéficas, neutras ou prejudiciais.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/pleiotropia.php">
                <h2>Pleiotropia</h2>
                <p>
                    A pleiotropia é um fenômeno genético em que um único gene influencia múltiplas características ou fenótipos distintos em um organismo. Em outras palavras, um gene pleiotrópico tem efeitos em diversos aspectos do desenvolvimento ou funcionamento de um organismo, indo além da influência em uma única característica.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/epistasia.php">
                <h2>Epistasia</h2>
                <p>
                    A epistasia é um fenômeno genético em que a expressão de um gene mascara ou modifica os efeitos de outro gene, geralmente localizado em um locus diferente. Em outras palavras, a presença ou a atividade de um gene influencia a maneira como outro gene é expresso, afetando assim a manifestação de determinadas características fenotípicas.</p>
            </a>
        </li>


    </ul>

</body>

</html>