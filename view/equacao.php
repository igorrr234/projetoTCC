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
    <title>Equações 1° Grau - Aprenda Fácil</title>
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

        .equacao h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .equacao img {
            width: 70%;
            border-radius: 1%;
            margin-bottom: 15px;
        }

        .equacao {
            align-items: center;
            justify-content: center;
        }

        .equacao p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .equacao h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .equacao h3 {
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

        .equacao h5 {
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
        <div class="equacao">
            <h1><u>Equação do Primeiro Grau</u></h1>
            <h2>O que é uma Equação do Primeiro Grau?</h2>

            <p>As <strong>equações de primeiro grau</strong> são sentenças matemáticas que estabelecem relações de igualdade entre termos conhecidos e desconhecidos, representadas sob a forma:</p>

            <p><strong>ax+b = 0</strong></p>

            <p>Donde <strong>a</strong> e <strong>b</strong> são números reais, sendo a um valor diferente de zero (a ≠ 0) e x representa o valor desconhecido.</p>

            <p>O valor desconhecido é chamado de incógnita que significa "termo a determinar". As equações do 1º grau podem apresentar uma ou mais incógnitas.</p>

            <p>As incógnitas são expressas por uma letra qualquer, sendo que as mais utilizadas são x, y, z. Nas equações do primeiro grau, o expoente das incógnitas é sempre igual a 1.</p>

            <p>As igualdades 2.x = 4, 9x + 3 y = 2 e 5 = 20a + b são exemplos de equações do 1º grau. Já as equações 3x²+5x-3 =0, x³+5y= 9 não são deste tipo.</p>

            <p>O lado esquerdo de uma igualdade é chamado de <strong>1º membro da equação</strong> e o lado direito é chamado de <strong>2º membro</strong>.</p>

            <h2>Como resolver uma equação de primeiro grau?</h2>




            <p>O objetivo de resolver uma equação de primeiro grau é descobrir o valor desconhecido, ou seja, encontrar o valor da incógnita que torna a igualdade verdadeira.</p>

            <p>Para isso, deve-se isolar os elementos desconhecidos em um dos lados do sinal de igual e os valores constantes do outro lado.</p>

            <p>Contudo, é importante observar que a mudança de posição desses elementos deve ser feita de forma que a igualdade continue sendo verdadeira.</p>




            <p>Quando um termo da equação mudar de lado do sinal de igual, devemos inverter a operação. Assim, se tiver multiplicando, passará dividindo, se tiver somando, passará subtraindo e vice-versa.</p>


            <h3>Exemplo</h3>

            <p>Qual o valor da incógnita x que torna a igualdade 8x - 3 = 5 verdadeira?</p>


            <h3>Solução</h3>

            <p>Para resolver a equação, devemos isolar o x. Para isso, vamos primeiro passar o 3 para o outro lado do sinal de igual. Como ele está subtraindo, passará somando. Assim:</p>

            <p>8x = 5 + 3</p>
            <p>8x = 8</p>

            <p>Agora podemos passar o 8, que está multiplicando o x, para o outro lado dividindo:</p>
            <p>x = 8/8</p>
            <p><strong>x = 1 </strong></p>

            <p>Outra regra básica para o desenvolvimento das equações de primeiro grau determina o seguinte:</p>

            <p>Se a parte da variável ou a incógnita da equação for negativa, devemos multiplicar todos os membros da equação por –1. Por exemplo:</p>

            <p>– 9x = – 90 . (-1)</p>
            <p>9x = 90</p>
            <p> <strong>x = 10 </strong></p>

            <div class="video">

                <h2>Veja o vídeo a seguir:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/p_Az87jDX4Y?si=oAXdPZpJekXx-hpa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>


        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>Um retângulo com 100 cm de perímetro apresenta a medida do lado maior com 10 cm a mais que o lado menor. Quanto mede o lado menor dessa figura geométrica?</p>

                <p>a) 25</p>

                <p>b) 30</p>

                <p>c) 35</p>

                <p>d) 20</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: d) 20
                    </p>
                </div>

                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(Uece) Uma peça de tecido, após a lavagem, perdeu 1/10 de seu comprimento e este ficou medindo 36 metros. Nestas condições, o comprimento, em m, da peça antes da lavagem era igual a:</p>

                <p>a) 44</p>

                <p>b) 42</p>

                <p>c) 40</p>

                <p>d) 38</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: c) 40
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
                <li><a href="sistemaLinear.php">Sistema de Equações</a></li>






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