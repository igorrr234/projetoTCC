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
    <title>Ecologia - Aprenda Fácil</title>
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

        <h1><u>Ecologia</u></h1>
        <li class="aula">
            <a href="../view/sucessaoEcologica.php">
                <h2>Sucessão Ecológica</h2>
                <p>
                    A sucessão ecológica é um processo dinâmico que descreve as mudanças na composição de espécies em um ecossistema ao longo do tempo. Essas mudanças ocorrem em resposta a eventos como perturbações naturais, incêndios, inundações, ou atividades humanas, e podem resultar na evolução da estrutura e da biodiversidade do ecossistema.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/cicloBiogeoquimico.php">
                <h2>Ciclos Biogeoquímicos</h2>
                <p>
                    Os ciclos biogeoquímicos são processos naturais que envolvem a circulação e reciclagem de elementos químicos essenciais para a vida entre os componentes bióticos (organismos vivos) e abióticos (fatores não vivos) do ecossistema. Esses ciclos desempenham um papel vital na manutenção do equilíbrio ecológico e na sustentabilidade dos ecossistemas. Alguns dos principais ciclos biogeoquímicos incluem o ciclo do carbono, ciclo do nitrogênio, ciclo da água e ciclo do fósforo.</p>
            </a>
        </li>
    </ul>

</body>

</html>