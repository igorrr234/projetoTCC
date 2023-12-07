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
    <title>Geopolítica - Aprenda Fácil</title>
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
        <h1><u>Geopolítica</u></h1>
        <li class="aula">
            <a href="../view/tigrao.php">
                <h2>Tigres Asiáticos</h2>
                <p>Os Tigres Asiáticos, compreendendo inicialmente Cingapura, Hong Kong, Taiwan e as economias emergentes da Coreia do Sul e Taiwan, representam um fenômeno econômico notável na segunda metade do século XX. Essas nações testemunharam um crescimento econômico extraordinário, transformando-se de economias em desenvolvimento para potências industriais e tecnológicas.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/guerraFria.php">
                <h2>Guerra Fria</h2>
                <p>A Guerra Fria foi um conflito geopolítico e ideológico que se estendeu aproximadamente de meados do século XX, logo após o fim da Segunda Guerra Mundial, até o início da década de 1990, com o colapso da União Soviética. Este período foi marcado pela rivalidade entre os Estados Unidos, apoiando o bloco capitalista, e a União Soviética, líder do bloco socialista.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/blocoEconomico.php">
                <h2>Blocos Econômicos</h2>
                <p>Os blocos econômicos representam uma forma de cooperação e integração entre países, visando promover o comércio, a harmonização de políticas econômicas e o desenvolvimento regional. Essas alianças buscam fortalecer a posição econômica e política de seus membros em um contexto global. </p>
            </a>
        </li>

    </ul>

</body>

</html>