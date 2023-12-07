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
    <title>História Medieval- Aprenda Fácil</title>
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
        <h1><u>História Medieval</u></h1>
        <li class="aula">
            <a href="../view/feudalismo.php">
                <h2>Feudalismo</h2>
                <p>
                    O feudalismo foi um sistema social, político e econômico que dominou a Europa medieval, especialmente durante os períodos que se estendem do século IX ao XV. Esse sistema caracterizava-se por relações complexas de vassalagem, terra e deveres, formando uma estrutura hierárquica que moldou a sociedade da época.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/idadeMedia.php">
                <h2>Idade Média</h2>
                <p>A Idade Média, que abrange aproximadamente do século V ao século XV, é um período na história europeia que foi caracterizado por uma série de eventos e transformações significativas. Esta época é frequentemente subdividida em Alta Idade Média (séculos V ao XI) e Baixa Idade Média (séculos XII ao XV).</p>
            </a>
        </li>
        </li>

        <li class="aula">
            <a href="../view/pesteNegra.php">
                <h2>Peste Negra</h2>
                <p>A Peste Negra, uma pandemia devastadora que assolou a Europa durante o século XIV, foi um dos eventos mais impactantes da Idade Média, deixando uma marca indelével na história e na memória coletiva. </p>
            </a>
        </li>

    </ul>

</body>

</html>