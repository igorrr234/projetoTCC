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
    <title>Leis de Newton - Aprenda Fácil</title>
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

        .dinamica h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .dinamica img {
            width: 70%;
            border-radius: 3%;
            margin-bottom: 15px;
        }

        .dinamica {
            align-items: center;
            justify-content: center;
        }

        .dinamica p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .dinamica h2 {
            margin-bottom: 15px;
            margin-top: 25px;
        }

        .dinamica h3 {
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

        .dinamica h5 {
            margin-bottom: 10px;
        }

        .exercicio1 p {
            margin-top: 5px;
            line-height: 1.5;
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
        <div class="dinamica">
            <h1><u>Leis de Newton</u></h1>
            <h2>O que são as leis de Newton?</h2>
            <p>As <strong>Leis de Newton</strong> são os princípios fundamentais usados para analisar o movimento dos corpos. Juntas, elas formam a base da fundamentação da mecânica clássica.</p>

            <p>As três leis de Newton foram publicadas pela primeira vez em 1687 por <strong>Isaac Newton (1643-1727)</strong> na obra de três volumes <strong>"Princípios Matemáticos da Filosofia Natural" (Philosophiae Naturalis Principia Mathematica)</strong>.</p>
            <p><strong>Isaac Newton</strong> foi um dos mais importantes cientista da história, tendo deixado importantes contribuições, principalmente na física e na matemática.</p>
            <img src="https://img.olhardigital.com.br/wp-content/uploads/2023/05/lei-de-newton.jpg" alt="" style="width: 60%;">

            <!-- leis -->
            <h2 id="primeiraLei">Primeira Lei de Newton</h2>
            <p>A <strong>Primeira Lei de Newton</strong> é também chamada de <strong>"Lei da Inércia"</strong> ou <strong>"Princípio da Inércia"</strong>. Inércia é a tendência dos corpos de permanecerem em repouso ou em <a href="cinematicaEscalar.php#mru">Movimento Retilíneo Uniforme (MRU)</a>.</p>

            <p>Assim, para um corpo sair do seu estado de repouso ou de <a href="cinematicaEscalar.php#mru">Movimento Retilíneo uniforme</a> é necessário que uma força passe a atuar sobre ele.</p>

            <p>Portanto, se a <strong>soma vetorial</strong> das forças for <strong>nula</strong>, resultará no equilíbrio das partículas. Por outro lado, se houver forças resultantes, produzirá variação na sua velocidade.</p>

            <p>Quanto maior for a massa de um corpo, maior será sua <strong>inércia</strong>, ou seja, maior será sua tendência de permanecer em repouso ou em movimento retilíneo uniforme.</p>

            <p>Para exemplificar, pensemos num ônibus em que o motorista, que está numa determinada velocidade, se depara com um cão e rapidamente, freia o veículo.</p>

            <p>Nesta situação, a tendência dos passageiros é continuar o movimento, ou seja eles são jogados para frente.

            </p>

            <img src="https://static.todamateria.com.br/upload/le/id/leidenewtoncavalo.jpg?auto_optimize=low" alt="" style="width: 55%;">
            <h5>Como o cavalo parou bruscamente, por inércia, o cavaleiro foi arremessado</h5>
            <br>

            <h2 id="segundaLei">Segunda Lei de Newton</h2>
            <p>A <strong>Segunda Lei de Newton</strong> é o "<strong>Princípio Fundamental da Dinâmica</strong>". Nesse estudo, Newton constatou que a força resultante (soma vetorial de todas as forças aplicadas) é diretamente proporcional ao produto da aceleração de um corpo pela sua massa:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAaCAYAAADygtH/AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAVrfl2dQAAAeFJREFUeNpjYCAPrAJiSYZRQBLIAOJPQJw10gPiP5l49mgaIg5kjaa00TJtFIyCUTAkwXwg5hkNBtIAqHVwC4jN8Sn6gaVZ8QuImUZAiwBf0+oPEKth06gCxBdGExdGSrsLxKa4FAQA8dLRcCKtTKsH4vJB4liYW8SBeBIQvwTi50DsBZUXBOI+IH4HbWhXUsleUDHUCLXvFzTnyRNqtAbQuWuGzy2ggDsDxJFAzAJ1/H1ow/ogEIdDxWWhZbE4Fdy8BRpJgtAAJBgmt7B4SnqAUhrILXuhjkcGT6HlDDZxSnspkdBAQgYLkVI31mT5ZZBkTZBbvgExF4nilIL9QGyJJnYQX/Y0h8YswyDInuZQD1AqTir4hta0IpiQIqE1BTEFNHLb5QMQd1E5sHG5hVRxUsFrNL41EJ/DpwFU+CUTOcIRgBQTLtAazJKKgQZySxoVxEkFoHKRA4lfC8Rr8GlYh6/AQyugZdHEbgCxKBUDDZdbSBXHVlTgA81APBOaGOShbdZt+DS8QwtlfAU0DEhCs2YolbMnLreQKk5qoIFANTQ31ULNfElpM8wcqSwDNfw2YUl1ww1QnIOQC1w2aI3FNtrTIlxAI1cWsdBkPApILKCPj4AsSvUC2haIN4ykQAAAtlqYvAPZg10AAADmdEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1vdmVyPjxtc3ViPjxtaT5GPC9taT48bWk+UjwvbWk+PC9tc3ViPjxtbz4mI3gyMTkyOzwvbW8+PC9tb3Zlcj48bW8+PTwvbW8+PG1pPm08L21pPjxtbz4mI3hBMDs8L21vPjxtbz4uPC9tbz48bW8+JiN4QTA7PC9tbz48bW92ZXI+PG1pPmE8L21pPjxtbz4mI3gyMTkyOzwvbW8+PC9tb3Zlcj48L21hdGg+iYIgrQAAAABJRU5ErkJggg==" alt="" style="width: 8% ;">

            <p>No <strong>Sistema Internacional (SI)</strong> as unidades de medida são: <strong>F (força) é indicada em Newton (N); m (massa) em quilograma (kg) e a (aceleração adquirida) em metros por segundo ao quadrado (m/s²)</strong>.</p>

            <img src="https://static.todamateria.com.br/upload/ma/ss/massa.jpg?auto_optimize=low" alt="" style="width: 55%;">
            <p>Importante ressaltar que a força é um vetor, ou seja, possui <strong>módulo</strong>, <strong>direção</strong> e <strong>sentido</strong>.</p>

            <p>Dessa forma, quando várias forças atuam sobre um corpo, elas se somam vetorialmente. O resultado desta <strong>soma vetorial</strong> é a <strong>força resultante</strong>.</p>

            <p>A seta acima das letras na fórmula representa que as grandezas força e aceleração são vetores. A direção e o sentido da aceleração serão os mesmos da força resultante.</p>


            <h2 id="terceiraLei">Terceira Lei de Newton</h2>

            <p>A <strong>Terceira Lei de Newton</strong> é chamada de "<strong>Lei da Ação e Reação</strong>" ou "<strong>Princípio da Ação e Reação</strong>" no qual toda força de ação é correspondida por uma força de reação.</p>

            <p>Dessa maneira, as forças de ação e reação, que atuam em pares, não se equilibram, uma vez que estão aplicadas em corpos diferentes.</p>

            <p>Lembrando que essas forças apresentam a mesma intensidade, mesma direção e sentidos opostos.</p>

            <p>Para exemplificar, pensemos em dois patinadores parados um de frente para o outro. Se um deles der um empurrão no outro, ambos irão se mover em sentidos opostos.</p>

            <img src="https://static.todamateria.com.br/upload/le/id/leidenewtonfoguete1.jpg?auto_optimize=low" alt="" style="width: 40%;">

            <br>
            <h2>Resumo da Lei de Newton</h2>

            <p>No mapa mental abaixo temos os principais conceitos envolvidos nas <strong>três leis de Newton</strong>.</p>

            <img src="https://static.todamateria.com.br/upload/ma/pa/mapamentalleicinza.jpg?auto_optimize=low" alt="">
            <br>

            <div class="video">

                <h2>Veja o vídeo a seguir:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5AEZCsEAopY?si=GG1JNpcoAmZ_RK2B" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>1) UERJ - 2018
                    Em um experimento, os blocos I e II, de massas iguais a 10 kg e a 6 kg, respectivamente, estão interligados por um fio ideal. Em um primeiro momento, uma força de intensidade F igual a 64 N é aplicada no bloco I, gerando no fio uma tração TA. Em seguida, uma força de mesma intensidade F é aplicada no bloco II, produzindo a tração TB. Observe os esquemas:</p>
                <img src="https://static.todamateria.com.br/upload/ue/rj/uerj2018q42.jpg?auto_optimize=low" alt="" style="width: 25% ;">
                <p>Desconsiderando os atritos entre os blocos e a superfície S, a razão entre as trações Ta/Tb corresponde a:</p>
                <p>a)9/10</p>
                <p>b) 4/7</p>
                <p>c) 3/5 </p>
                <p>d) 8/13</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: c) 3/5
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>2) UFRJ - 2002
                    A figura abaixo mostra um sistema constituído por fios inextensíveis e duas roldanas, todos de massa desprezível. A roldana A é móvel, e a roldana B é fixa. Calcule o valor da massa m1 para que o sistema permaneça em equilíbrio estático.</p>
                <img src="https://static.todamateria.com.br/upload/fo/rc/forcaufrj20021.jpg?auto_optimize=low" alt="" style="width: 15% ;">
                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: Como a roldana A é móvel, a força de tração que equilibra a força peso será dividida por dois. Assim, a força de tração em cada fio será metade da força peso. Portanto, a massa m1 deverá ser igual a metade de 2kg.
                        Assim m1 = 1 kg
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Não deixe de aprender mais:</h4>
            <br>
            <li><a href="vetor.php">Vetores</a></li>
            <li><a href="cinematicaEscalar.php">Cinemática Escalar</a></li>


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