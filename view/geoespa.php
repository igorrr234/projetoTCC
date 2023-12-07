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
    <title>Geometria Espacial - Aprenda Fácil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        main a {
            text-decoration: none;
            color: #007BFF;
        }

        main a:hover {
            cursor: pointer;
            color: #6959CD;
        }

        .geometria {
            align-items: center;
            justify-content: center;
        }

        .geometria h1 {
            text-align: center;
            align-items: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .geometria img {
            display: flex;
            width: 70%;
            border-radius: 3%;
            margin-bottom: 30px;
        }

        .geometria p {
            font-size: 17px;
            line-height: 1.4;
            margin-bottom: 16px;
        }

        .geometria h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .geometria h3 {
            margin-bottom: 10px;
        }

        .exercicio1 a {
            text-decoration: none;
            color: #007BFF;
        }

        .exercicio1 a:hover {
            cursor: pointer;
            color: #6959CD;
        }

        .exercicio1 button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 40px;
            border: none;
            margin-top: 16px;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
        }

        .answer p {
            margin-bottom: 10px;
            color: #007BFF;
        }

        .bbs {
            margin-bottom: 30px;
        }

        .video h2 {
            margin-bottom: 10px;
        }

        .video iframe {
            margin-bottom: 20px;
        }

        .exercicio1 img {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .geometria h5 {
            margin-bottom: 10px;
        }

        .exercicio1 p {
            margin-top: 5px;
            line-height: 1.5;
        }

        .exercicio1 h1 {
            left: 0;
            margin-bottom: 20px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <main>
        <div class="geometria">
            <h1><u>Geometria Espacial</u></h1>
            <h2>O que é Geometria Espacial?</h2>

            <p>A <a href="">Geometria Espacial</a> corresponde a área da matemática que se encarrega de estudar as figuras no espaço, ou seja, aquelas que possuem mais de duas dimensões.</p>
            De modo geral, a Geometria Espacial pode ser definida como o estudo da <strong>geometria no espaço</strong>.</p>

            <p>Assim, tal qual a <strong>Geometria Plana</strong>, ela está pautada nos conceitos basilares e intuitivos que chamamos “<strong>conceitos primitivos</strong>” os quais possuem origem na Grécia Antiga e na Mesopotâmia (cerca de 1000 anos a.C.).</p>

            <p>Pitágoras e Platão associavam o estudo da Geometria Espacial ao estudo da Metafísica e da religião; contudo, foi Euclides a se consagrar com sua obra “Elementos”, onde sintetizou os conhecimentos acerca do tema até os seus dias.</p>

            <p>Entretanto, os estudos de Geometria Espacial permaneceram estanques até o fim da Idade Média, quando Leonardo Fibonacci (1170-1240) escreve a “Practica Geometriae”.</p>

            <p> Séculos depois, Joannes Kepler (1571-1630) rotula o “Steometria” (stereo: volume/metria: medida) o cálculo de volume, em 1615.</p>


            <img src="https://static.mundoeducacao.uol.com.br/mundoeducacao/2020/04/poliedros-imagem-principal.jpg" alt="" style="width: 60%;">


            <h2>Características da Geometria Espacial</h2>

            <p>Dessa forma, a geometria espacial é capaz de determinar, por meio de cálculos matemáticos, o volume destes mesmos objetos, ou seja, o espaço ocupado por eles.</p>

            <p>Contudo, o estudo das estruturas das figuras espaciais e suas inter-relações é determinado por alguns <strong>conceitos básicos</strong>, a saber:</p>


            <p>- <strong>Ponto</strong>: conceito fundamental a todos os subsequentes, uma vez que todos sejam, em última análise, formados por inúmeros pontos. Por sua vez, os pontos são infinitos e não possuem dimensão mensurável (adimensional). Portanto, sua única propriedade garantida é sua localização.</p>
            <p>- <strong>Reta</strong>: composta por pontos, é infinita nos dois lados e determina a distância mais curta entre dois pontos determinados.</p>
            <p>- <strong>Linha</strong>: possui algumas semelhanças com a reta, pois é igualmente infinita para cada lado, contudo, têm a propriedade de formar curvas e nós sobre si mesma.</p>

            <p>- <strong>Plano</strong>: é outra estrutura infinita que se estende em todas as direções.</p>

            <h2>Figuras Geométricas Espaciais</h2>


            <p>Segue abaixo algumas das figuras geométricas espaciais mais conhecidas:</p>


            <h3>Cubo</h3>

            <img src="https://static.todamateria.com.br/upload/53/e3/53e3aab2da0d9-geometria-espacial-medium.jpg" alt="" style="width: 20%;">
            <p>O cubo é um hexaedro regular composto de 6 faces quadrangulares, 12 arestas e 8 vértices sendo:</p>


            <p><strong>Área lateral</strong>: 4a²</p>
            <p><strong>Área total</strong>: 6a²</p>
            <p><strong>Volume</strong>: a.a.a = a³</p>

            <h3>Dodecaedro</h3>

            <img src="https://static.todamateria.com.br/upload/53/e3/53e3aac98e551-geometria-espacial-medium.jpg?auto_optimize=low" alt="" style="width: 30%;">

            <p>O Dodecaedro é um poliedro regular composto de 12 faces pentagonais, 30 arestas e 20 vértices sendo:</p>

            <p><strong>Área total</strong>: 3√25+10√5a²</p>
            <p><strong>Volume</strong>: 1/4 (15+7√5) a³</p>

            <h3>Tetraedro</h3>

            <img src="https://static.todamateria.com.br/upload/53/e3/53e3aaf1a2b0d-geometria-espacial-medium.jpg?auto_optimize=low" alt="" style="width: 30%;">

            <p>O Tetraedro é um poliedro regular composto de 4 faces triangulares, 6 arestas e 4 vértices sendo:</p>


            <p><strong>Área total</strong>: 4a²√3/4</p>
            <p><strong>Volume</strong>: 1/3 Ab.h</p>

            <h3>Octaedro</h3>

            <img src="https://static.todamateria.com.br/upload/53/e3/53e3ab204ab4a-geometria-espacial-medium.jpg?auto_optimize=low" alt="" style="width: 26%;">

            <p>O Octaedro é um poliedro regular de 8 faces formada por triângulos equiláteros, 12 arestas e 6 vértices sendo:</p>


            <p><strong>Área total</strong>:2a²√3</p>
            <p><strong>Volume</strong>: 1/3 a³√2</p>


            <h3>Icosaedro</h3>

            <img src="https://static.todamateria.com.br/upload/53/e3/53e3ab87896bd-geometria-espacial-medium.jpg?auto_optimize=low" alt="" style="width: 30%;">

            <p>O Icosaedro é um poliedro convexo composto de 20 faces triangulares, 30 arestas e 12 vértices sendo:</p>

            <p><strong>Área total</strong>: 5√3a²</p>
            <p><strong>Volume</strong>: 5/12 (3+√5) a³</p>

            <h3>Prisma</h3>

            <img src="https://static.todamateria.com.br/upload/53/e3/53e3abdae6b84-geometria-espacial-medium.jpg?auto_optimize=low" alt="" style="width: 30%;">

            <p>O Prisma é um poliedro composto de duas faces paralelas que formam a base, que por sua vez, podem ser triangular, quadrangular, pentagonal, hexagonal.</p>

            <p>Além das faces o prima é composto de altura, lados, vértices e arestas unidos por paralelogramos. De acordo com sua inclinação, os prismas podem ser retos, aqueles em que a aresta e a base fazem um ângulo de 90º ou os oblíquos compostos de ângulos diferentes de 90º.</p>

            <p><strong>Área da Face</strong>: a.h</p>
            <p><strong>Área Lateral</strong>: 6.a.h</p>
            <p><strong>Área da base</strong>: 3.a³√3/2</p>
            <p><strong>Volume</strong>: Ab.h</p>

            <h3>Pirâmide</h3>

            <img src="https://static.todamateria.com.br/upload/53/e3/53e3ac009c6f4-geometria-espacial-medium.jpg?auto_optimize=low" alt="" style="width: 30%;">

            <p>A pirâmide é um poliedro composto por uma base (triangular, pentagonal, quadrada, retangular, paralelogramo), um vértice (vértice da pirâmide) que une todas as faces laterais triangulares.</p>

            <p>Sua altura corresponde a distância entre o vértice e sua base. Quanto à sua inclinação podem ser classificadas em retas (ângulo de 90º) ou oblíquas (ângulos diferentes de 90º).</p>


            <p><strong>Área total</strong>: Al + Ab</p>
            <p><strong>Volume</strong>: 1/3 Ab.h</p>












        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>Das formas geométricas a seguir, marque a alternativa que possui somente sólidos geométricos:</p>

                <p>a) Cilindro, círculo, cone.</p>

                <p>b) Esfera, quadrado, triângulo.</p>

                <p>c) Pirâmide, cone, prisma.</p>

                <p>d) Circunferência, prisma, pirâmide.</p>

                <p>e) Pirâmide, trapézio, esfera.</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: c) Pirâmide, cone, prisma.
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>Após se aposentar, Kárita decidiu se dedicar mais ao seu hobbie de fazer desenhos e pinturas. Pensando no ambiente em que ela faria os desenhos, ela decidiu reformar um quarto da sua casa, começando pela pintura da parede do teto e das paredes laterais desse cômodo. Sabendo que esse quarto possui formato de um paralelepípedo retângulo com 4 metros de comprimento, 5 metros de largura e 2,5 metros de altura, a medida da área a ser pintada é de:</p>

                <p>a) 48 m²</p>

                <p>b) 52 m²</p>

                <p>c) 60 m²</p>

                <p>d) 65 m²</p>

                <p>e) 72 m²</p>


                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: d) 65 m²
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Veja mais sobre:</h4>
            <br>
            <li><a href="geoespa.php">Geometria Plana</a></li>
            <li><a href="funcaoQuadratica.php">Geometria Analítica</a></li>

        </div>
        </div>
    </main>
</body>


<script>
    function showAnswer1() {
        var answerDiv = document.getElementById("answer1");
        var respost = document.getElementById("respver")
        answerDiv.style.display = "block";
        respost.style.display = "none"
        var hideButton = document.querySelector('.hide-answer-btn1');
        hideButton.style.display = "inline";

    }

    function hideAnswer1() {
        var answerDiv = document.getElementById("answer1");
        var respost = document.getElementById("respver")
        answerDiv.style.display = "none";
        respost.style.display = "block"
        var hideButton = document.querySelector('.hide-answer-btn1');
        hideButton.style.display = "none";


    }

    function showAnswer2() {
        var answerDiv2 = document.getElementById("answer2");
        var respost2 = document.getElementById("respver2")
        answerDiv2.style.display = "block";
        respost2.style.display = "none"
        var hideButton2 = document.querySelector('.hide-answer-btn2');
        hideButton2.style.display = "inline";

    }

    function hideAnswer2() {
        var answerDiv2 = document.getElementById("answer2");
        var respost2 = document.getElementById("respver2")
        answerDiv2.style.display = "none";
        respost2.style.display = "block"
        var hideButton2 = document.querySelector('.hide-answer-btn2');
        hideButton2.style.display = "none";


    }
</script>