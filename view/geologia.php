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
    <title>Geologia - Aprenda Fácil</title>
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
        <h1><u>Geologia</u></h1>
        <li class="aula">
            <a href="../view/placaTectonica.php">
                <h2>Placas Tectônicas</h2>
                <p>
                    As placas tectônicas, peças fundamentais do complexo quebra-cabeça geológico do nosso planeta, desempenham um papel crucial na dinâmica da Terra. Essas gigantescas placas, que compõem a crosta terrestre, não são estruturas estáticas, mas sim partes de um intrincado sistema em constante movimento.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/tipoRocha.php">
                <h2>Tipos de Rochas</h2>
                <p>
                    As rochas, testemunhas silenciosas da longa história geológica da Terra, são classificadas em três principais tipos: ígneas, sedimentares e metamórficas. Cada tipo reflete processos únicos de formação, proporcionando uma narrativa intrigante sobre os eventos que moldaram nosso planeta ao longo de milhões de anos.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/relevo.php">
                <h2>Relevos</h2>
                <p>Os relevos terrestres, moldados por forças geológicas e processos naturais ao longo de milhões de anos, apresentam uma diversidade impressionante, indo desde imponentes montanhas até vastas planícies.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/petroleo.php">
                <h2>Petróleo</h2>
                <p>O petróleo, uma das fontes de energia mais significativas do mundo, desempenha um papel crucial na economia global e na vida cotidiana. Trata-se de um recurso natural fóssil formado ao longo de milhões de anos a partir da decomposição de matéria orgânica, principalmente microorganismos marinhos.</p>
            </a>
        </li>

    </ul>

</body>

</html>