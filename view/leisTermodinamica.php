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
    <title>Leis da Termodinâmica - Aprenda Fácil</title>
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

        .termodinamica h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .termodinamica img {
            width: 70%;
            border-radius: 3%;
            margin-bottom: 15px;
        }

        .termodinamica {
            align-items: center;
            justify-content: center;
        }

        .termodinamica p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .termodinamica h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .termodinamica h3 {
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

        .termodinamica h5 {
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
        <div class="termodinamica">
            <h1><u>Leis da Termodinâmica</u></h1>
            <h2>O que dizem as Leis da Termodinâmica?</h2>
            <p>As <strong>leis fundamentais da termodinâmica</strong> regem o modo como o calor se transforma em trabalho e vice-versa.</p>
            <img src="https://conceitosdomundo.pt/wp-content/uploads/2021/10/termodinamica.png" alt="">

            <h2>Primeira Lei da Termodinâmica</h2>

            <p>A <strong>Primeira Lei da Termodinâmica</strong> se relaciona com o princípio da <strong>conservação da energia</strong>. Isso quer dizer que a energia em um sistema não pode ser destruída nem criada, somente transformada.</p>

            <p>A fórmula que representa a primeira lei da termodinâmica é a seguinte:</p>

            <img src="https://static.todamateria.com.br/upload/57/6c/576c9f35c1f7e-termodinamica.jpg" alt="" style="width: 20%;">

            <p>Alguns autores utilizam a letra W para designar trabalho, assim como, expressar a fórmula assim:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAAAOCAYAAACiqXukAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAMyZLetQAAAkBJREFUeNrlV7FKA0EQDUcQiyBYiIQQBBFJIRKQIEFEbETEQgSR/IBFsAxYpJD0IiIiSLAIIQhiIZLCxsLSRiSFBEEsJFgEggQRCQfnLryFcbndC3qrpw4Ml30zmb2bnXm7GwrpxYGGvujXbZzPSpJphWmbaQfPCnATUmf6wtSS8CN8Z0nCo8DvdEEnmN7CcT3ACV9lapM5qNqw+y17iD8n4Q3gdQlfA77jlcQNpln8jgcw4aOoaAdJiAHn77oP/I1pwud5lxD7gGAxabH7ie0M2LwqYBwOvMp7XIIHJeGi0soKe5kshp8SRvc8EWxFSvgy8e1ALV2CbDIuALMMJLypoAOqDcV/72FParjdgZ/fcoHYaYxFR53juSt1w5kqUAQOWwQbAJYLWIV3PArBIrTit+QRexvja4xFpV8BL2KcVQXKuXCQSFrzlya8Y6C7UqR7BMW8wvaMcRi042C/Ub6gGycmYMu42OwuKMfER9dhT/0ApXBpkcMFf1aBn2Bc8Jo/A4cxTeJqmomnNJXQNrhpHivsJYlP/RZx7n4kCaYs0fCa38FmoJIZ+MxK+CFZyTSpdJ7sG9hODXzwCPjZwaYVI0c0sRj8gjJkKOEZqRMXpTzJ+AeZ9jorkkWpStgg0wcNJbRUHGb44sO7asHgDTcqzRch1GwTKg27/bnaBZc6mhbuQ0vVMIk4pxY9Lk1+yDjaW2xWNmllfiybZNpraO6a4nZ5qSjOPynDWAC58vPf/B4WLo7/Rjh3b6IK80F4oXdpLhray5jFwgAAAPR0RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bW8gbWF0aHZhcmlhbnQ9ImJvbGQiPiYjeDIyMDY7PC9tbz48bWkgbWF0aHZhcmlhbnQ9ImJvbGQiPlU8L21pPjxtbyBtYXRodmFyaWFudD0iYm9sZCI+PTwvbW8+PG1pIG1hdGh2YXJpYW50PSJib2xkIj5RPC9taT48bW8gbWF0aHZhcmlhbnQ9ImJvbGQiPi08L21vPjxtaSBtYXRodmFyaWFudD0iYm9sZCI+VzwvbWk+PC9tYXRoPipyShYAAAAASUVORK5CYII=" alt="" style="width: 8%;">

            <p>A quantidade de calor, o trabalho e a variação de energia interna possuem como unidade de medida padrão o Joule (J).</p>

            <p>Um exemplo prático da conservação de energia ocorre quando uma pessoa usa uma bomba para encher um objeto inflável, ela está usando força para colocar ar dentro do objeto. Isso significa que a energia cinética é usada para mover o pistão da bomba para baixo.</p>

            <h2>Segunda Lei da Termodinâmica</h2>

            <p>As <strong>transferências de calor</strong> ocorrem sempre do corpo mais quente para o corpo mais frio, isso acontece de forma espontânea, mas o contrário não. O que significa dizer que os processos de transferência de energia térmica são irreversíveis.</p>

            <p>Desse modo, pela <strong>Segunda Lei da Termodinâmica</strong>, não é possível que o calor se converta integralmente em outra forma de energia. Por esse motivo, o calor é considerado uma forma degradada de energia.</p>

            <img src="https://static.todamateria.com.br/upload/57/6c/576c7e2b5f79c-termodinamica.jpg?auto_optimize=low" alt="" style="width: 45%;">
            <h5>Exemplo da Segunda Lei da Termodinâmica</h5>
            <br>
            <p>A grandeza física relacionada com a Segunda Lei da Termodinâmica é a <strong>entropia</strong>, que corresponde ao grau de desordem de um sistema.</p>

            <h2>Lei Zero da Termodinâmica</h2>

            <p>A <strong>Lei Zero da Termodinâmica</strong> trata das condições para a obtenção do <strong>equilíbrio térmico</strong>. Dentre essas condições podemos citar a influência dos materiais que tornam a condutividade térmica maior ou menor.</p>
            <p>Segundo essa lei,</p>

            <p><strong>1. se um corpo A está em equilíbrio térmico em contato com um corpo B e</strong></p>
            <p><strong>2. se esse corpo A está em equilíbrio térmico em contato com um corpo C, logo</strong></p>
            <p><strong>3. B está em equilíbrio térmico em contato com C.</strong></p>

            <p>Quando <strong>dois corpos com temperaturas diferentes</strong> são colocados em contato, aquele que estiver mais quente irá transferir calor para aquele que estiver mais frio. Isso faz com que as temperaturas se igualem chegando ao <strong>equilíbrio térmico.</strong></p>

            <p>É chamada de lei zero porque o seu entendimento mostrou-se necessário para as primeiras duas leis que já existiam, a primeira e a segunda leis da termodinâmica.</p>

            <h2>Terceira Lei da Termodinâmica</h2>

            <p>A <strong>Terceira Lei da Termodinâmica</strong> surge como uma tentativa de estabelecer um ponto de referência absoluto que determine a entropia. A entropia é, na verdade, a base da Segunda Lei da Termodinâmica.</p>

            <p>Walther Nernst, o físico que a propôs, concluiu que não era possível que uma substância pura com temperatura zero apresentasse a entropia num valor aproximado a zero.</p>


            <p>Por esse motivo, trata-se de uma lei polêmica, considerada por muitos físicos como uma regra e não uma lei.</p>
        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(Adaptado do ENEM 2011) Um motor só poderá realizar trabalho se receber uma quantidade de energia de outro sistema. No caso, a energia armazenada no combustível é, em parte, liberada durante a combustão para que o aparelho possa funcionar. Quando o motor funciona, parte da energia convertida ou transformada na combustão não pode ser utilizada para a realização de trabalho. Isso quer dizer que há vazamento da energia em outra forma.</p>
                <p>De acordo com o texto, as transformações de energia que ocorrem durante o funcionamento do motor são decorrentes da:</p>

                <p>a) Liberação de calor dentro do motor ser impossível.</p>
                <p>b) Realização de trabalho pelo motor ser incontrolável.</p>
                <p>c) Conversão integral de calor em trabalho ser impossível.</p>
                <p>d) Transformação de energia térmica em cinética ser impossível.</p>
                <p>e) Utilização de energia potencial do combustível ser incontrolável.</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: c) Conversão integral de calor em trabalho ser impossível.
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>Certa máquina térmica recebe 500 J de calor e realiza um trabalho de 125 cal. Sendo 1 cal = 4 J, marque a alternativa correta.</p>


                <p>a) Essa máquina contraria a primeira lei da Termodinâmica.</p>

                <p>b) A máquina não contraria a segunda lei da Termodinâmica.</p>

                <p>c) O rendimento dessa máquina é de 25%.</p>

                <p>d) A máquina não contraria a primeira lei da Termodinâmica, que trata sobre a conservação da energia.</p>

                <p>e) Como o rendimento da máquina é de 25%, podemos afirmar que ela não contraria a primeira lei da Termodinâmica.</p>
                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: d) A máquina não contraria a primeira lei da Termodinâmica, que trata sobre a conservação da energia.
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Não deixe de aprender mais :</h4>
            <br>
            <li><a href="calorEspecifico.php">Calor Específico e Latente</a></li>
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