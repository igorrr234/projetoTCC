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
    <title>Eletrodinâmica - Aprenda Fácil</title>
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

        .eletro h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .eletro img {
            width: 70%;
            border-radius: 3%;
            margin-bottom: 15px;
        }

        .eletro {
            align-items: center;
            justify-content: center;
        }

        .eletro p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .eletro h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .eletro h3 {
            margin-bottom: 10px;
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

        .exercicio1 p {
            margin-top: 5px;
            line-height: 1.5;
        }

        .eletro h5 {
            margin-bottom: 10px;
        }

        .video h2 {
            margin-bottom: 10px;
        }

        .video iframe {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="eletro">
            <h1><u>Eletrodinâmica</u></h1>
            <h2>O que é Eletrodinâmica?</h2>

            <p><a href="">Eletrodinâmica</a> é a parte da física que estuda o aspecto dinâmico da eletricidade, ou seja, o movimento constante das cargas elétricas.</p>

            <img src="https://s2.static.brasilescola.uol.com.br/be/2021/07/descarga-de-faisca-entre-dois-eletrodos.jpg" alt="">
            <h5>As cargas elétricas em movimento são o objeto de estudo da eletrodinâmica.</h5>

            <h2>Corrente Elétrica</h2>


            <p>O primeiro tema de estudo da Eletrodinâmica é a corrente elétrica. Isso porque corrente elétrica é a carga elétrica que está em movimento.</p>
            <p>Esse movimento é ordenado e insere-se dentro de um sistema condutor, cujas cargas apresentam uma diferença de potencial (ddp). Isso quer dizer que há cargas positivas e negativas, sem as quais não existe corrente elétrica.</p>
            <p>A intensidade da <a href="">corrente elétrica</a> é medida através da seguinte fórmula:</p>

            <img src="https://static.todamateria.com.br/upload/53/bb/53bb43192afb7_corrente_eletrica.jpg" alt="" style="width:7%">


            <p>Onde:</p>
            <p><strong>I: intensidade da corrente (A)</strong></p>
            <p><strong>Q: carga elétrica (C)</strong></p>
            <p><strong>Δt: intervalo de tempo (s)</strong></p>


            <h2>Resistência Elétrica</h2>

            <p>A <a href="">resistência elétrica</a> dificulta a passagem da corrente elétrica. O seu cálculo obedece as Leis de Ohm.</p>


            <h3>Fórmula da Primeira Lei de Ohm:</h3>

            <img src="https://static.todamateria.com.br/upload/53/bb/53bb3e436b552_leis_de_ohm.jpg?auto_optimize=low" alt="" style="width:7%">



            <p>Onde:</p>
            <p><strong>R: resistência, medida em Ohm (Ω)</strong></p>
            <p><strong>U: diferença de potencial elétrico (ddp), medido em Volts (V)</strong></p>
            <p><strong>I: intensidade da corrente elétrica, medida em Ampére (A).</strong></p>


            <h3>Fórmula da Segunda Lei de Ohm:</h3>

            <img src="https://static.todamateria.com.br/upload/53/bb/53bb3e55e0721_leis_de_ohm.jpg?auto_optimize=low" alt="" style="width:9%">

            <p>Onde:</p>
            <p><strong>R: resistência, medida em Ohm (Ω)</strong></p>
            <p><strong>ρ: resistividade do condutor (depende do material e de sua temperatura, medida em Ω.m)</strong></p>
            <p><strong>L: comprimento (m)</strong></p>
            <p><strong>A: área de secção transversal (mm2)</strong></p>


            <h2>Potência Elétrica</h2>

            <p><a href="">Potência Elétrica</a> é a quantidade de energia elétrica produzida em um determinado período de tempo.</p>

            <p>Ela pode ser medida através da seguinte fórmula:</p>
            <p><strong>Pot = U . i</strong></p>

            <p>Onde:</p>
            <p><strong>Pot: potência</strong></p>
            <p><strong>U: tensão</strong></p>
            <p><strong>i: intensidade da corrente elétrica</strong></p>



        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p> (UNIFESP-SP) Uma das grandezas que representa o fluxo de elétrons que atravessa um condutor é a intensidade da corrente elétrica, representada pela letra i. Trata-se de uma grandeza</p>

                <p> a) Vetorial, porque a ela sempre se associa um módulo, uma direção e um sentido.</p>
                <p>b) Escalar, porque é definida pela razão entre grandezas escalares: carga elétrica e tempo.</p>
                <p>c) Vetorial, porque a corrente elétrica se origina da ação do vetor campo elétrico que atua no interior do condutor.</p>
                <p>d) Escalar, porque o eletromagnetismo só pode ser descrito por grandezas escalares.</p>
                <p>e) Vetorial, porque as intensidades das correntes que convergem em um nó sempre se somam vetorialmente.</p>



                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: b) Escalar, porque é definida pela razão entre grandezas escalares: carga elétrica e tempo.
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(Enem 2017) A capacidade de uma bateria com acumuladores, tal como a usada no sistema elétrico de um automóvel, é especificada em ampère hora (Ah). Uma bateria de 12 V e 100 Ah fornece 12 J para cada coulomb de carga que flui através dela.</p>
                <p>Se um gerador, de resistência interna desprezível, que fornece uma potência elétrica média igual a 600 W, fosse conectado aos terminais da bateria descrita, quanto tempo ele levaria para recarregá-la completamente?</p>

                <p>a) 0,5 h</p>

                <p>b) 2 h</p>

                <p>c) 12 h</p>

                <p>d) 50 h</p>

                <p>e) 100 h</p>


                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: b) 2h
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Não deixe de aprender mais:</h4>
            <br>
            <li><a href="leisNewton.php"> Leis de Newton </a></li>
            <li><a href="ondaEletromagnetica.php"> Ondas Eletromagnéticas </a></li>
            <li><a href="eletrostatica.php"> Eletrostática</a></li>
        </div>
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