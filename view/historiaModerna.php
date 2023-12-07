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
    <title>História Moderna - Aprenda Fácil</title>
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
        <h1><u>História Moderna</u></h1>
        <li class="aula">
            <a href="../view/renascimento.php">
                <h2>Renascimento</h2>
                <p>
                    O Renascimento foi um período extraordinário na história europeia que se estendeu aproximadamente do século XIV ao século XVII. Este movimento cultural e intelectual marcou uma transição significativa da Idade Média para a era moderna, caracterizando-se por uma redescoberta das artes, ciências, literatura e pensamento crítico.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/iluminismo.php">
                <h2>Iluminismo</h2>
                <p>O Iluminismo foi um movimento intelectual que emergiu nos séculos XVII e XVIII na Europa, marcando uma era de grande otimismo em relação à razão, à ciência e ao progresso. Este período foi caracterizado pelo desejo de questionar tradições, instituições e dogmas, promovendo ideias fundamentais que moldaram os fundamentos do pensamento moderno.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/grandeNavegacao.php">
                <h2>As Grandes Navegações</h2>
                <p>
                    As Grandes Navegações, ocorridas nos séculos XV e XVI, foram uma série de expedições marítimas que tiveram um impacto transformador na história mundial. Impulsionadas por diversos motivos, essas viagens abriram novas rotas marítimas, estabeleceram contatos intercontinentais e contribuíram para a expansão dos impérios europeus.</p>
            </a>
        </li>

    </ul>

</body>

</html>