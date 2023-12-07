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
    <title>Álgebra - Aprenda Fácil</title>
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

        <h1><u>Álgebra</u></h1>
        <li class="aula">
            <a href="../view/equacao.php">
                <h2>Equações 1° Grau</h2>
                <p>Expressões algébricas que afirmam que duas quantidades são iguais (equações).</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/inequacao.php">
                <h2>Inequações 1° Grau</h2>
                <p>Expressões algébricas que afirmam  que uma é maior/menor que a outra (inequações).</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/sistemaLinear.php">
                <h2>Sistemas de Equações Lineares</h2>
                <p>
                    Conjuntos de equações que compartilham variáveis comuns. A solução é um conjunto de valores que satisfaz todas as equações simultaneamente.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/polinomio.php">
                <h2>Polinômios</h2>
                <p>
                    Expressões algébricas que envolvem somas e produtos de variáveis elevadas a potências inteiras.</p>
            </a>
        </li>

    </ul>

</body>

</html>