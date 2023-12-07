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
    <title>Função Afim - Aprenda Fácil</title>
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

        .funcao {
            align-items: center;
            justify-content: center;
        }

        .funcao h1 {
            text-align: center;
            align-items: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .funcao img {
            width: 70%;
            border-radius: 3%;
            margin-bottom: 30px;
        }

        .funcao p {
            font-size: 17px;
            line-height: 1.4;
            margin-bottom: 16px;
        }

        .funcao h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .funcao h3 {
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

        .funcao h5 {
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
        <div class="funcao">
            <h1><u>Função Afim</u></h1>
            <h2>O que é uma Função Afim?</h2>


            <p>A <a href="">função afim</a>, também chamada de função do 1º grau, é uma função <strong> f : ℝ→ℝ</strong>, definida como <strong>f(x) = ax + b</strong>, sendo <strong>a</strong> e <strong>b</strong> números reais. As funções f(x) = x + 5, g(x) = 3√3x - 8 e h(x) = 1/2 x são exemplos de funções afim.

            <p>Neste tipo de função, o número <strong>a</strong> é chamado de coeficiente de x e representa a taxa de crescimento ou taxa de variação da função. Já o número <strong>b</strong> é chamado de termo constante.</p>

            <h2>Gráfico de uma Função do 1º grau</h2>

            <p>O gráfico de uma função polinomial do 1º grau é uma reta oblíqua aos eixos <strong>Ox</strong> e <strong>Oy</strong>. Desta forma, para construirmos seu gráfico basta encontrarmos pontos que satisfaçam a função.</p>

            <h3>Exemplo</h3>

            <p>Construa o gráfico da função f (x) = 2x + 3.</p>


            <h3>Solução</h3>

            <p>Para construir o gráfico desta função, vamos atribuir valores arbitrários para x, substituir na equação e calcular o valor correspondente para a f (x).</p>

            <p>endo assim, iremos calcular a função para os valores de x iguais a: - 2, - 1, 0, 1 e 2. Substituindo esses valores na função, temos:</p>

            <p>f (- 2) = 2. (- 2) + 3 = - 4 + 3 = - 1</p>
            <p>f (- 1) = 2 . (- 1) + 3 = - 2 + 3 = 1</p>
            <p>f (0) = 2 . 0 + 3 = 3</p>
            <p>f (1) = 2 . 1 + 3 = 5</p>
            <p> f (2) = 2 . 2 + 3 = 7</p>

            <p>Os pontos escolhidos e o gráfico da f (x) são apresentados na imagem abaixo:</p>

            <img src=" https://static.todamateria.com.br/upload/gr/af/graficofuncaoafim1.jpg" alt="" style="width: 45%;">


            <p>No exemplo, utilizamos vários pontos para construir o gráfico, entretanto, para definir uma reta bastam dois pontos.</p>

            <p>Para facilitar os cálculos podemos, por exemplo, escolher os pontos (0,y) e (x,0). Nestes pontos, a reta da função corta o eixo Ox e Oy respectivamente.</p>

            <h2>Coeficiente Linear e Angular</h2>

            <p>Como o gráfico de uma função afim é uma reta, o coeficiente <strong>a</strong> de x é também chamado de <a href="">coeficiente angular</a>. Esse valor representa a inclinação da reta em relação ao eixo Ox.</p>
            <p>O termo constante <strong>b</strong> é chamado de coeficiente linear e representa o ponto onde a reta corta o eixo Oy. Pois sendo x = 0, temos:</p>

            <p>y = a.0 + b ⇒ y = b</p>

            <p>Quando uma função afim apresentar o coeficiente angular igual a zero (a = 0) a função será chamada de constante. Neste caso, o seu gráfico será uma reta paralela ao eixo Ox.</p>

            <p>Abaixo representamos o gráfico da função constante f (x) = 4:</p>

            <img src="https://static.todamateria.com.br/upload/fu/nc/funcaoconstante.jpg?auto_optimize=low" alt="" style="width: 35%;">



            <p>Ao passo que, quando b = 0 e a = 1 a função é chamada de função identidade. O gráfico da função f (x) = x (função identidade) é uma reta que passa pela origem (0,0).</p>

            <p>Além disso, essa reta é bissetriz do 1º e 3º quadrantes, ou seja, divide os quadrantes em dois ângulos iguais, conforme indicado na imagem abaixo:</p>

            <img src="https://static.todamateria.com.br/upload/fu/nc/funcaoidentidade.jpg?auto_optimize=low" alt="" style="width: 35%;">


            <p>Temos ainda que, quando o coeficiente linear é igual a zero (b = 0), a função afim é chamada de <a href="">função linear</a>. Por exemplo as funções f (x) = 2x e g (x) = - 3x são funções lineares.</p>

            <p>O gráfico das funções lineares são retas inclinadas que passam pela origem (0,0).</p>

            <p>Representamos abaixo o gráfico da função linear f (x) = - 3x:</p>

            <img src="https://static.todamateria.com.br/upload/fu/nc/funcaolinear.jpg?auto_optimize=low" alt="" style="width: 35%;">

            <h2>Função Crescente e Decrescente</h2>

            <p>Uma função é <strong>crescente</strong> quando ao atribuirmos valores cada vez maiores para x, o resultado da f (x) será também cada vez maior.</p>

            <p>Já a função <strong>decrescente</strong> é aquela que ao atribuirmos valores cada vez maiores para x, o resultado da f (x) será cada vez menor.</p>

            <p>Para identificar se uma função afim é crescente ou decrescente, basta verificar o valor do seu coeficiente angular.</p>

            <p>Se o coeficiente angular for positivo, ou seja, a é maior que zero, a função será crescente. Ao contrário, se a for negativo, a função será decrescente.</p>

            <p> Por exemplo, a função 2x - 4 é crescente, pois a = 2 (valor positivo). Entretanto, a função - 2x + - 4 é decrescente visto que a = - 2 (negativo). Essas funções estão representadas nos gráficos abaixo:</p>


            <img src="https://static.todamateria.com.br/upload/fu/nc/funcaocrescentedes.jpg?auto_optimize=low" alt="" style="width: 50%;">



        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(Cefet - MG - 2015) Um motorista de táxi cobra, para cada corrida, uma taxa fixa de R$ 5,00 e mais R$ 2,00 por quilômetro rodado. O valor total arrecadado (R) num dia é função da quantidade total (x) de quilômetros percorridos e calculado por meio da função R(x) = ax + b, em que a é o preço cobrado por quilômetro e b, a soma de todas as taxas fixas recebidas no dia. Se, em um dia, o taxista realizou 10 corridas e arrecadou R$ 410,00, então a média de quilômetros rodados por corrida, foi de</p>
                <p>a) 14</p>
                <p>b) 16</p>
                <p>c) 18</p>
                <p>d) 20</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: c) 18
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(Unicamp - 2016) Considere a função afim f(x) = ax + b definida para todo número real x, onde a e b são números reais. Sabendo que f(4) = 2, podemos afirmar que f(f(3) + f(5)) é igual a</p>
                <p>a) 5</p>
                <p>b) 4</p>
                <p>c) 3</p>
                <p>d) 2</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: d) 2
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Veja mais sobre:</h4>
            <br>
            <li><a href="funcaoQuadratica.php">Função Quadrática</a></li>
            <li><a href="funcaoexpo.php">Função Exponencial</a></li>

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