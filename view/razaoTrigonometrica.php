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
    <title>Razões Trigonométricas - Aprenda Fácil</title>
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
            <h1><u>Razões Trigonométricas</u></h1>
            <h2>O que são Razões Trigonométricas?</h2>

            <p>As razões (ou relações) trigonométricas estão relacionadas com os ângulos de um <a href="">triângulo retângulo</a>. As principais são: o <strong>seno</strong>, o <strong>cosseno</strong> e a <strong>tangente</strong>.</p>

            <p>As relações trigonométricas são resultado da divisão entre as medidas de dois lados de um triângulo retângulo, e por isso são chamadas de razões.</p>




            <h2>Razões Trigonométricas no Triângulo Retângulo</h2>

            <p>O <a href="">triângulo retângulo</a> recebe esse nome pois apresenta um ângulo chamado de reto, que possui o valor de 90°.</p>

            <p>Os outros ângulos do triângulo retângulo são menores que 90°, chamados de ângulos agudos. A soma dos ângulos internos é de 180°.</p>

            <img src="https://static.todamateria.com.br/upload/tr/ia/tria_ngulo_reta_ngulo_1.jpg" alt="" style="width:20%">
            <p>Observe que os ângulos agudos de um triângulo retângulo são chamados de complementares. Ou seja, se um deles tem medida x, o outro terá a medida (90°- x).</p>

            <h3>Lados do Triângulo Retângulo: Hipotenusa e Catetos</h3>


            <p>Antes de mais nada, temos que saber que no triângulo retângulo, a hipotenusa é o lado oposto ao ângulo reto e o maior lado do triângulo. Já os catetos são os lados adjacentes e que formam o ângulo de 90°.</p>

            <p>Note que dependendo dos lados de referência ao ângulo, temos o cateto oposto e o cateto adjacente.</p>


            <img src="https://static.todamateria.com.br/upload/58/52/5852b4ced641c_trigonometria_no_triangulo_retangulo.jpg?auto_optimize=low" alt="" style="width:20%">

            <p>Feita essa observação, as <strong>razões trigonométricas</strong> no triângulo retângulo são:</p>

            <img src="https://static.todamateria.com.br/upload/se/no/seno.jpg?auto_optimize=low" alt="" style="width:15%">

            <p>Lê-se cateto oposto sobre a hipotenusa.</p>

            <img src="https://static.todamateria.com.br/upload/co/ss/cosseno.jpg?auto_optimize=low" alt="" style="width:20%">

            <p>Lê-se cateto adjacente sobre a hipotenusa.</p>

            <img src="https://static.todamateria.com.br/upload/ta/ng/tangente.jpg?auto_optimize=low" alt="" style="width:20%">

            <p>Vale lembrar que pelo conhecimento de um ângulo agudo e a medida de um dos lados de um triângulo retângulo, podemos descobrir o valor dos outros dois lados.</p>

            <h3>Tabela Trigonométrica</h3>

            <p>A <a href="">tabela trigonométrica</a> apresenta os ângulos em graus e os valores decimais do seno, cosseno e tangente. Confira abaixo a tabela completa:</p>

            <img src="https://static.todamateria.com.br/upload/ta/be/tabela_trigonoma_trica_1a_ata_360a.jpg?auto_optimize=low" alt="" style="width:50%">

            <h2>Aplicações</h2>

            <p>As razões trigonométricas possuem muitas aplicações. Assim, conhecendo os valores do seno, cosseno e tangente de um ângulo agudo, podemos fazer diversos cálculos geométricos.</p>

            <p>Um exemplo notório, é o cálculo realizado para descobrir o comprimento de uma sombra ou de um prédio.</p>

            <h3>Exemplo</h3>

            <p>Qual o comprimento da sombra de uma árvore de 5m de altura quando o sol está a 30° acima do horizonte?</p>


            <img src="https://static.todamateria.com.br/upload/so/mb/sombra.jpg?auto_optimize=low" alt="" style="width:25%">
            <p>Tg B = AC / AB = 5/s</p>
            <p>Uma vez que B = 30° temos que a:</p>
            <p>Tg B = 30° = √3/3 = 0,577</p>
            <p>Logo,</p>
            <p>0,577 = 5/s</p>
            <p> s = 5/0,577</p>
            <p><strong>s = 8,67</strong></p>

            <div class="video">

                <h2>Veja o vídeo a seguir:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/m5dD2j8zf88?si=it12rW68WU6b6_VR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>


        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(UFAM) Se um cateto e a hipotenusa de um triângulo retângulo medem 2a e 4a, respectivamente, então a tangente do ângulo oposto ao menor lado é:</p>

                <p>a) 2√3</p>

                <p>b) √3/3</p>

                <p>c) √3/6</p>

                <p>d) √20/20</p>

                <p>e) 3√3</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: b) √3/3
                    </p>
                </div>

                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(Cesgranrio) Uma rampa plana, de 36 m de comprimento, faz ângulo de 30° com o plano horizontal. Uma pessoa que sobe a rampa inteira eleva-se verticalmente de:</p>

                <p>a) 6√3 m.</p>

                <p>b) 12 m.</p>

                <p>c) 13,6 m.</p>

                <p>d) 9√3 m.</p>

                <p>e) 18 m.</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: e) 18 m.
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