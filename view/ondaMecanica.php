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
    <title>Ondas Mecânicas - Aprenda Fácil</title>
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
            <h1><u>Ondas Mecânicas</u></h1>
            <h2>O que são Ondas Mecânicas?</h2>
            <p> <strong>Ondas mecânicas</strong> são perturbações que transportam energia cinética e potencial através de um meio material, por exemplo: ondas marítimas, sísmicas e sonoras.</p>
            <p>Ela pode acontecer somente num meio material, mas não transportam matéria e, sim, energia.</p>
            <p>Essas perturbações acontecem na forma de pulsos, os quais são ondas de curta duração que se repetem com intervalos de tempo iguais, ou seja, em movimentos periódicos.</p>


            <h3>Como calcular a sua velocidade?</h3>
            <p>A velocidade com que as ondas mecânicas espalham-se depende de duas propriedades gerais do material em que é transportada: a densidade e a elasticidade.</p>

            <p>O cálculo da velocidade da onda deve considerar o período e o seu comprimento.</p>

            <p>O período é o tempo que a onda leva para completar uma ondulação, enquanto o seu comprimento é a distância que a onda percorre durante um período.</p>

            <p>Assim, para calcular a velocidade, usamos a seguinte fórmula:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAmCAYAAACYsfiPAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAZpE86XgAAAWJJREFUeNpjYBga4A8QfwLiNUAsyzACwH8kfIVhhAANID4D9bTHSPG0EjR5L2UYQWASNJYNRoqHhYH4CxCfGyketkcqwDKGu2dFgfg5EL8E4vtA/A4a48MWbIDGrBcQR0LZs4erZ/OgHpyAJHYOKqY23DyrA8S/gPgCELMgiVsPx1jmAuIb0JJZDUcy/0NKLJ+DahDFIS8JDcULA+ThuVD7Y3HIq0Ddv4lYAwugBubhkC+BypcPlyQjCQ2h4zjkL0A9PKx6KbtxlHZaUPHDRPZkCOFBA+KhDmpEE2+GimcNNw+zQYv9u2ji96HJfVi2ZhZCY8ESrY7bRucOPq0wBvCASkyC8qdA+fFUdOygAkzQRvlraGvmNTSZcwxXDzNA26kgh02D0quGe/fLFOrRP1A6aCR0sG9APfsFmsxHwSgYHFXWqIeHWwCMuCQ+6uFRD496eNTDox4e9fCoh0c9PLg9DAAe5sKLPb9UewAAAQd0RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bXN0eWxlIG1hdGhzaXplPSIxOHB4Ij48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+VjwvbWk+PG1vPj08L21vPjxtZnJhYz48bXJvdz48bW8+JiN4QTA7PC9tbz48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+JiN4M0JCOzwvbWk+PG1vPiYjeEEwOzwvbW8+PC9tcm93PjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5UPC9taT48L21mcmFjPjwvbXN0eWxlPjwvbWF0aD42+SDbAAAAAElFTkSuQmCC" alt="" style="width: 6% ;">

            <p>Onde:</p>
            <p>v = velocidade (m/s)</p>
            <p>λ = comprimento da onda (m)</p>
            <p> T = período da ondulação (s)</p>

            <p>Além do período T e do comprimento λ (lambida), outra característica importante nas ondas é a amplitude A.</p>

            <p>A amplitude é o comprimento que um ponto realiza ao oscilar entre a posição de repouso e o ponto mais alto (crista da onda) ou o mais baixo (vale).

            </p>

            <img src="https://static.todamateria.com.br/upload/on/da/ondasmecanicas.jpg?auto_optimize=low" alt="" style="width: 50%;">
            <h5>Representação de onda mecânica de comprimento λ e amplitude A.</h5>


            <h2>Frequência</h2>

            <p>A frequência é a quantidade de oscilações realizadas a cada unidade de tempo. No SI, a unidade de medida de frequência é o hertz (Hz).</p>

            <p>A frequência f se relaciona com o período T segundo a equação:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAjCAYAAAAJ+yOQAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAXQ/cXWQAAAG1JREFUeNrt08ENgCAQRNGthoOVWAldWI0N2YAH+iBZpgATjUFhkz/Jvz8BzcYtqU0dNvF2lZVbgIEECRIkyI7IVZ2q/vR1ftHtilp4G52PPuxJ+oO47q+R/jKuGyTIKJvi5+OJgQQJEiTIwMgG5eVWWA+I/BIAAACgdEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPmY8L21pPjxtbz49PC9tbz48bWZyYWM+PG1uPjE8L21uPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5UPC9taT48L21mcmFjPjwvbWF0aD7RLhz2AAAAAElFTkSuQmCC" alt="" style="width: 5%;">

            <p>Por isto, um hertz equivale ao inverso do segundo:

            </p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHYAAAAjCAYAAABB5P5VAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAXQ/cXWQAAAT9JREFUeNrtmKFOA0EURTdVFTUNqgJTUVmH4h9ITQWapOEXGtIvQSDqKwkO0RBMQ1B8SkXTZLjbbFAguuy8mX17TnL87tx5b2ZeUXSbiVzJzwJcsZYLGVgKnxAswQLBAsECwUJHguXJ5jRYnmzOWzHBdjHYOv06tHjBwi/m+l3hP2tdp18H2kN7ug7BEuxZwZ7bXjwylq9y3/D/Z1Wxc/nY0NljvUnqfstO3qS6J4QGf/AvLuW77HesYstKHbbh+l+3Yl/kNLMKs+gAM/kmbz0G+yDvDdtfTq24ZFAdQV/VE9NFsFdywyX2xFJ+eAi23KlbeUGmJ3ry4CHYJ3lNnj/cVU+fJOcG79g4a3yUz3LE/gYAAGfEmtlCYpqe2UImJJ3ZQjySzmwhLslmtmCD+cwWbDCf2YINZjNbiI/rme03WMS6ljJT39oAAAELdEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1uPjE8L21uPjxtbz4mI3hBMDs8L21vPjxtaT5IejwvbWk+PG1vPiYjeEEwOzwvbW8+PG1vPj08L21vPjxtZnJhYz48bW4+MTwvbW4+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPnM8L21pPjwvbWZyYWM+PG1vPj08L21vPjxtc3VwPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5zPC9taT48bXJvdz48bW8+LTwvbW8+PG1uPjE8L21uPjwvbXJvdz48L21zdXA+PC9tYXRoPgi2uV8AAAAASUVORK5CYII=" alt="" style="width: 12%;">

            <h2>Tipos de Ondas Mecânicas</h2>

            <p>As ondas mecânicas podem ser classificadas de acordo com as direções da vibração e da propagação:</p>

            <p>Quanto à vibração, elas podem ser:</p>

            <p><strong>- Transversais</strong>: ondas cuja vibração é perpendicular à sua propagação. Esse tipo de onda pode ser visto quando jogamos um objeto na água.</p>
            <br>
            <p><strong>- Longitudinais</strong>: ondas cuja vibração acompanha paralelamente o movimento em que elas se propagam. Um exemplo clássico de ondas longitudinais são as ondas sonoras, as quais se propagam no ar.</p>
            <br>
            <p>Quanto à propagação, elas podem ser:</p>


            <p><strong>- Unidimensionais</strong>: se propagam em uma direção.</p>
            <p><strong>- Bidimensionais</strong>: se propagam em duas direções.</p>
            <p><strong>- Tridimensionais</strong>: se propagam em várias direções.</p>








        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(Fuvest) Uma fonte emite ondas sonoras de 200 Hz. A uma distância de 3400 m da fonte, está instalado um aparelho que registra a chegada das ondas através do ar e as remete de volta através de um fio metálico retilíneo. O comprimento dessas ondas no fio é 17 m. Qual o tempo de ida e volta das ondas?</p>
                <p>Dado: velocidade do som no ar igual a 340 m/s.</p>
                <br>
                <p>a) 11 s</p>

                <p>b) 17 s</p>

                <p>c) 22 s</p>

                <p>d) 34 s</p>

                <p>e) 200 s</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: a) 11s
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>Enem) O sonorizador é um dispositivo físico implantado sobre a superfície de uma rodovia de modo que provoque uma trepidação e ruído quando da passagem de um veículo sobre ele, alertando para uma situação atípica à frente, como obras, pedágios ou travessia de pedestres. Ao passar sobre os sonorizadores, a suspensão do veículo sofre vibrações que produzem ondas sonoras, resultando em um barulho peculiar. Considere um veículo que passe com velocidade constante igual a 108 km/h sobre um sonorizador cujas faixas são separadas por uma distância de 8 cm.</p>
                <p>A frequência da vibração do automóvel percebida pelo condutor durante a passagem nesse sonorizador é mais próxima de:</p>
                <br>
                <p>a) 8,6 hertz</p>

                <p>b) 13,5 hertz</p>

                <p>c) 375 hertz</p>

                <p>d) 1350 hertz</p>

                <p>e) 4860 hertz</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: c) 375 hertz
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Aprenda mais sobre:</h4>
            <br>
            <li><a href="cinematicaEscalar.php">Cinemática Escalar</a></li>
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