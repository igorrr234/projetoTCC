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
    <title>História Contemporânea - Aprenda Fácil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .aulas-list {
            margin-top: 35px;
            list-style-type: none;
            padding: 20;
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
            margin-top: 10px;
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
        <h1><u>História Contemporânea</u></h1>
        <li class="aula">
            <a href="../view/revolucaoIndustrial.php">
                <h2>Revolução Industrial</h2>
                <p>
                    A Revolução Industrial, que teve início no final do século XVIII na Inglaterra e se expandiu para outras partes do mundo ao longo do século XIX, foi um período de transformações profundas que impactaram significativamente a sociedade, a economia e a tecnologia.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/revolucaoFrancesa.php">
                <h2>Revolução Francesa </h2>
                <p>A Revolução Francesa, ocorrida entre 1789 e 1799, foi um dos eventos mais marcantes da história moderna, desencadeando profundas transformações sociais, políticas e culturais na França e reverberando em todo o mundo. </p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/revolucaoRussa.php">
                <h2>Revolução Russa</h2>
                <p>
                    A Revolução Russa de 1917 foi um evento transformador que alterou profundamente a estrutura política, social e econômica da Rússia. Marcada por uma série de eventos ao longo do ano, a revolução culminou na derrubada do governo czarista e na ascensão dos bolcheviques ao poder. </p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/segundaGuerra.php">
                <h2>Segunda Guerra Mundial</h2>
                <p>
                    A Segunda Guerra Mundial foi um conflito global que ocorreu entre 1939 e 1945, envolvendo a maioria das nações do mundo, incluindo todas as grandes potências, organizadas em duas alianças principais: os Aliados, liderados por Estados Unidos, União Soviética, Reino Unido, China e outros; e as Potências do Eixo, lideradas por Alemanha, Itália e Japão. </p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/capitalismo.php">
                <h2>Crise de 1929: A Grande Depressão</h2>
                <p>A Grande Depressão foi um período de crise econômica global que teve início em 1929, estendendo-se ao longo da década de 1930.</p>
            </a>
        </li>
    </ul>

</body>

</html>