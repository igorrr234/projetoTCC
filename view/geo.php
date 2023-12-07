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
    <title>Geografia - Aprenda Fácil</title>
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
        <h1><u>Geografia</u></h1>

        <div class="cursos-disponiveis">

            <div class="curso">
                <a href="../view/geologia.php"><img src="../public/img/geologia.png" alt="Conteúdo"></a>
                <center>
                    <h3>Geologia</h3>
                </center>
                <p>A geologia é a disciplina que estuda a estrutura, composição e história da Terra, fornecendo insights sobre os processos que moldaram e continuam a influenciar nosso planeta. </p>
            </div>

            <div class="curso">
                <a href="../view/geopolitica.php"><img src="../public/img/geopolitica.png" alt="Conteúdo"></a>
                <center>
                    <h3>Geopolítica</h3>
                </center>
                <p>A geopolítica é uma disciplina que analisa as relações de poder entre Estados e as dinâmicas globais que influenciam a política internacional.</p>
            </div>
        </div>
    </section>
</body>

</html>