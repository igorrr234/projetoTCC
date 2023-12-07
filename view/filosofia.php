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
    <title>Filosofia - Aprenda Fácil</title>
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
            border-radius: 5px;
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
        <h1><u>Filosofia</u></h1>

        <div class="cursos-disponiveis">

            <div class="curso">
                <a href="../view/filosofiaAntiga.php"><img src="https://cdn-icons-png.flaticon.com/128/6776/6776444.png" alt="Conteúdo"></a>
                <center>
                    <h3>Filosofia Antiga</h3>
                </center>
                <p>
                    A filosofia antiga, um período fascinante que abrange desde os primeiros pensadores pré-socráticos até os grandes mestres da Grécia clássica, representa o nascimento do pensamento sistemático e reflexivo na história humana.
                <p>
            </div>

            <div class="curso">
                <a href="../view/filosofiaMedieval.php"><img src="https://cdn-icons-png.flaticon.com/128/4125/4125891.png" alt="Conteúdo"></a>
                <center>
                    <h3>Filosofia Medieval e Renascimento</h3>
                </center>
                <p>A Filosofia Medieval e o Renascimento formam um período rico e complexo, marcado por uma transição fundamental de pensamento que se estende dos séculos V ao XV. </p>
            </div>

            <div class="curso">
                <a href="../view/filosofiaModerna.php"><img src="https://cdn-icons-png.flaticon.com/128/5979/5979239.png" alt="Conteúdo"></a>
                <center>
                    <h3>Filosofia Moderna</h3>
                </center>
                <p>
                    A Filosofia Moderna, que se estende aproximadamente do século XVII ao final do século XVIII, é um período dinâmico e revolucionário na história do pensamento ocidental</p>
            </div>

            <div class="curso">
                <a href="../view/filosofiaContemporanea.php"><img src="https://cdn-icons-png.flaticon.com/128/1354/1354781.png" alt="Conteúdo"></a>
                <center>
                    <h3>Filosofia Contemporânea</h3>
                </center>
                <p>A Filosofia Contemporânea refere-se ao período que se estende do final do século XIX até os dias atuais. </p>
            </div>



        </div>
    </section>
</body>

</html>