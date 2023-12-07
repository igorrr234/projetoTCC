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
    <title>Termodinâmica- Aprenda Fácil</title>
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
        <h1><u>Termodinâmica</u></h1>
        <li class="aula">
            <a href="../view/leisTermodinamica.php">
                <h2>Leis da Termodinâmica</h2>
                <p>
                    As Leis da Termodinâmica são princípios fundamentais que regem as transformações de energia em sistemas termodinâmicos. Elas formam a base para o estudo e compreensão do comportamento térmico da matéria e têm aplicações em diversas áreas da ciência e engenharia. </p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/calorEspecifico.php">
                <h2>Calor Específico e Calor Latente</h2>
                <p>O calor específico e o calor latente são conceitos cruciais na termodinâmica, desempenhando papéis distintos na compreensão de como as substâncias respondem ao calor e como as mudanças de estado ocorrem.</p>
            </a>
        </li>
    </ul>

</body>

</html>