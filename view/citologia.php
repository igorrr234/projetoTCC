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
    <title>Citologia - Aprenda Fácil</title>
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

        <h1><u>Citologia</u></h1>
        <li class="aula">
            <a href="../view/teoriaCelular.php">
                <h2>Teoria Celular</h2>
                <p>
                    A teoria celular postula que a célula é a unidade básica da vida, todas as funções vitais ocorrem dentro das células e todas as células vêm de células preexistentes.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/divisaoCelula.php">
                <h2>Divisão Celular</h2>
                <p>
                    Mitose gera células geneticamente idênticas, enquanto a meiose produz células sexuais haploides com variabilidade genética.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/tipoCelula.php">
                <h2>Tipos de Células</h2>
                <p>Células podem ser procarióticas (bactérias e arqueas) ou eucarióticas (animais, plantas, fungos e protistas), com diferenças fundamentais na estrutura e organização.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/estruturaCelula.php">
                <h2>Estrutura Celular</h2>
                <p>
                    Composta por membrana plasmática, citoplasma e, em células eucarióticas, núcleo. Contém diversas organelas como mitocôndrias, retículo endoplasmático e complexo de Golgi.</p>
            </a>
        </li>

    </ul>

</body>

</html>