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
    <title>Geometria Plana - Aprenda Fácil</title>
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
            <h1><u>Geometria Plana</u></h1>
            <h2>O que é Geometria Plana?</h2>

            <p>A <a href="">geometria plana</a> ou <a href="">euclidiana</a> é a parte da matemática que estuda as figuras que não possuem volume.</p>

            <p>A geometria plana também é chamada de euclidiana, uma vez que seu nome representa uma homenagem ao geômetra Euclides de Alexandria, considerado o “pai da geometria”.</p>

            <p>Curioso notar que o termo geometria é a união das palavras “geo” (terra) e “metria” (medida); assim, a palavra geometria significa a "medida de terra".</p>

            <h2>Conceitos de Geometria Plana</h2>

            <p>Alguns conceitos são de suma importância para o entendimento da geometria plana, a saber:</p>


            <h3>Ponto</h3>

            <p>Conceito adimensional, uma vez que não possui dimensão. Os pontos determinam uma localização e são indicados com letras maiúsculas.</p>

            <h3>Reta</h3>

            <p>A <a href="">reta</a>, representada por letra minúscula, é uma linha ilimitada unidimensional (possui o comprimento como dimensão) e pode se apresentar em três posições:</p>

            <p>- <strong>horizontal</strong></p>
            <p>- <strong>vertical</strong></p>
            <p>- <strong>inclinada</strong></p>


            <h3>Segmento de Reta</h3>

            <p>Diferente da reta, o <a href="">segmento de reta</a> é limitado pois corresponde a parte entre dois pontos distintos.</p>

            <p>A semirreta é limitada somente num sentido, visto que possui início e não possui fim.</p>

            <h3>Plano</h3>

            <p>Corresponde a uma superfície plana bidimensional, ou seja, possui duas dimensões: comprimento e largura. Nessa superfície que se formam as figuras geométricas.</p>

            <h3>Ângulos</h3>

            <p>Os <a href="">ângulos</a> são formados pela união de dois segmentos de reta, a partir de um ponto comum, chamado de vértice do ângulo. São classificados em:</p>

            <p>- <strong>ângulo reto (Â = 90º)</strong></p>
            <p>- <strong>ângulo agudo (0º)</strong></p>
            <p>- <strong>ângulo obtuso (90º)</strong></p>


            <h3>Área</h3>

            <p>A área de uma figura geométrica expressa o tamanho de uma superfície. Assim, quanto maior a superfície da figura, maior será sua área.

            </p>
            <h3>Perímetro</h3>

            <p>O perímetro corresponde a soma de todos os lados de uma figura geométrica.</p>


            <h2>Figuras da Geometria Plana</h2>
            <br>
            <h3>Triângulo</h3>


            <img src="https://static.todamateria.com.br/upload/53/99/5399917d3d84d-geometria-plana.jpg" alt="" style="width: 14%;">


            <p><a href="">Polígono</a> (figura plana fechada) de três lados, o triângulo é uma figura geométrica plana formada por três segmentos de reta.</p>

            <p>Segundo a forma dos triângulos, eles são classificados em:</p>


            <p>- <strong>triângulo equilátero: possui todos os lados e ângulos internos iguais (60°);</strong></p>
            <p>- <strong>triângulo isósceles: possui dois lados e dois ângulos internos congruentes;</strong></p>
            <p>- <strong>triângulo escaleno: possui todos os lados e ângulos internos diferentes.</strong></p>



            <p>No tocante aos ângulos que formam os triângulos, eles são classificados em:</p>



            <p>- <strong>triângulo retângulo: possui um ângulo interno de 90°;</strong></p>
            <p>- <strong>triângulo obtusângulo: possui dois ângulos agudos internos, ou seja, menor que 90°, e um ângulo obtuso interno, maior que 90°;</strong></p>
            <p>- <strong>triângulo acutângulo: possui três ângulos internos menores que 90°.</strong></p>

            <h3>Quadrado</h3>

            <img src="https://static.todamateria.com.br/upload/53/99/53999189a5c37-geometria-plana.jpg?auto_optimize=low" alt="" style="width: 17%;">


            <p>Polígono de quatro lados iguais, o quadrado ou quadrilátero é uma figura geométrica plana que possuem os quatro ângulos congruentes: retos (90°).</p>

            <h3>Retângulo</h3>

            <img src="https://static.todamateria.com.br/upload/53/99/53999198113c6-geometria-plana.jpg?auto_optimize=low" alt="" style="width: 28%;">

            <p>Figura geométrica plana marcada por dois lados paralelos no sentido vertical e os outros dois paralelos, no horizontal. Assim, todos os lados do retângulo formam ângulos reto (90°).

            </p>

            <h3>Círculo</h3>


            <img src="https://static.todamateria.com.br/upload/53/99/539998e75405f-geometria-plana.jpg?auto_optimize=low" alt="" style="width: 17%;">

            <p>Figura geométrica plana caracterizada pelo conjunto de todos os pontos de um plano. O raio (r) do círculo corresponde a medida da distância entre o centro da figura até sua extremidade.</p>

            <h3>Trapézio</h3>

            <img src="https://static.todamateria.com.br/upload/53/99/539991bc5da56-geometria-plana.jpg?auto_optimize=low" alt="" style="width: 55%;">

            <p>Chamado de quadrilátero notável, pois a soma dos seus ângulos internos corresponde a 360º, o trapézio é uma figura geométrica plana.</p>

            <p>Ele possui dois lados e bases paralelas, donde uma é maior e outra menor. São classificados em:</p>



            <p>- <strong>trapézio retângulo: possui dois ângulos de 90º;;</strong></p>
            <p>- <strong>trapézio isósceles ou simétrico: os lados não paralelos possuem a mesma medida;</strong></p>
            <p>- <strong>trapézio escaleno: todos os lados de medidas diferentes.</strong></p>


            <h3>Losango</h3>

            <img src="https://static.todamateria.com.br/upload/53/99/5399924d7361f-geometria-plana.jpg?auto_optimize=low" alt="" style="width: 15%;">

            <p>Quadrilátero equilátero, ou seja, formado por quatro lados iguais, o losango, junto com o quadrado e o retângulo, é considerado um <a href="">paralelogramo</a>.</p>

            <p>Ou seja, é um polígono de quatro lados os quais possuem lados e ângulos opostos congruentes e paralelos.</p>

        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>Das figuras geométricas a seguir, marque a alternativa que possui somente figuras planas:</p>

                <p>a) Cubo, triângulo, pirâmide, circunferência.</p>

                <p>b) Quadrado, retângulo, cone, trapézio.</p>

                <p>c) Pentágono, círculo, quadrilátero, triângulo.</p>

                <p>d) Esfera, retângulo, hexágono, prisma.</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: c) Pentágono, círculo, quadrilátero, triângulo.
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>Marcelo comprou um terreno que possui formato de um retângulo, com dimensões de 27 metros de comprimento e 12 metros de largura. Sua irmã Tatiane comprou um terreno com a mesma área, entretanto, com formato quadrado. A medida do lado do terreno da Tatiane é</p>

                <p>a) 15 metros</p>

                <p>b) 16 metros</p>

                <p>c) 17 metros</p>

                <p>d) 18 metros</p>

                <p>e) 19 metros</p>


                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: d) 18 metros
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Veja mais sobre:</h4>
            <br>
            <li><a href="geoespa.php">Geometria Espacial</a></li>
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