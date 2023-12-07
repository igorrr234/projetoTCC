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
    <title>Função Exponencial - Aprenda Fácil</title>
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
            display: flex;
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
            <h1><u>Função Exponencial</u></h1>
            <h2>O que é uma Função Exponencial?</h2>


            <p><a href="">Função Exponencial</a> é aquela que a variável está no expoente e cuja base é sempre maior que zero e diferente de um.</p>

            <p>Essas restrições são necessárias, pois 1 elevado a qualquer número resulta em 1. Assim, em vez de exponencial, estaríamos diante de uma função constante.</p>

            <p> Além disso, a base não pode ser negativa, nem igual a zero, pois para alguns expoentes a função não estaria definida.</p>

            <p> Por exemplo, a base igual a - 3 e o expoente igual a 1/2. Como no conjunto dos números reais não existe raiz quadrada de número negativo, não existiria imagem da função para esse valor.</p>


            <h3>Exemplos</h3>


            <p>f(x) = 4^x</p>
            <p>f(x) = (0,1)^x</p>
            <p>f(x) = (⅔)^x</p>

            <p>Nos exemplos acima <strong>4, 0,1 e ⅔</strong> são as bases, enquanto x é o expoente.</p>


            <h2>Gráfico da função exponencial</h2>




            <p>O gráfico desta função passa pelo ponto (0,1), pois todo número elevado a zero é igual a 1. Além disso, a curva exponencial não toca no eixo x.</p>

            <p>Na função exponencial a base é sempre maior que zero, portanto a função terá sempre imagem positiva. Assim sendo, não apresenta pontos nos quadrantes III e IV (imagem negativa).</p>

            <p>Abaixo representamos o gráfico da função exponencial.</p>


            <img src="https://static.todamateria.com.br/upload/ex/po/expoencialgrafico3.jpg" alt="" style="width: 40%;">

            <h2>Função Crescente ou Decrescente</h2>



            <p>A função exponencial pode ser crescente ou decrescente.</p>

            <p>Será <strong>crescente</strong> quando a base for maior que 1. Por exemplo, a função y = 2^x é uma função crescente.</p>

            <p>Para constatar que essa função é crescente, atribuímos valores para x no expoente da função e encontramos a sua imagem. Os valores encontrados estão na tabela abaixo.</p>


            <img src=" https://static.todamateria.com.br/upload/fu/nc/funcaoexponencialtabela500.jpg?auto_optimize=low" alt="" style="width: 40%;">


            <p>Observando a tabela, notamos que quando aumentamos o valor de x, a sua imagem também aumenta. Abaixo, representamos o gráfico desta função.

            </p>

            <img src="https://static.todamateria.com.br/upload/ex/po/exponencialcrescente.jpg?auto_optimize=low" alt="" style="width: 45%;">

            <p>Por sua vez, as funções cujas bases são valores maiores que zero e menores que 1, são <strong>decrescentes</strong>. Por exemplo, f(x) = (1/2)x é uma função decrescente.</p>

            <p>Calculamos a imagem de alguns valores de x e o resultado encontra-se na tabela abaixo.</p>

            <img src="https://static.todamateria.com.br/upload/fu/nc/funcaotabela500.jpg?auto_optimize=low" alt="" style="width: 40%;">


            <p>Notamos que para esta função, enquanto os valores de x aumentam, os valores das respectivas imagens diminuem. Desta forma, constatamos que a função f(x) = (1/2)x é uma função decrescente. </p>

            <p>Com os valores encontrados na tabela, traçamos o gráfico dessa função. Note que quanto maior o x, mais perto do zero a curva exponencial fica. </p>

            <img src="https://static.todamateria.com.br/upload/ep/on/eponencialdecrescente-0.jpg?auto_optimize=low" alt="" style="width: 45%;">

            <p>No gráfico acima, observamos que enquanto a função exponencial cresce rapidamente, a função logarítmica cresce lentamente.</p>
        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(Unesp - 2018) O ibuprofeno é uma medicação prescrita para dor e febre, com meia-vida de aproximadamente 2 horas. Isso significa que, por exemplo, depois de 2 horas da ingestão de 200 mg de ibuprofeno, permanecerão na corrente sanguínea do paciente apenas 100 mg da medicação. Após mais 2 horas (4 horas no total), apenas 50 mg permanecerão na corrente sanguínea e, assim, sucessivamente. Se um paciente recebe 800 mg de ibuprofeno a cada 6 horas, a quantidade dessa medicação que permanecerá na corrente sanguínea na 14ª hora após a ingestão da primeira dose será</p>


                <p>a) 12,50 mg</p>
                <p>b) 456,25 mg</p>
                <p>c) 114,28 mg</p>
                <p>d) 6,25 mg</p>
                <p>e) 537,50 mg</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: b) 456,25 mg
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>Enem (PPL) - 2015
                    O sindicato de trabalhadores de uma empresa sugere que o piso salarial da classe seja de R$ 1 800,00, propondo um aumento percentual fixo por cada ano dedicado ao trabalho. A expressão que corresponde à proposta salarial (s), em função do tempo de serviço (t), em anos, é s(t) = 1 800 . (1,03)t .</p>
                <p>De acordo com a proposta do sindicato, o salário de um profissional dessa empresa com 2 anos de tempo de serviço será, em reais,</p>
                <p>a) 7 416,00</p>
                <p>b) 3 819,24</p>
                <p>c) 3 709,62</p>
                <p> d) 3 708,00</p>
                <p>e) 1 909,62.</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: e) 1 909,62
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Veja mais sobre:</h4>
            <br>
            <li><a href="funcaoAfim.php">Função Afim</a></li>
            <li><a href="funcaoQuadratica.php">Função Quadrática</a></li>

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