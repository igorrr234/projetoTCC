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
    <title>Inequações 1° Grau - Aprenda Fácil</title>
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

        .inequacao h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .inequacao img {
            width: 70%;
            border-radius: 1%;
            margin-bottom: 15px;
        }

        .inequacao {
            align-items: center;
            justify-content: center;
        }

        .inequacao p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .inequacao h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .inequacao h3 {
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

        .inequacao h5 {
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
        <div class="inequacao">
            <h1><u>Inequação do Primeiro Grau</u></h1>
            <h2>O que é uma Inequação?</h2>
            <p><strong>Inequação</strong> é uma sentença matemática que apresenta pelo menos um valor desconhecido (incógnita) e representa uma desigualdade.</p>

            <h3>Inequação do Primeiro Grau</h3>
            <p>Uma inequação é do <strong>1º grau</strong> quando o maior expoente da incógnita é igual a 1. Podem assumir as seguintes formas:</p>


            <p><strong>- ax + b >0</strong></p>
            <p><strong>- ax + b < 0</strong>
            </p>
            <p><strong>- ax + b ≥ 0</strong></p>
            <p><strong>- ax + b ≤ 0</strong></p>
            <h5>Sendo a e b números reais e a ≠ 0</h5>

            <h3>Resolução de uma inequação do primeiro grau.</h3>

            <p>Para resolver uma inequação desse tipo, podemos fazer da mesma forma que fazemos nas equações.</p>

            <p>Contudo, devemos ter cuidado quando a incógnita ficar negativa.</p>

            <p>Nesse caso, devemos multiplicar por (-1) e inverter o símbolo da desigualdade.</p>

            <h3>Exemplos</h3>


            <p>a) Resolva a inequação 3x + 19 < 40</p>

                    <p>Para resolver a inequação devemos isolar o x, passando o 19 e o 3 para o outro lado da desigualdade.</p>

                    <p>Lembrando que ao mudar de lado devemos trocar a operação. Assim, o 19 que estava somando, passará diminuindo e o 3 que estava multiplicando passará dividindo.</p>

                    <p>3x < 40 -19</p>
                            <p>x < 21/3</p>
                                    <p><strong>x < 7</strong>
                                    </p>
                                    <p>b) Como resolver a inequação 15 - 7x ≥ 2x - 30?</p>

                                    <p>Quando há termos algébricos (x) dos dois lados da desigualdade, devemos juntá-los no mesmo lado.</p>
                                    <p>Ao fazer isso, os números que mudam de lado tem o sinal alterado.</p>

                                    <p>15 - 7x ≥ 2x - 30</p>
                                    <p>- 7x - 2 x ≥ - 30 -15</p>
                                    <p>- 9x ≥ - 45</p>

                                    <p>Agora, vamos multiplicar toda a inequação por (-1). Para tanto, trocamos o sinal de todos os termos:</p>

                                    <p>9x ≤ 45 (observe que invertemos o símbolo ≥ para ≤)</p>
                                    <p>x ≤ 45/9</p>
                                    <p><strong>x ≤ 5</strong></p>

                                    <p>Portanto, a solução dessa inequação é <strong>x ≤ 5</strong>.</p>

                                    <h3>Resolução usando o gráfico da inequação</h3>
                                    <p>Outra forma de resolver uma inequação é fazer um gráfico no plano cartesiano.</p>

                                    <p>No gráfico, fazemos o estudo do sinal da inequação identificando que valores de x transformam a desigualdade em uma sentença verdadeira.</p>

                                    <p>Para resolver uma inequação usando esse método devemos seguir os passos:</p>

                                    <p>1º) Colocar todos os termos da inequação em um mesmo lado.</p>
                                    <p>2º) Substituir o sinal da desigualdade pelo da igualdade.</p>
                                    <p>3º) Resolver a equação, ou seja encontrar sua raiz.</p>
                                    <p>4º) Fazer o estudo do sinal da equação, identificando os valores de x que representam a solução da inequação.</p>

                                    <h3>Exemplo</h3>



                                    <p>Resolva a inequação 3x + 19 < 40.</p>

                                            <p>Primeiro, vamos escrever a inequação com todos os termos de um lado da desigualdade:</p>

                                            <p>3x + 19 - 40 < 0</p>
                                                    <p>3x - 21 < 0</p>

                                                            <p>Essa expressão indica que a solução da inequação são os valores de x que tornam a inequação negativa (< 0)</p>

                                                                    <p>Encontrar a raiz da equação 3x - 21 = 0</p>

                                                                    <p>x = 21/3</p>
                                                                    <p><strong>x = 7 (raiz da equação)</strong></p>

                                                                    <p>Representar no plano cartesiano os pares de pontos encontrados ao substituir valores no x na equação. O gráfico deste tipo de equação é uma reta.</p>


                                                                    <img src="https://static.todamateria.com.br/upload/in/eq/inequaa_ao1grau1.jpg" alt="" style="width:35%">
                                                                    <h5>Identificamos que os valores < 0 (valores negativos) são os valores de x < 7. O valor encontrado coincide com o valor que encontramos ao resolver diretamente (exemplo a, anterior).</h5>


        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(ENEM 2020 Digital). Na última eleição para a presidência de um clube, duas chapas se inscreveram (I e II). Há dois tipos de sócio: patrimoniais e contribuintes. Votos de sócios patrimoniais têm peso 0,6 e de sócios contribuintes têm peso 0,4. A chapa I recebeu 850 votos de sócios patrimoniais e 4 300 de sócios contribuintes; a chapa II recebeu 1 300 votos de sócios patrimoniais e 2 120 de sócios contribuintes. Não houve abstenções, votos em branco ou nulos, e a chapa I foi vencedora. Haverá uma nova eleição para a presidência do clube, com o mesmo número e tipos de sócios, e as mesmas chapas da eleição anterior. Uma consulta feita pela chapa II mostrou que os sócios patrimoniais não mudarão seus votos, e que pode contar com os votos dos sócios contribuintes da última eleição. Assim, para que vença, será necessária uma campanha junto aos sócios contribuintes com o objetivo de que mudem seus votos para a chapa II.</p>
                <p>A menor quantidade de sócios contribuintes que precisam trocar seu voto da chapa I para a chapa II para que esta seja vencedora é</p>

                <p>a) 449</p>

                <p>b) 753</p>

                <p>c) 866</p>

                <p>d) 941</p>

                <p>e) 1 091</p>


                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: b) 753
                    </p>
                </div>

                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(UNESP). Carlos trabalha como disc-jóquei (dj) e cobra uma taxa fixa de R$100,00, mais R$20,00 por hora, para animar uma festa. Daniel, na mesma função, cobra uma taxa fixa de R$55,00, mais R$35,00 por hora. O tempo máximo de duração de uma festa, para que a contratação de Daniel não fique mais cara que a de Carlos, é:</p>

                <p>a) 6 horas</p>

                <p>b) 5 horas</p>

                <p>c) 4 horas</p>

                <p>d) 3 horas</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: d) 3 horas
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