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
    <title>Matemática - Aprenda Fácil</title>
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
        <h1><u>Matemática</u></h1>

        <div class="cursos-disponiveis">

            <div class="curso">
                <a href="../view/func.php"><img src="../public/img/funcao.png" alt="Conteúdo"></a>
                <center>
                    <h3>Funções</h3>
                </center>
                <p>As funções matemáticas desempenham um papel fundamental na descrição e modelagem de relações entre variáveis. Em termos simples, uma função é uma regra matemática que associa cada elemento de um conjunto de entrada a um único elemento em um conjunto de saída. </p>
            </div>

            <div class="curso">
                <a href="../view/geom.php"><img src="../public/img/geometria.png" alt="Conteúdo"></a>
                <center>
                    <h3>Geometria</h3>
                </center>
                <p>A geometria é um ramo da matemática que se dedica ao estudo das propriedades e relações do espaço, bem como das figuras e formas que o ocupam. Ela abrange uma variedade de tópicos, desde conceitos básicos, como pontos, linhas e planos, até áreas mais avançadas, como geometria analítica e topologia.</p>
            </div>

            <div class="curso">
                <a href="../view/estatistica.php"><img src="../public/img/estatisticas.png" alt="Conteúdo"></a>
                <center>
                    <h3>Estatística</h3>
                </center>
                <p>A estatística é uma disciplina matemática que lida com a coleta, análise, interpretação, apresentação e organização de dados. É uma ferramenta poderosa para extrair informações detalhadas de conjuntos de dados e torná-la essencial em diversas áreas, incluindo ciências, economia, negócios, saúde, entre outras.</p>
            </div>

            <div class="curso">
                <a href="../view/trigonometria.php"><img src="../public/img/trigonometria.png" alt="Conteúdo"></a>
                <center>
                    <h3>Trigonometria</h3>
                </center>
                <p>A trigonometria é um ramo da matemática que se concentra no estudo das relações entre os ângulos e os lados dos triângulos. Originando-se da palavra grega "trigonon" (triângulo) e "metron" (medida), a trigonometria tem aplicações amplas em diversas áreas, desde a física até a engenharia e a computação.</p>
            </div>
            <div class="curso">
                <a href="../view/algebra.php"><img src="../public/img/algebra.png" alt="Conteúdo"></a>
                <center>
                    <h3>Álgebra</h3>
                </center>
                <p>A álgebra é um ramo da matemática que lida com a representação e manipulação de estruturas abstratas e com a análise das relações entre detalhes e símbolos. Essa área da matemática é essencial em diversas disciplinas e situações práticas. </p>
            </div>
        </div>
    </section>
</body>

</html>