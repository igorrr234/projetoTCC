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
    <title>Disciplinas - Aprenda Fácil</title>
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
            margin-bottom: 25px;
            text-align: center;
        }

        .cursos-disponiveis {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 17px;
        }

        .curso {
            background-color: #f9f9f9;
            border: 2px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }

        .curso:hover {
            cursor: pointer;
        }

        .curso img {
            height: 145px;
            width: 90%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 7px;
        }

        .curso p {
            font-size: 1rem;
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
        <h1>Disciplinas</h1>
        <div class="cursos-disponiveis">

            <div class="curso">
                <a href="../view/hist.php"><img src="https://static.todamateria.com.br/img/categories/historia.png" alt="Conteúdo"></a>
                <center>
                    <h3>História</h3>
                </center>
                <p>A história humana é uma narrativa complexa de eventos, culturas e transformações que moldaram o mundo. </p>
            </div>

            <div class="curso">
                <a href="../view/geo.php"><img src="https://static.todamateria.com.br/img/categories/geografia.png" alt="Conteúdo"></a>
                <center>
                    <h3>Geografia</h3>
                </center>
                <p>O estudo da Terra, abrangendo a diversidade de paisagens, clima e fenômenos naturais. </p>
            </div>

            <div class="curso">
                <a href="../view/fisica.php"><img src="https://static.todamateria.com.br/img/categories/fisica.png" alt="Conteúdo"></a>
                <center>
                    <h3>Física</h3>
                </center>
                <p>A ciência que investiga as leis fundamentais do universo, desde partículas subatômicas até a vastidão cósmica.</p>
            </div>

            <div class="curso">
                <a href="../view/mat.php"><img src="https://static.todamateria.com.br/img/categories/matematica.png" alt="Conteúdo"></a>
                <center>
                    <h3>Matemática</h3>
                </center>
                <p>A Matemática é a linguagem universal que desvenda padrões, relações e estruturas abstratas.</p>
            </div>
            <div class="curso">
                <a href="../view/filosofia.php"><img src="https://static.todamateria.com.br/img/categories/filosofia.png" alt="Conteúdo"></a>
                <center>
                    <h3>Filosofia</h3>
                </center>
                <p>A Filosofia é uma disciplina fascinante que nos convida a explorar as fronteiras do pensamento humano.</p>
            </div>
            <div class="curso">
                <a href="../view/sociologia.php"><img src="https://static.todamateria.com.br/img/categories/sociologia.png    " alt="Conteúdo"></a>
                <center>
                    <h3>Sociologia</h3>
                </center>
                <p>A Sociologia é uma das ciências humanas que estuda a sociedade, ou seja, estuda o comportamento humano em função do meio e os processos que interligam os indivíduos em associações, grupos e instituições.</p>
            </div>
            <div class="curso">
                <a href="../view/bio.php"><img src="https://static.todamateria.com.br/img/categories/biologia.png" alt="Conteúdo"></a>
                <center>
                    <h3>Biologia</h3>
                </center>
                <p>Estudar Biologia é uma jornada de descoberta que nos leva desde os processos microscópicos que sustentam a vida até os específicos macroscópicos que moldam ecossistemas inteiros. </p>
            </div>
            <div class="curso">
                <a href="../view/qui.php"><img src="https://static.todamateria.com.br/img/categories/quimica.png" alt="Conteúdo"></a>
                <center>
                    <h3>Química</h3>
                </center>
                <p>A Química é uma ciência que desvenda os segredos da matéria e das transformações que ela pode sofrer. Desde os elementos fundamentais até as moléculas mais complexas.</p>
            </div>
        </div>
    </section>
</body>

</html>