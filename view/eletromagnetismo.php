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
    <title>Eletromagnetismo - Aprenda Fácil</title>
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
        <h1><u>Eletromagnetismo</u></h1>
        <li class="aula">
            <a href="../view/eletrostatica.php">
                <h2>Eletrostática</h2>
                <p>A eletrostática é um ramo fascinante da física que se dedica ao estudo das propriedades das cargas elétricas em repouso. Essa disciplina proporciona os fundamentos necessários para compreender os fenômenos elétricos que ocorrem na ausência de correntes elétricas.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/eletrodinamica.php">
                <h2>Eletrodinâmica</h2>
                <p>A eletrodinâmica é o ramo da física que se dedica ao estudo dos fenômenos elétricos em movimento, ou seja, aqueles relacionados ao fluxo de corrente elétrica. Ao contrário da eletrostática, que lida com cargas elétricas em repouso, a eletrodinâmica aborda os processos dinâmicos associados ao movimento das cargas elétricas através de condutores.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/magnetismo.php">
                <h2>Magnetismo</h2>
                <p>O magnetismo é um fenômeno natural intrigante que envolve a interação entre materiais magnéticos e campos magnéticos. Este fenômeno é governado por princípios fundamentais que abrangem desde os imãs comuns encontrados em nossas vidas diárias até as complexas interações magnéticas em nível atômico.</p>
            </a>
        </li>
    </ul>

</body>

</html>