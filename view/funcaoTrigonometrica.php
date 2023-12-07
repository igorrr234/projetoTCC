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
    <title>Funções Trigonométricas - Aprenda Fácil</title>
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
            <h1><u>Funções Trigonométricas</u></h1>
            <h2>O que são as Funções Trigonométricas?</h2>


            <p>As funções trigonométricas, também chamadas de <strong>funções circulares</strong>, estão relacionadas com as demais voltas no ciclo trigonométrico.</p>

            <p>As principais funções trigonométricas são:</p>

            <p><strong>- Função Seno</strong></p>
            <p><strong>- Função Cosseno</strong></p>
            <p><strong>- Função Tangente</strong></p>

            <p>No <a href="circuloTrigonometrico.php">círculo trigonométrico</a> temos que cada número real está associado a um ponto da circunferência.</p>

            <img src="https://static.todamateria.com.br/upload/ci/rc/circulotrigonometrico3-0.jpg" alt="" style="width:37%">
            <h5>Figura do Círculo Trigonométrico dos ângulos expressos em graus e radianos</h5>


            <h2>Funções Periódicas</h2>


            <p>As funções periódicas são funções que possuem um <strong>comportamento periódico</strong>. Ou seja, que ocorrem em determinados intervalos de tempo.</p>

            <p>O <strong>período</strong> corresponde ao menor intervalo de tempo em que acontece a repetição de determinado fenômeno.</p>

            <p>Uma função <strong>f: A → B</strong> é periódica se existir um número real positivo p tal que</p>

            <p><strong>f(x) = f (x+p), ∀ x ∈ A</strong></p>

            <p>O menor valor positivo de p é chamado de período de f.</p>

            <p>Note que as funções trigonométricas são exemplos de funções periódicas visto que apresentam certos fenômenos periódicos.</p>

            <h2>Função Seno</h2>


            <p>A função seno é uma função periódica e seu período é <strong>2π</strong>. Ela é expressa por:</p>

            <p><strong>f(x) = sen x</strong></p>

            <p>No círculo trigonométrico, o <strong>sinal da função seno</strong> é positivo quando x pertence ao primeiro e segundo quadrantes. Já no terceiro e quarto quadrantes, o sinal é negativo.</p>

            <img src="https://static.todamateria.com.br/upload/se/no/seno_sinal.jpg?auto_optimize=low" alt="" style="width:28%">

            <p>Além disso, no primeiro e quarto quadrantes a função f é <strong>crescente</strong>. Já no segundo e terceiro quadrantes a função f é <strong>decrescente</strong>.</p>

            <p>O <strong>domínio</strong> e o <strong>contradomínio</strong> da função seno são iguais a R. Ou seja, ela está definida para todos os valores reais: Dom(sen)=R.</p>


            <p>Já o conjunto da <strong>imagem da função</strong> seno corresponde ao intervalo real [-1, 1]: -1 < sen x < 1. Em relação à simetria, a função seno é uma <strong>função ímpar</strong>: sen(-x) = -sen(x). O gráfico da função seno f(x)= sen x é uma curva chamada de <strong>senoide</strong>: </p>

            <img src="https://static.todamateria.com.br/upload/fu/nc/funcaoseno4-1.jpg?auto_optimize=low" alt="" style="width:45%">
            <h5>Gráfico da função seno</h5>

            <h2>Função Cosseno</h2>

            <p>A função cosseno é uma função periódica e seu período é <strong>2π</strong>. Ela é expressa por:</p>

            </p><strong>f(x) = cos x</strong></p>

            </p>No círculo trigonométrico, o <strong>sinal da função cosseno</strong> é positivo quando x pertence ao primeiro e quarto quadrantes. Já no segundo e terceiro quadrantes, o sinal é negativo.</p>

            <img src="https://static.todamateria.com.br/upload/fu/na/funa_a_o_cosseno.jpg?auto_optimize=low" alt="" style="width:28%">


            <p>Além disso, no primeiro e segundo quadrantes a função f é <strong>decrescente</strong>. Já no terceiro e quarto quadrantes a função f é <strong>crescente</strong>.</p>

            <p>O <strong>domínio</strong> e o <strong>contradomínio</strong> da função cosseno são iguais a R. Ou seja, ela está definida para todos os valores reais: Dom(cos)=R.</p>

            <p>Já o conjunto da <strong>imagem da função</strong> cosseno corresponde ao intervalo real [-1, 1]: -1 < cos x < 1. Em relação à simetria, a função cosseno é uma <strong>função par</strong>: cos(-x)=cos(x). O gráfico da função cosseno f(x)=cos x é uma curva chamada de <strong>cossenoide</strong>:</p>
            <img src="https://static.todamateria.com.br/upload/fu/nc/funcaocosseno2-0.jpg?auto_optimize=low" alt="" style="width:45%">
            <h5>Gráfico da função cosseno</h5>

            <h2>Função Tangente</h2>


            <p>A função tangente é uma função periódica e seu período é <strong>π</strong>. Ela é expressa por:</p>

            <p><strong>f(x) = tg x</strong></p>

            <p>No círculo trigonométrico, o <strong>sinal da função tangente</strong> é positiva quando x pertence ao primeiro e terceiro quadrantes. Já no segundo e quarto quadrantes, o sinal é negativo.</p>


            <img src="https://static.todamateria.com.br/upload/fu/na/funa_a_o_tangente.jpg?auto_optimize=low" alt="" style="width:28%">

            <p>Além disso, a função f definida por f(x) = tg x é sempre <strong>crescente</strong> em todos os quadrantes do círculo trigonométrico.</p>

            <p>O <strong>domínio</strong> da função tangente é: Dom(tan)={x ∈ R│x ≠ de π/2 + kπ; K ∈ Z}. Assim, não definimos tg x, se x = π/2 + kπ.</p>

            <p>Já o conjunto da <strong>imagem da função</strong> tangente corresponde a R, ou seja, o conjunto dos números reais.</p>

            <p>Em relação à simetria, a função tangente é uma <strong>função ímpar</strong>: tg(-x) = -tg(x).</p>

            <p>O gráfico da função tangente f(x) = tg x é uma curva chamada de <strong>tangentoide</strong>:</p>


            <img src="https://static.todamateria.com.br/upload/fu/nc/funcaotangente3.jpg?auto_optimize=low" alt="" style="width:28%">
            <h5>Gráfico da função tangente</h5>



        </div>



        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(Cefet-PR) A função real f(x) = a + b . sen cx tem imagem igual a [-7, 9] e seu período é π/2 rad. Assim, a + b + c vale:</p>

                <p>a) 13</p>

                <p>b) 9</p>

                <p>c) 8</p>

                <p>d) – 4</p>

                <p>e) 10 </p>
                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: a) 13
                    </p>
                </div>

                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(UFPI) O período da função f(x) = 5 + sen (3x – 2) é:</p>

                <p>a) 3π</p>

                <p>b) 2π/3</p>

                <p>c) 3π – 2</p>

                <p>d) π/3 – 2</p>

                <p>e) π/5</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: b) 2π/3
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
                <li><a href="circuloTrigonometrico.php">Círculo Trigonométrico</a></li>



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