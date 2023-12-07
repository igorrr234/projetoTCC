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
    <title>Trigonometria - Aprenda Fácil</title>
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

        <h1><u>Trigonometria</u></h1>
        <li class="aula">
            <a href="../view/razaoTrigonometrica.php">
                <h2>Razões Trigonométricas em Triângulos Retângulos</h2>
                <p>
                    Seno (sen), cosseno (cos) e tangente (tan) são as principais razões trigonométricas em triângulos retângulos. Elas relacionam os comprimentos dos lados de um triângulo com seus ângulos agudos.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/circuloTrigonometrico.php">
                <h2>Círculo Trigonométrico</h2>
                <p>
                    Representação dos ângulos em um círculo unitário para visualizar as funções trigonométricas em termos de coordenadas no círculo.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/funcaoTrigonometrica.php">
                <h2>Funções Trigonométricas</h2>
                <p>
                    Além do seno, cosseno e tangente, as funções trigonométricas incluem cotangente, secante e cosecante. Elas são extensões das razões trigonométricas básicas.</p>
            </a>
        </li>
    </ul>

</body>

</html>