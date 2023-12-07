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
    <title>História Antiga - Aprenda Fácil</title>
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
        <h1><u>História Antiga</u></h1>
        <li class="aula">
            <a href="../view/grecia.php">
                <h2>Grécia Antiga</h2>
                <p>
                    A Grécia Antiga é frequentemente considerada o berço da civilização ocidental, deixando um legado duradouro que influencia a cultura, a filosofia, a política e as artes até os dias de hoje. Este período, que se estende aproximadamente do século VIII a.C. ao século IV a.C., foi marcado por realizações notáveis em diversas áreas.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/roma.php">
                <h2>Roma Antiga</h2>
                <p>A Roma Antiga, uma das civilizações mais influentes da história, floresceu por mais de mil anos, deixando um legado que continua a moldar muitos aspectos da sociedade ocidental. Fundada, segundo a lenda, em 753 a.C., a cidade de Roma desenvolveu-se até se tornar a capital de um vasto império que abrangia grande parte da Europa, norte da África e o Oriente Médio.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/egito.php">
                <h2>Egito Antigo</h2>
                <p>O Egito Antigo, uma das civilizações mais antigas e notáveis da história, floresceu ao longo do Vale do Nilo por milênios, deixando um legado duradouro que abrange arte, arquitetura, religião e desenvolvimentos sociais. Esta civilização, que começou por volta de 3100 a.C. com a unificação do Alto e Baixo Egito, perdurou até a conquista pelos persas em 332 a.C.p>
            </a>
        </li>


</body>

</html>