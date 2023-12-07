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
    <title>Polinômios - Aprenda Fácil</title>
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

        .polinomio h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .polinomio img {
            width: 70%;
            border-radius: 1%;
            margin-bottom: 15px;
        }

        .polinomio {
            align-items: center;
            justify-content: center;
        }

        .polinomio p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .polinomio h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .polinomio h4 {
            margin-bottom: 10px;
        }


        .exercicio1 button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 40px;
            border: none;
            margin-top: 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
        }

        .answer p {
            color: #007BFF;
        }

        .bbs {
            margin-bottom: 30px;
        }

        .exercicio1 h1 {
            left: 0;
            margin-bottom: 20px;
        }

        .exercicio1 img {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .video h2 {
            margin-bottom: 10px;
        }

        .polinomio h5 {
            margin-bottom: 10px;
        }

        .exercicio1 p {
            margin-top: 5px;
            line-height: 1.5;
        }

        .video iframe {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="polinomio">
            <h1><u>Polinômios</u></h1>
            <h2>O que são Polinômios?</h2>


            <p>Os polinômios são expressões algébricas formadas por números (coeficientes) e letras (partes literais). As letras de um polinômio representam os valores desconhecidos da expressão.</p>

            <h3>Exemplos</h3>


            <p>a) 3ab + 5</p>
            <p>b) x3 + 4xy - 2x2y3</p>
            <p>c) 25x2 - 9y2</p>

            <h2>Monômio, Binômino e Trinômio</h2>
            <p>Os polinômios são formados por termos. A única operação entre os elementos de um termo é a multiplicação.</p>

            <p>Quando um polinômio possui apenas um termo, ele é chamado de monômio.</p>

            <h4>Exemplos</h4>


            <p>a) 3x</p>
            <p>b) 5abc</p>
            <p>c) x2y3z4</p>

            <p>Os chamados binômios são polinômios que possuem somente dois monômios (dois termos), separados por uma operação de soma ou subtração.</p>

            <h4>Exemplos</h4>


            <p>a) a2 - b2</p>
            <p>b) 3x + y</p>
            <p>c) 5ab + 3cd2</p>

            <p>Já os trinômios são polinômios que possuem três monômios (três termos), separados por operações de soma ou subtração.</p>


            <h4>Exemplos</h4>

            <p>a) x2 + 3x + 7</p>
            <p>b) 3ab - 4xy - 10y</p>
            <p>c) m3n + m2 + n4</p>


            <h2>Grau dos Polinômios</h2>



            <p>O grau de um polinômio é dado pelos expoentes da parte literal.</p>

            <p> Para encontrar o grau de um polinômio devemos somar os expoentes das letras que compõem cada termo. A maior soma será o grau do polinômio.</p>

            <h4>Exemplos</h4>

            <p>a) 2x3 + yv

            <p>O expoente do primeiro termo é 3 e do segundo termo é 1. Como o maior é 3, o grau do polinômio é 3.v</p>

            <p>b) 4 x2y + 8x3y3 - xy4</p>



            <p>Vamos somar os expoentes de cada termo:</p>

            <p>4x2y => 2 + 1 = 3</p>
            <p>8x3y3 => 3 + 3 = 6</p>
            <p>xy4 => 1 + 4 = 5</p>


            <p>Como a maior soma é 6, o grau do polinômio é 6</p>

            <p>Obs: o polinômio nulo é aquele que possui todos os coeficientes iguais a zero. Quando isso ocorre, o grau do polinômio não é definido.</p>



            <h2>Operações com Polinômios</h2>

            <p>Confira abaixo exemplos das operações entre polinômios:</p>


            <h3>Adição de Polinômios</h3>

            <p>Fazemos essa operação somando os coeficientes dos termos semelhantes (mesma parte literal).</p>

            <p>(- 7x3 + 5 x2y - xy + 4y) + (- 2x2y + 8xy - 7y)</p>
            <p>- 7x3 + 5x2y - 2x2y - xy + 8xy + 4y - 7y</p>
            <p>- 7x3 + 3x2y + 7xy - 3y</p>


            <h3>Subtração de Polinômios</h3>

            <p>O sinal de menos na frente dos parênteses inverte os sinais de dentro dos parênteses. Após eliminar os parênteses, devemos juntar os termos semelhantes.</p>

            <p>(4x2 - 5xk + 6k) - (3xk - 8k)</p>
            <p>4x2 - 5xk + 6k - 3xk + 8k</p>
            <p>4x2 - 8xk + 14k</p>

            <h3>Multiplicação de Polinômios</h3>

            <p>Na multiplicação devemos multiplicar termo a termo. Na multiplicação de letras iguais, repete-se e soma-se os expoentes.</p>

            <p>(3x2 - 5x + 8) . (-2x + 1)</p>
            <p>-6x3 + 3x2 + 10x2 - 5x - 16x + 8</p>
            <p>-6x3 + 13x2 - 21x +8</p>







        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>Cefet - RJ - 2016 Uma garrafa PET (politereftalato de etileno) com sua tampa custa sessenta centavos. Sabendo que a garrafa custa cinquenta centavos a mais que a tampa, quanto custa só a tampa?</p>

                <p>a) R$ 0,05</p>

                <p>b) R$ 0,15</p>

                <p>c) R$ 0,25</p>

                <p>d) R$ 0,35</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: a) R$ 0,05
                    </p>
                </div>

                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>Cefet - RJ - 2014 Se eu leio 5 páginas por dia de um livro, eu termino de ler 16 dias antes do que se eu estivesse lendo 3 páginas por dia. Quantas páginas tem o livro?</p>

                <p>a) 120</p>

                <p>b) 125</p>

                <p>c) 130</p>

                <p>d) 135</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: a) 120
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
                <br>
                <h4>Não deixe de aprender mais:</h4>
                <br>
                <li><a href="geoespa.php">Geometria Espacial</a></li>
                <li><a href="geoana.php">Geometria Analítica</a></li>
                <li><a href="geoplana.php">Geometria Plana</a></li>
                <li><a href="funcaoAfim.php">Função Afim</a></li>





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