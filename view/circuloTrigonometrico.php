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
    <title>Círculo Trigonométrico - Aprenda Fácil</title>
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

        .trig h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .trig img {
            width: 70%;
            border-radius: 1%;
            margin-bottom: 15px;
        }

        .trig {
            align-items: center;
            justify-content: center;
        }

        .trig p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .trig h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .trig h3 {
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

        .trig h5 {
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
        <div class="trig">
            <h1><u>Círculo Trigonométrico</u></h1>
            <h2>O que é o Círculo Trigonométrico?</h2>


            <p>O <strong>Círculo Trigonométrico</strong>, também chamado de Ciclo ou Circunferência Trigonométrica, é uma representação gráfica que auxilia no cálculo das razões trigonométricas.</p>

            <img src="https://static.todamateria.com.br/upload/58/58/5858462cccfdc-circulo-trigonometrico.jpg" alt="" style="width:37%">
            <h5>Círculo trigonométrico e as razões trigonométricas</h5>

            <p>De acordo com a simetria do círculo trigonométrico temos que o eixo vertical corresponde ao <strong>seno</strong> e o eixo horizontal ao <strong>cosseno</strong>. Cada ponto dele está associado aos valores dos ângulos.Radianos do Círculo Trigonométrico</p>
            <p>A medida de um arco no círculo trigonométrico pode ser dada em grau (°) ou radiano (rad).</p>


            <p><strong>- 1°</strong> corresponde a 1/360 da circunferência. A circunferência é dividida em 360 partes iguais ligadas ao centro, sendo que cada uma delas apresenta um ângulo que corresponde a 1°.</p>

            <p><strong>- 1 radiano</strong> corresponde à medida de um arco da circunferência, cujo comprimento é igual ao raio da circunferência do arco que será medido.</p>

            <img src="https://static.todamateria.com.br/upload/58/58/585845b6437cd-circulo-trigonometrico.jpg?auto_optimize=low" alt="" style="width:30%">
            <h5>Figura do Círculo Trigonométrico dos ângulos expressos em graus e radianos</h5>

            <p>Para auxiliar nas medidas, confira abaixo algumas relações entre graus e radianos:</p>

            <p><strong>- π rad</strong>= 180°</p>
            <p><strong>- 2π rad</strong>= 360°</p>
            <p><strong>- π/2 rad </strong>= 90°</p>
            <p><strong>- π/3 rad</strong>= 60°</p>
            <p><strong>- π/4 rad</strong>= 45°</p>


            <h2>Quadrantes do Círculo Trigonométrico</h2>

            <p>Quando dividimos o círculo trigonométrico em quatro partes iguais, temos os <strong>quatro quadrantes</strong> que o constituem. Para compreender melhor, observe a figura abaixo:</p>

            <img src="https://static.todamateria.com.br/upload/58/5b/585bff5a9fef8-circulo-trigonometrico.jpg?auto_optimize=low" alt="" style="width:35%">


            <p><strong>- 1.° Quadrante</strong>: 0°</p>
            <p><strong>- 2.° Quadrante</strong>: 90°</p>
            <p><strong>- 3.° Quadrante</strong>: 180º</p>
            <p><strong>- 4.° Quadrante</strong>: 270º</p>


            <h2>Círculo Trigonométrico e seus Sinais</h2>


            <p>De acordo com o quadrante em que está inserido, os valores do seno, cosseno e tangente variam.</p>

            <p>Ou seja, os ângulos podem apresentar um valor positivo ou negativo.</p>

            <p> Para compreender melhor, veja a figura abaixo:</p>


            <img src="https://static.todamateria.com.br/upload/58/58/585845fc6acfc-circulo-trigonometrico.jpg?auto_optimize=low" alt="" style="width: 45%">





        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(PUC-MG) Os moradores de certa cidade costumam fazer caminhada em torno de duas de suas praças. A pista que contorna uma dessas praças é um quadrado de lado L e tem 640 m de extensão; a pista que contorna a outra praça é um círculo de raio R e tem 628 m de extensão. Nessas condições, o valor da razão R/L é aproximadamente igual a:</p>
                <p>Use π = 3,14.</p>
                <p>a) 1/2</p>

                <p>b) 5/8</p>

                <p>c) 5/4</p>

                <p>d) 3/2</p>
                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: b) 5/8
                    </p>
                </div>

                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(UFRS) Os ponteiros de um relógio marcam duas horas e vinte minutos. O menor ângulos entre os ponteiros é:</p>

                <p>a) 45°</p>

                <p>b) 50°</p>

                <p>c) 55°</p>

                <p>d) 60°</p>

                <p>e) 65°</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: b) 50°
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