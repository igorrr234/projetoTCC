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
    <title>Média, Moda e Mediana - Aprenda Fácil</title>
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

        .med {
            align-items: center;
            justify-content: center;
        }

        .med h4 {
            margin-bottom: 7px;
        }

        .med h1 {
            text-align: center;
            align-items: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .med img {
            display: flex;
            width: 70%;
            border-radius: 3%;
            margin-bottom: 30px;
            margin-top: 20px;
        }

        .med p {
            font-size: 17px;
            line-height: 1.4;
            margin-bottom: 16px;
        }

        .med h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .med h3 {
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

        .med h5 {
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
        <div class="med">
            <h1><u>Média, Moda e Mediana</u></h1>
            <p><strong>Média, Moda e Mediana</strong> são medidas de tendência central utilizadas em estatística.</p>

            <h2>Média</h2>
            <p>A <a href="">média (Me)</a> é calculada somando-se todos os valores de um conjunto de dados e dividindo-se pelo número de elementos deste conjunto. </p>
            <p>Como a média é uma medida sensível aos valores da amostra, é mais adequada para situações em que os dados são distribuídos mais ou menos de forma uniforme, ou seja, valores sem grandes discrepâncias.</p>

            <h3>Fórmula</h3>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM8AAAAlCAYAAADlXr27AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAdoyL+RwAAA2hJREFUeNrtnD9oFFEQxh8hBAmSJoiEFEIIkkJEsBARsTlExMJOLCxCIIiFiAipREQCqUTExkJEUgRCCEFEBAliYSEEERE5bMRC7CxEQhDhnI+bxXV9+8e73b3Z3e8HH/juXmCc3dn3Zt7cOkeS6NAe0/Z0eIv2xpxoyfP5Lf2u7ItDe2wHTxn+qBRvRHtD41nRvQE+2WiP7ZWnaH9UilOi2/rvlmhzwBeH9tgOnqL9UTmei06I3orGc7gYaaI9/dlTJ39Uniuin6KDRhJS2mO7YFCkPyrFMdGaLsXnE+btF13Xp02RFyeLPcETEhfwlWjakD3wz8kaB0/W+6X2TIkei0ZFu0VbCcvwsmi+B2d3CrIHDIkuaRJrwR4wI/pc0+DpxR+1ZI/oaeQ/f0aDJM+L3SnYHrBjyB4E9LeCbl5fTpL1s7L90dbvt3RFXqhL4IyI1kWTnu9WtKJS5pOyH3uQuL40Yg9uLJRtZwtO9vMMniL8gQfILw0s/M2h/3yg1BZLJ9ITmvNMGfELdIG3iDuiK044T9qkW+wEDwoYTzSArDAmWtTcsMmgkPAoMn7I0LERPBO6/x4z6qOdht8jd0UXI+O5rI5rpcxp6Z5wiMHTEwicGaP+OR7ZsjQR5EenQ+ONyNjLtN5cSb0+KPGhlPmugkFT5kl4VWwJ24MH5zPRvoYHD4oDuxLGXs667iHZ14Q593XOCneAhPzhhuvWs9tacfBt17Di3HQ1qnsTkgeruvosqsLgVPaj69a8g3l5bVksbWEI6QkEx6SuOm1PBSIIqLbzHzgR0khQOdsOjZH3BBUhHBK9Fw175g060aaoQegvsNq8iBQGFkLbtcMx87htI40neoqK4sBr0Z1I/sPTVkI8Oc18ZBv3XfRBt2tx8whpPNFTVbAc2q4lzQtY0oDDIeoBupQ0hUynqAnzwv0/+JnrA7qUkHTQ6PglNMbPeNfoFkLSOef+rZixqEBIBhr94jhC+gFnPxt0g1nQs3jNdd+UiR3Btuaul+kaG1wVfXLdlyVg2zZCl5hhVQMFgYN3JuAYAu1V+AnCKN1DSDzoEPGdzWH1Gad7CPGDVeaH5/NhN7geRUIqk4/6ehGPuv56FAmpPXG9iOxRJCSFuDe/ZH4jDCFNJa4XMalHkRDi4nsRs/YykgR+A+fV0yIYRFPMAAABd3RFWHRNYXRoTUwAPG1hdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTgvTWF0aC9NYXRoTUwiPjxtc3ViPjxtaT5NPC9taT48bWk+ZTwvbWk+PC9tc3ViPjxtbz49PC9tbz48bWZyYWM+PG1yb3c+PG1zdWI+PG1pPng8L21pPjxtbj4xPC9tbj48L21zdWI+PG1vPis8L21vPjxtc3ViPjxtaT54PC9taT48bW4+MjwvbW4+PC9tc3ViPjxtbz4rPC9tbz48bXN1Yj48bWk+eDwvbWk+PG1uPjM8L21uPjwvbXN1Yj48bW8+KzwvbW8+PG1vPi48L21vPjxtbz4uPC9tbz48bW8+LjwvbW8+PG1vPis8L21vPjxtc3ViPjxtaT54PC9taT48bWk+bjwvbWk+PC9tc3ViPjwvbXJvdz48bWk+bjwvbWk+PC9tZnJhYz48bXNwYWNlIGxpbmVicmVhaz0ibmV3bGluZSIvPjwvbWF0aD79tUhzAAAAAElFTkSuQmCC" alt="" style="width: 20%;">

            <p>Sendo:</p>

            <p><strong>Me</strong>: média
            <p><strong>x1, x2, x3,..., xn</strong>: valores dos dados</p>
            <p><strong>n</strong>: número de elementos do conjunto de dados</p>

            <h3>Exemplo</h3>
            <p>Os jogadores de uma equipe de basquete apresentam as seguintes idades: 28, 27, 19, 23 e 21 anos. Qual a média de idade desta equipe?</p>

            <h4>Solução</h4>
            <img src="data:image/png;base64,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" alt="" style="width: 20%;">


            <h2>Moda</h2>

            <p>A <a href="">Moda (Mo)</a> representa o valor mais frequente de um conjunto de dados, sendo assim, para defini-la basta observar a frequência com que os valores aparecem.</p>

            <p>Um conjunto de dados é chamado de bimodal quando apresenta duas modas, ou seja, dois valores são mais frequentes.</p>

            <h3>Exemplo</h3>

            <p>Em uma sapataria durante um dia foram vendidos os seguintes números de sapato: 34, 39, 36, 35, 37, 40, 36, 38, 36, 38 e 41. Qual o valor da moda desta amostra?</p>
            <h4>Solução</h4>

            <p>Observando os números vendidos notamos que o número 36 foi o que apresentou maior frequência (3 pares), portanto, a moda é igual a:</p>
            <p><strong>Mo = 36</strong></p>

            <h2>Mediana</h2>

            <p>A <a href="">Mediana (Md)</a> representa o valor central de um conjunto de dados. Para encontrar o valor da mediana é necessário colocar os valores em ordem crescente ou decrescente.</p>

            <p>Quando o número elementos de um conjunto é par, a mediana é encontrada pela média dos dois valores centrais. Assim, esses valores são somados e divididos por dois.</p>
            <h3>Exemplo</h3>

            <p>1) Em uma escola, o professor de educação física anotou a altura de um grupo de alunos. Considerando que os valores medidos foram: 1,54 m; 1,67 m, 1,50 m; 1,65 m; 1,75 m; 1,69 m; 1,60 m; 1,55 m e 1,78 m, qual o valor da mediana das alturas dos alunos?</p>
            <h4>Solução</h4>

            <p>Primeiro devemos colocar os valores em ordem. Neste caso, colocaremos em ordem crescente. Assim, o conjunto de dados ficará:</p>
            <p>1,50; 1,54; 1,55; 1,60; 1,65; 1,67; 1,69; 1,75; 1,78</p>

            <p>Como o conjunto é formado por 9 elementos, que é um número ímpar, então a mediana será igual ao 5º elemento, ou seja:</p>

            <p><strong>Md = 1,65 m</strong></p>

        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(BB 2013 – Fundação Carlos Chagas). Nos quatro primeiros dias úteis de uma semana o gerente de uma agência bancária atendeu 19, 15, 17 e 21 clientes. No quinto dia útil dessa semana esse gerente atendeu n clientes.</p>
                <p>Se a média do número diário de clientes atendidos por esse gerente nos cinco dias úteis dessa semana foi 19, a mediana foi?</p>

                <p>a) 21. </p>

                <p>b) 19.</p>

                <p>c) 18.</p>

                <p>d) 20.</p>

                <p>e) 23.</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: b) 19
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(UFT 2013) A altura média dos 35 índios adultos de uma aldeia é 1,65 m. Analisando apenas as alturas dos 20 homens, a média é igual a 1,70 m. Qual a média, em metros, das alturas se considerarmos apenas as mulheres?</p>

                <p>a) 1,46</p>

                <p>b) 1,55</p>

                <p>c) 1,58</p>

                <p>d) 1,60</p>

                <p>e) 1,65</p>


                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: c) 1,58
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
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