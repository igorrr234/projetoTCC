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
    <title>Eletrostática - Aprenda Fácil</title>
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
            <h1><u>Eletrostática</u></h1>
            <h2>O que é Eletrostática?</h2>
            <p><a href="">Eletrostática</a> é a parte da área da eletricidade que estuda as cargas elétricas sem movimento, ou seja, em estado de repouso.</p <h2>Força e Energia Eletrostática</h2>

            <p>Força eletrostática é a força de interação eletrostática entre duas cargas elétricas através da atração e da repulsão.</p>

            <p>Ela é calculada pela <a href="">Lei de Coulomb</a>, que é expressa pela seguinte fórmula:</p>

            <img src="https://static.todamateria.com.br/upload/58/81/5881d21b41120-eletrostatica.jpg" alt="" style="width:10%">


            <p>Onde:</p>

            <p><strong>k = constante eletrostática</strong></p>
            <p><strong>q1 e q2 = cargas elétricas</strong></p>
            <p><strong>r = distância entre as cargas</strong></p>

            <p>A constante eletrostática, também conhecida como constante de Coulomb, é influenciada pelo meio onde as cargas elétricas se encontram. Assim, a constante eletrostática influencia o valor da força.</p>

            <h2>Campo Elétrico</h2>
            <p><a href="">Campo elétrico</a> é o local onde as cargas elétricas se concentram, cuja intensidade é medida através da fórmula:</p>

            <img src="https://static.todamateria.com.br/upload/58/81/5881d676543f4-eletrostatica.jpg?auto_optimize=low" alt="" style="width:6%">

            <p>Onde:</p>

            <p><strong>E = campo elétrico</strong></p>
            <p><strong>F = força elétrica</strong></p>
            <p><strong>q = carga elétrica</strong></p>


            <h2>Carga Elétrica</h2>

            <p>As <a href="">cargas elétricas</a> são o resultado da atração ou repulsão das cargas. Cargas semelhantes se repulsam, enquanto as contrárias se atraem.</p>

            <p>Elas são medidas em coulomb e a menor dessas cargas que é encontrada na natureza é a <strong>carga elementar</strong> (e = 1,6 .10^19 C).</p>

            <p>A fórmula da carga elétrica é:</p>

            <p><strong>Q = n.e</strong></p>

            <p>Onde:</p>

            <p><strong>Q = carga elétrica</strong></p>
            <p><strong>n = quantidade de elétrons</strong></p>
            <p><strong>e = carga elementar</strong></p>

            <h2>Fórmulas</h2>
            <p>Além das fórmulas da eletrostática que foram citadas acima, são utilizadas também:</p>

            <h2>Potencial Elétrico</h2>

            <img src="https://static.todamateria.com.br/upload/58/81/5881dca89eccd-eletrostatica.jpg?auto_optimize=low" alt="" style="width:8%">

            <p>Onde:</p>

            <p><strong>V = Potencial elétrico</strong></p>
            <p><strong>Ep = energia potencial</strong></p>
            <p><strong>Q = Carga elétrica</strong></p>

            <h2>Diferença de Potencial</h2>

            <p><strong>U = Vb - Va</strong></p>

            <p>Onde:</p>

            <p><strong>U = diferença de potencial</strong></p>
            <p><strong>Va = potencial elétrico em a</strong></p>
            <p><strong>Vb = potencial elétrico em b</strong></p>

        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>2. (UFRR-2016) Um plano retangular de área A, no sistema internacional (SI), é carregado com carga elétrica +Q, distribuída uniformemente em toda a superfície. Qual será a densidade de carga elétrica dessa região?</p>
                <p>a) Valor variável em unidades de coulomb/m</p>
                <p>b) +Q/A coulomb/m2</p>
                <p>c) +Q coulomb/m4</p>
                <p>d) -Q coulomb/m5</p>
                <p>e) 10 Q coulomb/m</p>
                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: b) +Q/A coulomb/m2
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>2) (UEL-2011) O caráter hidrofóbico do poliuretano está associado à força de repulsão eletrostática entre as moléculas do material e as moléculas de água, fenômeno físico que ocorre entre corpos com cargas elétricas de mesmo sinal. É correto afirmar que a força de repulsão eletrostática</p>

                <p>a) tem sentido contrário à força de atração eletrostática entre corpos eletricamente neutros</p>
                <p>b) é maior entre dois corpos com mesma carga elétrica +Q do que entre dois corpos com mesma carga elétrica -Q</p>
                <p>c) será duas vezes maior se a distância entre os corpos carregados for reduzida à metade</p>
                <p>d) aumenta com o quadrado da distância entre corpos eletricamente carregados</p>
                <p>e) é diretamente proporcional à quantidade de carga para corpos eletricamente carregados</p>


                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: e) é diretamente proporcional à quantidade de carga para corpos eletricamente carregados.
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