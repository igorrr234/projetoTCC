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
    <title>Cinemática Escalar - Aprenda Fácil</title>
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

        .cinematica h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .cinematica img {
            width: 70%;
            border-radius: 3%;
            margin-bottom: 30px;
        }

        .cinematica {
            align-items: center;
            justify-content: center;
        }

        .cinematica p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .cinematica h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .cinematica h3 {
            margin-bottom: 15px;
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

        .cinematica h5 {
            margin-bottom: 10px;
        }

        .bbs {
            margin-bottom: 30px;
        }

        .exercicio1 h1 {
            left: 0;
            margin-bottom: 20px;
        }

        .exercicio1 p {
            margin-top: 5px;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <main>
        <div class="cinematica">
            <h1><u>Cinemática Escalar</u></h1>
            <h2>O que é Cinemática Escalar?</h2>
            <p>A <strong>cinemática escalar</strong> é um ramo da física que estuda o <strong>movimento de objetos</strong> sem levar em consideração as causas desse movimento. Ela se preocupa com grandezas como </strong>posição</strong>, <strong>deslocamento</strong>, <strong>velocidade</strong> e <strong>aceleração</strong>, sem considerar as forças envolvidas.</p>
            <img src="https://static.preparaenem.com/conteudo_legenda/22c1a2f08eaec323b2a0fc5cc695ba55.jpg" alt="">

            <!-- conceitos básicos -->
            <h2>Conceitos Básicos</h2>
            <p><strong>1.Referencial:</strong> Ponto que determina se o objeto está em movimento ou repouso.</p>
            <p><strong>2. Movimento:</strong> Mudança de posição para se aproximar ou afastar do referencial.</p>
            <p><strong>3. Repouso:</strong> Quando a posição de um objeto não se altera em relação a um referencial..</p>
            <p><strong>4. Trajetória:</strong> Linha que determina as diversas posições do objeto ao decorrer do tempo.</p>
            <p><strong>5. Deslocamento:</strong> Distância percorrida entre o espaço inicial e final da trajetória.</p>
            <p><strong>6. Ponto Material:</strong> Corpo cujas dimensões não interferem no estudo do movimento.</p>
            <p><strong>7. Corpo Extenso:</strong> Corpo cujas dimensões são importantes para o entender o movimento.</p>

            <p><strong>Exemplo:</strong> Um rapaz dentro de um carro é tido como A e se movimenta para direita em direção ao referencial B, que corresponde a uma menina parada próximo à faixa de pedestres.</p>
            <img src="https://static.todamateria.com.br/upload/tr/aj/trajetoriacinematica-0-cke.jpg" alt="">
            <p>Sendo B o referencial, dizemos que A está em movimento em relação a B, ou seja, está realizando uma trajetória, pois a distância que ele está de B varia com o tempo. Note que o movimento realizado por um corpo depende do referencial adotado.</p>
            <p>O tipo de trajetória classifica o movimento em retilíneo, quando o movimento é realizado em uma reta, ou curvilíneo, quando o movimento é realizado em uma trajetória curva.</p>

            <!--fórmulas da cinematica -->

            <h2>Fórmulas da Cinemática</h2>

            <!--velocidade-->

            <h3>Velocidade Escalar Média</h3>
            <p>A rapidez com que é realizado o deslocamento por um corpo recebe o nome de <strong>velocidade média</strong>, que pode ser calculada através da seguinte fórmula:</p>
            <img src="data:image/png;base64,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aC9NYXRoTUwiPjxtc3ViPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5WPC9taT48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+bTwvbWk+PC9tc3ViPjxtbz4mI3hBMDs8L21vPjxtbz49PC9tbz48bW8+JiN4QTA7PC9tbz48bWZyYWM+PG1pPiYjeDM5NDtTPC9taT48bXJvdz48bW8+JiN4QTA7PC9tbz48bWk+JiN4Mzk0O3Q8L21pPjwvbXJvdz48L21mcmFjPjxtbz49PC9tbz48bWZyYWM+PG1yb3c+PG1pPnBvc2kmI3hFNzsmI3hFMztvPC9taT48bW8+JiN4QTA7PC9tbz48bWk+ZmluYWw8L21pPjxtbz4mI3hBMDs8L21vPjxtbz4tPC9tbz48bW8+JiN4QTA7PC9tbz48bWk+cG9zaSYjeEU3OyYjeEUzO288L21pPjxtbz4mI3hBMDs8L21vPjxtaT5pbmljaWFsPC9taT48L21yb3c+PG1yb3c+PG1pPnRlbXBvPC9taT48bW8+JiN4QTA7PC9tbz48bWk+ZmluYWw8L21pPjxtbz4mI3hBMDs8L21vPjxtbz4tPC9tbz48bW8+JiN4QTA7PC9tbz48bWk+dGVtcG88L21pPjxtbz4mI3hBMDs8L21vPjxtaT5pbmljaWFsPC9taT48L21yb3c+PC9tZnJhYz48L21hdGg+4NlO/AAAAABJRU5ErkJggg==" alt="" style="width: 30% ;">
            <p>Os termos inicial e final correspondem ao período de contagem do tempo, não importando se o carro ficou parado durante algum momento ou se houve variação de velocidade no percurso.</p>
            <p>No <strong>Sistema Internacional (SI)</strong> a unidade de velocidade média é o <strong>metro por segundo (m/s)</strong>.</p>
            <br>

            <!--aceleração -->

            <h3>Aceleração Escalar Média</h3>
            <p>Com o passar do tempo, a velocidade de um corpo pode mudar à medida que ele realiza o movimento. A <strong>aceleração</strong> de um corpo faz com que a variação da velocidade durante um trajeto aumente ou diminua em um dado intervalo de tempo.</p>
            <p>Veja a seguir a fórmula para calcular a aceleração:</p>
            <img src="data:image/png;base64,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" alt="" style="width: 30% ;">
            <p>No <strong>Sistema Internacional (SI)</strong> a unidade de aceleração média é o <strong>metro por segundo ao quadrado (m/s²)</strong>.</p>
            <br>

            <!-- Movimento uniforme-->


            <div id="mru">
                <h2>Movimento Uniforme (MU)</h2>
                <p>
                    Se em igual intervalo de tempo um corpo percorre sempre a mesma distância, seu movimento é classificado como <strong>uniforme</strong>. Sendo assim, sua velocidade é constante e diferente de zero ao longo do percurso.
                </p>
                <p>No <strong>Movimento Retilíneo Uniforme (MRU)</strong> a velocidade não muda em uma trajetória realizada em linha reta.</p>

                <p>A posição do corpo na trajetória pode ser calculada pela função horária da posição:</p>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF8AAAARCAYAAAC7HnDpAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAMyZLetQAAAZZJREFUeNpjYIAAJiBuBeKXQPwLiA8DsQ8D/cFgcQddQQ8QFwExCxQHAfH+EewOWoB3uCS+DBIH0tsd/weDXQ+B2HoQBD693UFO4J8DYg00MZCbLxCwBxmjgGRoqisHYjYyPUEIEwModQc9Ar8EiBvRxCZB3Uy2XaCK7SAQPwXinAFM/fR0BzmBLw3Ed9HEngOxEjXsigTiD0B8HIhFBzASaOEOauVQUCPAFMq2B+KT1IxoUJOvEog30NlTlLqDXhVuGrSoAYGZ0BYaVe0CefzHIKiEsbkDVDTdgGKfAQh8QWixCHLbayCWpbZdIAseD4LAR3eHJbROEIbi/VAxejc1QbmxA9oRJAb8gkYWBgAZkAitTBigMbkFmr3oCYhxxwZoOQsDtkC8aQACPxKaI/MIFMUwcAGqBwOAUs46qGGwbn3QAKRyYtzxCS0FMUHF6A1APfBvQCxJZOA7QodN/jMMYfAfR5YeBXQA6CmfZYBS/ogE6GW+PbReGAV0qhf2Q1tBotCWj9dosNB3COIWA2SYNm+oegIAATCIVuuC0wgAAAEsdEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPlM8L21pPjxtbz4mI3hBMDs8L21vPjxtbz49PC9tbz48bW8+JiN4QTA7PC9tbz48bXN1Yj48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+UzwvbWk+PG1uPjA8L21uPjwvbXN1Yj48bW8+JiN4QTA7PC9tbz48bW8+KzwvbW8+PG1vPiYjeEEwOzwvbW8+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPnY8L21pPjxtbz4uPC9tbz48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+dDwvbWk+PC9tYXRoPnXTWaQAAAAASUVORK5CYII=" alt="" style="width: 10% ;">
                <p>Onde:</p>

                <p><strong>S = posição final, em metros (m)</strong></p>
                <p><strong>So= posição inicial, em metros (m)</strong></p>
                <p><strong>v = velocidade, em metros por segundo (m/s)</strong></p>
                <p><strong>t = tempo, em segundos (s)</strong></p>
            </div>
            <!--Movimento uniformemente variado-->

            <h2>Movimento Uniformemente Variado (MUV)</h2>
            <p>
                Se a <strong>velocidade</strong> variar em quantidades iguais no mesmo intervalo de tempo, o movimento é caracterizado como uniformemente variado. Sendo assim, a aceleração é constante e diferente de zero.
            </p>
            <p>O <strong>Movimento Retilíneo Uniformemente Variado (MRUV)</strong> é caracterizado pela mesma quantidade de <strong>aceleração</strong> de um corpo em linha reta.</p>

            <p>Através da equação horária da velocidade é possível calcular a velocidade em função do tempo.:</p>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGIAAAARCAYAAAAmE3lhAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAMyZLetQAAAZ1JREFUeNpjYGBgOAfEGgzYgTUQn2GgHxhMbqE7KADiRhxyU4A4b4S6hZbgHTZBUSC+i0WcCYhfQuXpBQbKLf/pHBE47dsBxJZoYi5AvGkAUstAuIWSiPAD4pNA/AuIb0GLUEJ2IWMUEA3Ek9DE5gJxOImeIYSJAdRwCz0jYikQa0HZiUB8hRL7WID4IbQIgBUFz5H49AQD4RZqFU1M0JxBkX2gVOcGZfsA8bQBrMxo7RZq5V5yIxWvGkcgXoiU3SwH0HOUuoWeOaIWWjf8IcGfBNWAWiwcQHxjEDTxiHGLD1T+BpRN74iYCcShUHdSLUeAQCsQb4DG8kADQm4B5ZKDQCwMxfspyDnkRsQnMs36RajO04IapDQIIoKQW0CRZI/Et6WgiUtuRIByYjKULQ3EzdCGhTSOYhsGLgBxJCHDpwyiHugUAqmRCa3F8onO7tODDsv8gvYlzKEjAy8JRIQjVM1/hmEA/uPI8qOAzgA9R7AMQI4YBVjqCBB7y2iw0B9YQltKggyQwUBQC8prNFgGBvhAO1OgYeUhPUQOAD0dh9dfxt1ZAAABLHRFWHRNYXRoTUwAPG1hdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTgvTWF0aC9NYXRoTUwiPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5WPC9taT48bW8+JiN4QTA7PC9tbz48bW8+PTwvbW8+PG1vPiYjeEEwOzwvbW8+PG1zdWI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPlY8L21pPjxtbj4wPC9tbj48L21zdWI+PG1vPiYjeEEwOzwvbW8+PG1vPis8L21vPjxtbz4mI3hBMDs8L21vPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5hPC9taT48bW8+LjwvbW8+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPnQ8L21pPjwvbWF0aD5QimnuAAAAAElFTkSuQmCC" alt="" style="width: 10% ;">
            <p>Onde:</p>

            <p><strong>V = velocidade final, em metros por segundo (m/s)</strong></p>
            <p><strong>Vo = velocidade inicial, em metros por segundo (m/s)</strong></p>
            <p><strong>a = aceleração, em metros por segundo ao quadrado (m/s²)</strong></p>
            <p><strong>t = tempo, em segundos (s)</strong></p>

            <br>
            <p>A posição do corpo durante a trajetória pode ser calculada através da seguinte equação:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJcAAAAVCAYAAABL53yqAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAQ3ZOC+gAAAmJJREFUeNrtWb9Lw0AUDkXESRDpIMVFRMTBTUREiqsUh4JDRxEcRBxEEAcHEcHByc0/wFWKlK5FikgX6eBQBAcRkSIUKSJShPiOfgGNSZqfd4m8Dz5or6T5cvfuu/deNI3BCAYd7BCvieM8JYywkSJuEG95KhhR4ZOngBEFssQrK0s7IjZxdlaJOUXWGgcdDO8YQc41Zv7hhLhN7APzxIoCgXHRETVa/0zzBLGEAPuD95g8gGwdusIKK2nadQfHKhMH7S58JM7HILhk6/CzQKIamjSNCc11j6W7HjBAgly7TKwh9bh3MedOmssW8/ELa3CNXWJ/gF6HE90gqA4ZC7RDPDCNnUJzUpzrnDiFz6vEuwD3c7XWOWT6z8RNhe4lU4efBcoQH0xjL1aJbEKOxRQcTMr9CsQ34g0xrTDIotARlsOKImPmR/ldkxAYYWn3qye0HE9E8x6xqPjBveqQtfvXcRQKnKHCTVJCv49c68vD+oRaQIiFjUO31UqHODobYE7BAg3h2BbaXomjNse7nUaVwSU2wwpxQJVzGRP4FIPgMuuYQ042DFYwJnv3Czc91rqNXjN6aewgMFUEV9vnf/nWXEXVkMF3sRNLsH+ZcKOjiDzHwALxUkFwFeCoWzaB56SxjutVBFcDVblRnByiIMnYpDqBNYtddYHJMl675BW4lBsdbdMOStnsxqgh3iB8aNZd6V4aF7XuKy4VTdxprdur66AQmUVrpdkjuFRqlgbdxrJZIyMwzK7Qp8i5kq6R4SKfySIvY42MUPKyCqrINKqyJdbICAuibySagC2bao01xgDf6ibhYKqmbVAAAAHAdEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPlM8L21pPjxtbz4mI3hBMDs8L21vPjxtbz49PC9tbz48bW8+JiN4QTA7PC9tbz48bXN1Yj48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+UzwvbWk+PG1uPjA8L21uPjwvbXN1Yj48bW8+JiN4QTA7PC9tbz48bW8+KzwvbW8+PG1vPiYjeEEwOzwvbW8+PG1zdWI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPnY8L21pPjxtbj4wPC9tbj48L21zdWI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPnQ8L21pPjxtbz4mI3hBMDs8L21vPjxtbz4rPC9tbz48bW8+JiN4QTA7PC9tbz48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+YTwvbWk+PG1vPi48L21vPjxtc3VwPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj50PC9taT48bW4+MjwvbW4+PC9tc3VwPjwvbWF0aD47cDe6AAAAAElFTkSuQmCC" alt="" style="width: 16% ;">

            <p>Onde:</p>

            <p><strong>S = posição final, em metros (m)</strong></p>
            <p><strong>So = posição inicial, em metros (m)</strong></p>
            <p><strong>Vo = velocidade inicial, em metros por segundo (m/s)</strong></p>
            <p><strong>a = aceleração, em metros por segundo ao quadrado (m/s²)</strong></p>
            <p><strong>t = tempo, em segundos (s)</strong></p>
            <br>
            <p>A <strong>equação de Torricelli</strong> é utilizada para relacionar a velocidade e o espaço percorrido no movimento uniformemente variado.</p>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAAXCAYAAAAm70AZAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAQ3ZOC+gAAArxJREFUeNrtWEFIW0EQ/QSRIlIQESlBBBEpHsSLSChFevEgoQfBg4iHUuhBREQK0kMPEgQPPfVQEM+9lCIiwauUIMWLiIgEoYciQaRQJIhIKKQz8ALfdbO7xs1387MPHuTvX/ZPdnZm3mwQmKEMloh7xP7APTSCjQ2JBHGOeOBtbD7ceBubC2PEH97G5sEz1Ms+b6MUL4jfiUVoi0PijMX1h6Fbhg1K3CrxAnbkiOlaPjhAzGJTXcVj28jZZZrYjudBHMBpS+t/wf9b18z7RFwitoCTxN1aomeH+NTxCLdlY9miXb3EIwvr8EEqwIkFzf+80i3GKve5JE0dhp53JHOiRNQ2li3bLxOVr4n7SL+n+D8qcORm8DuD52r4rVvvPXFFGPtMXJb0wGHet39WUYd621hPp6eQ4kV8RfpnvCEea9Y5QdZg9BDzirlvEe28P62yCUniL2Hs3DGxFrWNtpz+BNGsi+IEIr4aXqGWh7GF8WpIQ2NwKZiXTeAiPxJqd/YdrNn1tNFGNhLRAceMWzho2xIHyw6CDCwiL4k/iV3hF++QLgMowyUHN7SeNtqO9D44XHUV/BG1/J9mH1Sp/ATvA4NM8gE23TqVBbz8Y7hQ1IjSxoc4ncXkBrFNMYcP7RTSv+6bKtG2KNE6KsffEZR8CtbQyLuKqGys1endxG9oq1QoGn6T1zlTtGfteJ8wDJozWe7nk7DgsNN1NqaRCvO13kA90OlZw7YxD4VdEakZCNOkMG/G4CKGL2xmhbEcOoJkqERkUSLvnKrrwO0bN5WNKajVTnAXY1HCVLcM4e6hBEE6ijR9IczbM9REOclebCJAKtewk0EMsQVVX8FLqF6PGKMo1LZEldrpESPI6nDJb0tzRXqLj/T4Q6zpY4HZjZVHAyMFxc79aBeU/ITflviDe3O+2vzr+H3Do+I/ngXZOAQRjAcAAAFkdEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1zdXA+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPnY8L21pPjxtbj4yPC9tbj48L21zdXA+PG1vPiYjeEEwOzwvbW8+PG1vPj08L21vPjxtbz4mI3hBMDs8L21vPjxtc3Vic3VwPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj52PC9taT48bW4+MDwvbW4+PG1uPjI8L21uPjwvbXN1YnN1cD48bW8+JiN4QTA7PC9tbz48bW8+KzwvbW8+PG1vPiYjeEEwOzwvbW8+PG1uPjI8L21uPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5hPC9taT48bW8+JiN4MjIwNjs8L21vPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5TPC9taT48L21hdGg+VXoV9QAAAABJRU5ErkJggg==" alt="" style="width: 14% ;">


            <p>Onde:</p>

            <p><strong>V = velocidade final, em metros por segundo (m/s)</strong></p>
            <p><strong>Vo = velocidade inicial, em metros por segundo (m/s)</strong></p>
            <p><strong>a = aceleração, em metros por segundo ao quadrado</strong></p>
            <p>
                <strong>S-So = espaço percorrido, em metros (m)</strong>
            </p>













            <div class="video">

                <h2>Veja o vídeo a seguir:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/D6gB4jnx9Wc?si=NGYbmaEY--qKo3pt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

        </div> <!--Exercícios-->

        <br>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(FUVEST 2020) Um drone voando na horizontal, em relação ao solo (como indicado pelo sentido da seta na figura), deixa cair um pacote de livros. A melhor descrição da trajetória realizada pelo pacote de livros, segundo um observador em repouso no solo, é dada pelo percurso descrito na</p>
                <img src="https://static.todamateria.com.br/upload/im/ag/image-904.jpg?auto_optimize=low" alt="" style="width: 25% ;">
                <p>a) Trajetória 1.</p>
                <p>b) Trajetória 2.</p>
                <p>c) Trajetória 3.</p>
                <p>d) Trajetória 4.</p>
                <p>e) Trajetória 5.</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: d) Trajetória 4.
                    </p>
                    <p>A trajetória será determinada pela velocidade, composta de duas componentes, uma horizontal para a direita devido à inércia, com velocidade inicial igual à do drone e, uma componente vertical para baixo, devido a força de atração gravitacional.</p>
                    <p>A posição do pacote de livros evolui com o quadrado do tempo, sendo a posição e a velocidade inicial iguais a zero.</p>
                    <img src="data:image/png;base64,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" alt="" style="width: 16% ;">
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(UEG 2019) Em um dia de tempestade, você ouve um trovão 10 segundos após ver o clarão do relâmpago. Com o conhecimento de que a velocidade do som seja aproximada para 340 m/s, a distância que você se encontra da tempestade é, aproximadamente, de:</p>
                <p>a) 34 m</p>
                <p>b) 34 km</p>
                <p>c) 3,4 m</p>
                <p>d) 3,4 km</p>
                <p>e) 340 m</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: d) 3,4 km
                    </p>
                    <img src="data:image/png;base64,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" alt="" style="width: 24% ;">
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Aprenda mais:</h4>
            <br>
            <li><a href="leisNewton.php">Leis de Newton</a></li>
            <li><a href="vetor.php">Vetores</a></li>


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