<?php

session_start();

include_once('../view/pagina.php')

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/padrao.css">
    <title>História - Aprenda Fácil</title>
    <link rel="icon" href="../public/img/a.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
        }


        nav ul {
            list-style: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        #conteudo-cursos {
            padding: 40px;
        }

        #conteudo-cursos h1 {
            font-size: 2.3rem;
            margin-bottom: 50px;
            text-align: center;
        }

        .cursos-disponiveis {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 17px;
        }

        .curso {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .curso img {
            width: 80%;
            max-height: 150px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .curso h3 {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        .curso p {
            font-size: 1rem;
        }
    </style>
</head>

<body>

    <section id="conteudo-cursos">
        <h1><u>História</u></h1>

        <div class="cursos-disponiveis">

            <div class="curso">
                <a href="../view/historiaAntiga.php"><img src="../public/img/historiaAntiga.png" alt="Conteúdo"></a>
                <center>
                    <h3>História Antiga</h3>
                </center>
                <p>A História Antiga refere-se ao período que compreende os primeiros registros escritos até a queda do Império Romano do Ocidente, em 476 d.C. Este longo período é marcado por avanços significativos nas civilizações antigas ao redor do mundo.
                <p>
            </div>

            <div class="curso">
                <a href="../view/historiaMedieval.php"><img src="../public/img/historiaMedieval.png" alt="Conteúdo"></a>
                <center>
                    <h3>História Medieval</h3>
                </center>
                <p>A História Medieval compreende o período que se estende aproximadamente do século V ao século XV, marcado por uma série de transformações políticas, sociais, econômicas e culturais na Europa.</p>
            </div>

            <div class="curso">
                <a href="../view/historiaModerna.php"><img src="../public/img/historiaModerna.png" alt="Conteúdo"></a>
                <center>
                    <h3>História Moderna</h3>
                </center>
                <p>
                    A História Moderna abrange o período que se estende aproximadamente do final da Idade Média, no século XV, até o final do século XVIII ou início do século XIX, marcado por mudanças profundas em áreas como política, economia, sociedade e cultura. </p>
            </div>

            <div class="curso">
                <a href="../view/historiaContemporanea.php"><img src="../public/img/historiaContemporanea.png" alt="Conteúdo"></a>
                <center>
                    <h3>História Contemporânea</h3>
                </center>
                <p>A História Contemporânea abrange o período que se inicia no final do século XVIII, com as Revoluções Atlânticas, e continua até os dias atuais. Esta fase é caracterizada por mudanças profundas em várias áreas, como política, economia, sociedade, tecnologia e cultura. </p>
            </div>



        </div>
    </section>
</body>

</html>