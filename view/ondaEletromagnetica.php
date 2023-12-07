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
    <title>Ondas Eletromagnéticas - Aprenda Fácil</title>
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

        .onda {
            align-items: center;
            justify-content: center;
        }

        .onda h1 {
            text-align: center;
            align-items: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .onda img {
            width: 70%;
            border-radius: 3%;
            margin-bottom: 30px;
        }

        .onda p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .onda h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .onda h3 {
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

        .vetor h5 {
            margin-bottom: 10px;
        }

        .onda h5 {
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
        <div class="onda">
            <h1><u>Ondas Eletromagnéticas</u></h1>
            <h2>O que são Ondas Eletromagnéticas?</h2>
            <p><a href="">Ondas eletromagnéticas</a> são aquelas que resultam da libertação das fontes de energia elétrica e magnética em conjunto. Elas são formadas pelo campo elétrico e o magnético, se propagando no vácuo à velocidade da luz, cerca de 300 000 km/s. Por esse motivo, recebe o nome de onda eletromagnética.</p>
            <p>A velocidade de propagação das ondas eletromagnéticas depende do meio. Em meios que não o vácuo, estas ondas viajam a uma velocidade menor.</p>
            <p>Essas perturbações acontecem na forma de pulsos, os quais são ondas de curta duração que se repetem com intervalos de tempo iguais, ou seja, em movimentos periódicos.</p>

            <img src="https://static.todamateria.com.br/upload/57/dc/57dc0a05e97d3-ondas-eletromagneticas.jpg" alt="">

            <p>As ondas eletromagnéticas são transversais, ou seja, direcionam-se perpendicularmente à direção da propagação.</p>

            <h2>Tipos de Ondas Eletromagnéticas</h2>

            <p>São 7 os tipos de ondas eletromagnéticas: <strong>ondas de rádio, micro-ondas, infravermelho, luz visível, ultravioleta, raios x e raios gama.</strong></p>


            <p>O que determina a sua classificação é a frequência e a oscilação com que as ondas são emitidas e também o seu comprimento. Quanto mais alta a frequência, menor o comprimento de uma onda.</p>

            <p>As ondas são medidas pelo <a href="">espectro eletromagnético</a>. Através das faixas desse mecanismo é possível verificar a distribuição da intensidade do eletromagnetismo.</p>

            <img src="https://static.todamateria.com.br/upload/57/e1/57e13affb7c8d-ondas-eletromagneticas.jpg?auto_optimize=low" alt="">


        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>Entre as ondas abaixo, qual não corresponde a uma onda eletromagnética?</p>
                <br>

                <p>a) Infravermelha.</p>

                <p>b) Raios X.</p>

                <p>c) Ultravioleta.</p>

                <p>d) Luz visível.</p>

                <p>e) Sonora.</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: e) Sonora
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>Não há produção de uma onda eletromagnética ao:</p>
                <p>A frequência da vibração do automóvel percebida pelo condutor durante a passagem nesse sonorizador é mais próxima de:</p>
                <br>
                <p>a) Acelerar uma carga elétrica.</p>

                <p>b) Desacelerar uma carga elétrica.</p>

                <p>c) Ficar em repouso em relação a uma carga elétrica.</p>

                <p>d) Afastar-se de uma carga elétrica.</p>

                <p>e) Aproximar-se de uma carga elétrica.
                </p>
                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: c) ficar em repouso em relação a uma carga elétrica
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Aprenda mais sobre:</h4>
            <br>
            <li><a href="cinematicaEscalar.php">Cinemática Escalar</a></li>
            <li><a href="ondaMecanica.php">Ondas mecânicas</a></li>
            <li><a href="vetor.php">Vetores</a></li>
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