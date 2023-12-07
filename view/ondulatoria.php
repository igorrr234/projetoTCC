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
    <title>Ondulatória Aprenda Fácil</title>
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
        <h1><u>Ondulatória</u></h1>
        <li class="aula">
            <a href="../view/ondaMecanica.php">
                <h2>Ondas Mecânicas</h2>
                <p>As ondas mecânicas são perturbações que se propagam através de meios materiais, como sólidos, líquidos ou gases. Diferentemente das ondas eletromagnéticas, que não necessitam de um meio material para se propagarem, as ondas mecânicas requerem um meio para transferir energia. </p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/ondaEletromagnetica.php">
                <h2>Ondas Eletromagnéticas</h2>
                <p>As ondas eletromagnéticas são perturbações oscilantes no campo elétrico e magnético que se propagam através do espaço sem a necessidade de um meio material. Essas ondas são fundamentais para compreender fenômenos como luz, rádio, micro-ondas, infravermelho, ultravioleta, raios X e radiações gama.</p>
            </a>
        </li>
    </ul>

</body>

</html>