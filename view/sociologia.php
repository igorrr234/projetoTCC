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
    <title>Sociologia - Aprenda Fácil</title>
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
        <h1><u>Sociologia</u></h1>

        <div class="cursos-disponiveis">

            <div class="curso">
                <a href="../view/cidadania.php"><img src="https://cdn-icons-png.flaticon.com/128/8293/8293662.png" alt="Conteúdo"></a>
                <center>
                    <h3>Cidadania</h3>
                </center>
                <p>Cidadania é a expressão concreta do exercício da democracia. Exercer a cidadania plena é ter direitos civis, políticos e sociais. Expressa a igualdade dos indivíduos perante a lei, pertencendo a uma sociedade organizada.
                </p>
            </div>

            <div class="curso">
                <a href="../view/trabalho.php"><img src="https://cdn-icons-png.flaticon.com/128/9712/9712773.png" alt="Conteúdo"></a>
                <center>
                    <h3>Mundo do trabalho</h3>
                </center>
                <p>Conjunto de fatores que compreende atividade de trabalho, meio ambiente, conhecimentos instituídos e conhecimentos investidos, cul- turas e processos comunicacionais</p>
            </div>
        </div>
    </section>
</body>

</html>