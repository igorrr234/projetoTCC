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
    <title>Óptica Geométrica - Aprenda Fácil</title>
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

        .optica h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .optica img {
            width: 70%;
            border-radius: 3%;
            margin-bottom: 15px;
        }

        .optica {
            align-items: center;
            justify-content: center;
        }

        .optica p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .optica h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .optica h3 {
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

        .optica h5 {
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
        <div class="optica">
            <h1><u>Óptica Geométrica</u></h1>
            <h2>O que é Óptica Geométrica?</h2>
            <p>A <strong>óptica geométrica</strong> é a área da Física que estuda o <strong>comportamento da luz</strong> e os fenômenos relacionados a ela. Seus estudos estão relacionados, principalmente, às formas de propagação da luz, aos tipos de meio de propagação da luz, aos tipos de fonte de emissão de luz e a alguns fenômenos luminosos, como a refração, reflexão e absorção da luz."</p>

            <h2>Princípios da óptica geométrica</h2>

            <p>A óptica geométrica se sustenta em três princípios:</p>
            <p><strong>- Princípio da propagação retilínea dos raios luminosos:</strong> considera que os raios luminosos se propagam em linha reta nos meios transparentes e homogêneos.</p>

            <p><strong>- Princípio da reversibilidade dos raios de luminosos:</strong> informa que os raios luminosos são reversíveis, o que significa que conseguem modificar o seu sentido de propagação sem mudar a sua direção.</p>


            <p><strong>- Princípio da independência dos raios luminosos:</strong> informa que a trajetória dos raios de luz não é modificada, ainda que eles atravessem outro raio de luz.</p>


            <h2>Formas de Propagação da Luz</h2>

            <img src="https://s1.static.brasilescola.uol.com.br/be/2023/11/formas-propagacao-luz.jpg" alt="" style="width: 55%;">
            <h5>Formas de propagação da luz</h5>

            <p>Os raios luminosos são capazes de se propagar de três formas, por <strong>feixes paralelos</strong>, <strong>feixes divergentes</strong> e <strong>feixes convergentes</strong>.</p>


            <p><strong>- Feixes Paralelos:</strong> são aqueles pelos quais os raios luminosos se propagam paralelamente uns aos outros. Por exemplo, os holofotes.</p>

            <p><strong>- Feixes Divergentes:</strong> são aqueles pelos quais os raios luminosos são dispersos. Por exemplo, as lâmpadas, quando acesas, divergem da luz.</p>


            <p><strong>- Feixes Convergentes:</strong> são aqueles pelos quais os raios luminosos se direcionam a um ponto. Por exemplo, quando posicionamos uma luz sobre uma lupa, ela converge à luz de tal forma que é capaz de provocar faíscas.</p>

            <h2>Tipos de meios na óptica geométrica</h2>

            <p>Na óptica geométrica consideramos três meios de propagação da luz, que se diferem quanto a sua propagação no interior do meio, sendo eles: <strong>meios opacos</strong>, <strong>meios translúcidos</strong> e <strong>meios transparentes</strong>.</p>

            <img src="https://s1.static.brasilescola.uol.com.br/be/2023/11/meios-propagacao-luz.jpg" alt="" style="width: 55%;">

            <h5>Meios de propagação da luz.</h5>


            <p><strong>- Meios Opacos:</strong> não permitem que os raios de luz os atravessem, então não conseguimos observar nada que esteja atrás deles. São exemplos: madeira, papelão e concreto.</p>

            <p><strong>- Meios Translúcidos:</strong> por eles os raios de luz se propagam irregularmente, permitindo que observemos de forma distorcida o que está atrás deles. São exemplos: papel vegetal, papel manteiga e vidro fosco.</p>


            <p><strong>- Meios Transparentes:</strong> por eles os raios de luz se propagam regularmente, permitindo que observemos nitidamente o que está atrás deles. São exemplos: vidro, ar e água pura.</p>


            <h2>Fenômenos da óptica geométrica</h2>

            <p>Os <strong>fenômenos ondulatórios</strong> são o comportamento que uma onda exibe frente a um obstáculo. Na óptica geométrica, que tem a luz como objeto de estudo, são estudados os fenômenos da <strong>reflexão, refração e absorção</strong>.</p>

            <img src="https://s5.static.brasilescola.uol.com.br/be/2023/11/fenomenos-luminosos.jpg" alt="" style="width: 50%;">

            <p><strong>- Reflexão:</strong> é o fenômeno ondulatório que consiste no raio luminoso, ao atingir um obstáculo, voltar até o observador. Como não ocorre mudança de meio, a velocidade de propagação da luz não se altera. Esse fenômeno possibilita que enxerguemos o nosso reflexo.</p>

            <p><strong>- Refração:</strong> é o fenômeno ondulatório que consiste na alteração da velocidade de propagação da luz quando ela muda de meio. Esse fenômeno permitiu o desenvolvimento das lentes e explica as distorções de posição de imagens formadas na água (dioptro plano).</p>


            <p><strong>- Absorção:</strong> é o fenômeno ondulatório que consiste na absorção da luz por alguns corpos, dependendo da sua cor e da onda emitida. Esse fenômeno explica por que as casas pintadas de preto são mais quentes do que as pintadas de branco.</p>
        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(Enem) No Hemisfério Sul, o solstício de verão (momento em que os raios solares incidem verticalmente sobre quem se encontra sobre o Trópico de Capricórnio) ocorre no dia 21 ou 23 de dezembro. Nessa data, o dia tem o maior período de presença de luz solar. A figura mostra a trajetória da luz solar nas proximidades do planeta Terra quando ocorre o fenômeno óptico que possibilita que o Sol seja visto por mais tempo pelo observador.</p>
                <img src="https://s5.static.brasilescola.uol.com.br/be/2023/11/questao-um.jpg" alt="" style="width: 50%;">

                <br>
                <p>a) A refração da luz solar ao atravessar camadas de ar com diferentes densidades.</p>

                <p>b) A polarização da luz solar ao incidir sobre a superfície dos oceanos.</p>

                <p>c) A reflexão da luz solar nas camadas mais altas da ionosfera.</p>

                <p>d) A difração da luz solar ao contornar a superfície da Terra.</p>

                <p>e) O espalhamento da luz solar ao atravessar a atmosfera.</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: a) A refração da luz solar ao atravessar camadas de ar com diferentes densidades.
                    </p>
                </div>

                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>"(PUC) Foi René Descartes, em 1637, o primeiro a discutir claramente a formação do arco-íris. Ele escreveu: “Considerando que esse arco-íris aparece não apenas no céu, mas também no ar perto de nós, sempre que haja gotas de água iluminadas pelo Sol, como podemos ver em certas fontes, eu imediatamente entendi que isso acontece devido apenas ao caminho que os raios de luz traçam nessas gotas e atingem nossos olhos. Ainda mais, sabendo que as gotas são redondas, como fora anteriormente provado e, mesmo que sejam grandes ou pequenas, a aparência do arco-íris não muda de forma nenhuma, tive a ideia de considerar uma bem grande, para que pudesse examinar melhor…"</p>
                <p>Assinale os fenômenos ópticos responsáveis pela formação do arco-íris:</p>

                <p>a) Interferência e refração</p>

                <p>b) Reflexão e interferência</p>

                <p>c) Difração e refração</p>

                <p>d) Refração e reflexão</p>
                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: d) Refração e reflexão
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
                <br>
                <h4>Não deixe de aprender mais:</h4>
                <br>
                <li><a href=""> Cinemática Escalar</a></li>

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