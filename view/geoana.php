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
    <title>Geometria Analítica - Aprenda Fácil</title>
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

        .geometria {
            align-items: center;
            justify-content: center;
        }

        .geometria h1 {
            text-align: center;
            align-items: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .geometria img {
            display: flex;
            width: 70%;
            border-radius: 3%;
            margin-bottom: 30px;
        }

        .geometria p {
            font-size: 17px;
            line-height: 1.4;
            margin-bottom: 16px;
        }

        .geometria h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .geometria h3 {
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

        .geometria h5 {
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
        <div class="geometria">
            <h1><u>Geometria Analítica</u></h1>
            <h2>O que é Geometria Analítica?</h2>

            <p>A <a href="">Geometria Analítica</a> estuda elementos geométricos em um <strong>sistema de coordenadas</strong> num plano ou espaço. Estes objetos geométricos são determinados por sua localização e posição em relação a pontos e eixos deste sistema de orientação.</p>

            <p>Desde povos da antiguidade, como egípcios e romanos, a ideia de coordenadas já aparece na história. Mas é no século XVII, com os trabalhos de René Descartes e Pierre de Fermat que este campo da Matemática se sistematiza.</p>



            <h2>Sistema cartesiano ortogonal</h2>

            <p>O <strong>Sistema Cartesiano Ortogonal</strong> é uma base de referência para localização de coordenadas. É constituído, em um plano, por dois eixos perpendiculares entre si.</p>


            <img src="https://static.todamateria.com.br/upload/im/ag/image-551-cke.jpg" alt="" style="width: 40%;">



            <p>- A origem O(0,0) deste sistema é a intersecção destes eixos.</p>
            <p>- O eixo x é o das abscissas.</p>
            <p>- O eixo y é o das ordenadas.</p>
            <p>- Convenciona-se a orientação anti-horária dos quatro quadrantes.</p>

            <h3>Par ordenado</h3>


            <p>Um ponto qualquer no plano possui a coordenada P(x, y).</p>

            <img src="https://static.todamateria.com.br/upload/im/ag/image-554.jpg?auto_optimize=low" alt="" style="width: 40%;">

            <p>x é a abscissa do ponto P e constitui a distância entre sua projeção ortogonal no eixo x até a origem.</p>
            <p>y é a ordenada do ponto P e constitui a distância entre sua projeção ortogonal no eixo y até a origem.</p>


            <h2>Distância entre dois pontos</h2>

            <p>A <strong>distância</strong> entre dois pontos no plano cartesiano é o comprimento do segmento que une estes dois pontos.</p>

            <p>Fórmula da distância entre dois pontos <strong>A(Xa,Ya)</strong> e <strong>B(Bx,By)</strong> quaisquer.</p>


            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAScAAAAlCAYAAAAA5S/+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAaPUZr5AAABrBJREFUeNrtXV1oHUUUPoRLKFKkQaVCDQkhyCWUoKRBSpEqlFIkSJFCEJUaIiFIH0IpBLGhLT4UYih9FQlFgiix2CAiASlSQilBKSWGIEq5D3koWlCJJRZNW+ewZ8jturszc7N35mz3fHAId2fu3rPfd/bs/O0EQGCD7coeiImJeTWBBQ4o+15oEAgE3PChsrNCg0Ag4IZLyt4WGgQCASdUlN1W9oxQ4RX7lF1UtqbsH2U3lL0htIimgk3sUfaL0OAdV5S9DtFkBKJH2VU6JhBNBQonlH0sNLBAh7IloUE0FUTA8aYxy7qjEE2BTgltmZginkYa+O7dwL6Lxo+epoVFjbp2JvQr26Cmq8CMBeKrz+E7e6kbEAqiMVNNy7gwqlPZLYgGxbPQomwZokG+bolRK3QRXyvEnwnblC1CNKgaAqIxY03LmJzeUfaFRb0R4ua8xKcTzll2BdqUzSk7GNBX0ZixpmVMTjPKTlrUWyZuuiQ2ndBNvC0ZnsZzDForojFjTcuYnFaVvWSo00u8XJO4bAjXiL/ehLIqRDOljwWOX9GYp6alTU47lP1N/eIsjBMvpyQmG8IZ4u9E7PhOZbNgHu/zEb+iMQNNcZoUR9zXIZrewxWcQ4GTU6i3mQeUfWtR7yL95kDsOCa1n1LKEE9AtPK8ZpEAfcK334fpt2Zjx7+mpyyHh2uSxo9DNPi7avjuZfrus4F19elv7pp+UicgXsRG3eepEiYn25d9V+g3OxLK+ojHX+mmTuL7VYZPPp9+d9H5lh10952c0jSeoeP7DeMv3zHR1Ze/uWq6jyr8qewQHcOpwIOU/cq4x8qPyo5Y1FsnXtKmTk8lPEX207GvGF+/L78rdM47nh5yjSBN45fp+HTK9yap/DATTX35m6um0yl9RI1qyZLT08r+VfakRd0NC14Wqc4gCbdCwu1izoMvv3VrnWtyytK4RsmrNeEGvW3RjfINX/7mpqlutnY3SdyiwWVzOZvk1E039e/KPqL64wXo/vrwO+/k1IxdF7M0nqCyo7HjQ3R8gpm2PvzNVdN1C4HKNOZ0msacttLkj2Oszr8lsFtBy4GnZvudd7euGckpS+N2KrscO/4D3Zw7mWnrw99cNd0oWXIydddwQPBNS//0zFa7od75Ov8moDhott9pg6ecunUmjeepXHd3++jzp0w1bba/uWq6Ridr26K471kGyCoJ/qXncRfsplwgH3pS6uBeM7i+qdPynHqaOWv2Sk84LFAXCZdpVJlz1ajfLvGASJt25pScTBq/RuX6enUX+AWm2rr6G1TTOTrZuynlxy3EfY7Kq4YAqQduMrXoUZSTlJxu0dMjbbyp5nBO0wI9XAl7k5q4OBX9FtW/YegiheaqUb9d4gHxAdU7zjg5mTRGPnAweYUebnqXR67auvobVFOd6daIqBayF5V9QwFqEhfXUExD+jRlkigt0PxZmrTsj7NxSYsIj4Hb5nJasKuGbtGxhCfxGcZcNeq3SzwAbM4I7macnEwaI/QLr3ot0Qjz+8DF3+CazmaM4QwaxG2n5ilQNm63FAXrXQ+QnCoUDEMJZbgLwajj+ZYgebZTd4vii9qegmiBI4719TPkait+u8SDzUuiHJJTlsYaPXW/gV3gVofkFOI+cPGXhaZjdFK8cdep67PXQtypui4h/p00iKIXeF4Bt42p8sQ8kRwHNnf3OJ5rGP6/nca2um5RV0Zr9eeUFlworrbqt0s86NbZcAGSU5LGcegXXs9Z+MLhPrD1l6umRmynYG6ta5XUYHMT86QAeUBP4N0B/X5e2X14eCAS/fkD3F9MbMZGZJy4akY8dFMLbLkg12XSGMtXwbxekIu2Lv4WVlMcv4lPMePn8YwnBl4kDjzji4C9AX3/TdnndZ9xhfylBs+l30dbyDE5ceIq73hoZEvX0MjSWLes5guirYu/hdS0Qhk1vgShjZr9LYa+dhXCvhQ5CQ8vFLsA9v/MIE3wu5DP5vfcuMozHqaIp2EoHtI01pvRDRREW1t/C6vpKGQvhhw2iAIQ9j8vIPH3YHOrUHzZ9xATbrlx1Yx4eFRwgLS5WRBtXfwtrKaYfdO2Le2A5C0T4v3eO4Gv4TpZJ9htLhcqOXHgKu94KCuKpG0hNX0FonUvWfiM6iWJghf2PkT7A4XEILWejjLrNnHkKu94kOTEW9vCaorTn/2GOjgwthATRRs2K2cg+5UZX/gLopmLs8wCmCNXecZDmZNTEbQVTRlAr5I9IlQIBAJO2EXJaYdQIRAIuOG0UCAQCDiiIhQIBHzwH3AYScE5IQ1bAAACanRFWHRNYXRoTUwAPG1hdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTgvTWF0aC9NYXRoTUwiPjxtc3R5bGUgbWF0aHNpemU9IjIycHgiPjxtc3ViPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5kPC9taT48bWk+QUI8L21pPjwvbXN1Yj48bW8+PTwvbW8+PG1zcXJ0Pjxtc3VwPjxtcm93Pjxtbz4oPC9tbz48bXN1Yj48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+eDwvbWk+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPkI8L21pPjwvbXN1Yj48bW8+LTwvbW8+PG1zdWI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPng8L21pPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5BPC9taT48L21zdWI+PG1vPik8L21vPjwvbXJvdz48bW4+MjwvbW4+PC9tc3VwPjxtbz4rPC9tbz48bXN1cD48bXJvdz48bW8+KDwvbW8+PG1zdWI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPnk8L21pPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5CPC9taT48L21zdWI+PG1vPi08L21vPjxtc3ViPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj55PC9taT48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+QTwvbWk+PC9tc3ViPjxtbz4pPC9tbz48L21yb3c+PG1uPjI8L21uPjwvbXN1cD48L21zcXJ0PjwvbXN0eWxlPjwvbWF0aD5rA9vdAAAAAElFTkSuQmCC" alt="" style="width: 25%;">

            <h2>Coordenadas do ponto médio</h2>

            <p>Ponto médio é o ponto que divide um segmento em duas partes de mesma medida.</p>

            <p>Sendo <strong>M(Xm,Ym)</strong> o ponto médio de um segmento <strong>AB</strong> com, suas coordenadas são as médias aritméticas das abscissas e ordenadas.</p>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIcAAAAzCAYAAAC9vBtpAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAjYkPj7AAAA81JREFUeNrtnHFkVVEcx49nZmZiZvojifTHk0kkM8lEMpPpn8xkkv7JJNM/mST90T/TH9kfsT/6I5NIMjMTmTzPJCaZeWZkkiSRSZKJ1/l1v9c73e59d3vvvrtz3/l++Nnuudec/X7f9zvn/M65TymSNmUYIRRHFmjTtobAnA2536Xtq7YNPGuTOGzpe1NzTNtvbV/gUJNHcP6QpZnDhr43PbfhyKdGWz/a5iwfVna7707wBg4d1tairaTth7Z9GZhz7GbfneAQHPpN2zScfaNBItip2dB35xk3ArKiLZcRcaTRd+e5bzj4VsaWsrvVdyc4AccWkZ5/actvM6gfsax8XuM4X684aum7yQTDH027tvcYtw9oG4Wz38Wk52BARzA5TFMctfbd5yiez1MG1VPyVaPtGdru7EAcEoytlMVRa999ZrQ9hJGIlPwq0N6tvOKSFJmOb1Mc+7W9TVEc9fTd7+8afi/hmoA2IyUfDLl/Ds5fV+El6LKRMc5oKyivapmGOOrtu3BP2xh+l5+TlERjlqbySe3JUN87IK5WXEvxbAPtJCFxKDj4tLZ5bUcy0veJkCWvXLN4lrA4fPIh47+NtCBrdAbaOzEMsYDWAHEo1Bhs54qqXpG9zNAmL44cJoi2sxoxiVWolawytMmKQ5x6U3nnKGxmEHWQajzBcySh1YoMJzMh47htFGJqHwrL8SLDSwhJHplg+YdYz4fclzLtZ+UVT7pSSN1Jnn8gCTCsKgdIgsIpYnbeyMIPxWE5K6pyRtHnAdou0D1uMwQhlHB9EddTdA0R/BPOk1i2FZpkCUpLYJg+ZTz8CZNRWwNJUmbacP6E5Z9ykiLX4PQFVTlQ2xoT0L6YvznAQGafQQRxFtcFXF+PEUfc1vVriiPbyMmm78o7ydyOtj4EVYpfbVXEIcvf3oj7/Vj5UBwZpRvDhxx/C76LsRgz9/ArqgsR9yX7jFIc2UTmE0tYsobt4PUisPICTUeEOBSyQ/DArWSe9cBzxCH8oEv1dD5w76Xyimgui0O2G+5iXibDtrzr8hPX8v5JzgVxCGuqsvciWeSD8c+XHf7wVDPJ2ntcEMclY6Uzq/59M8tVcSyhPHDY+KC0Yp62oZp8a8IMuvzzctJ5BBPcHMVRlbwxn2t6cQhjmNyOxzxHKn7ZckUcki2W1f9VVYojeiW47Io46n3OJRaRZU/SFcRkCkvaAbqC+Mg2xGNtm8o7GkHIX+Q7MWQfSupBPXQH8ZGtCdm7ki+Ybac7iCmMTcVzuCTAXmSMF3QFCTKn+A1+JAKehSXNJ44/8AHiZ819pvQAAAFmdEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1zdHlsZSBtYXRoc2l6ZT0iMjJweCI+PG1zdWI+PG1pPng8L21pPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5NPC9taT48L21zdWI+PG1vPj08L21vPjxtZnJhYz48bXJvdz48bXN1Yj48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+eDwvbWk+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPkI8L21pPjwvbXN1Yj48bW8+KzwvbW8+PG1zdWI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPng8L21pPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5BPC9taT48L21zdWI+PC9tcm93Pjxtbj4yPC9tbj48L21mcmFjPjwvbXN0eWxlPjwvbWF0aD7RXguDAAAAAElFTkSuQmCC" alt="" style="width: 12%;">

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIEAAAAzCAYAAACwomsuAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAjYkPj7AAAA3xJREFUeNrtnFGEVFEYx4+xVpLoaR+SyMrKSiSrh6xIVnpI9LCSZElW0ltW9rGXlX3Ytx72ISuRZCUZMlaSFSNJxlgysk+JrGSll+l8zf/a487cuffM7s45957/j8/OuefO7jff97/nnnPuN6sU2W2aMEIREFfs1/ZX23rKeRUk6qgHIvDB58KxhGCNJ/QPo3/Fo5HAtc+F4ywCtpjQP4f+Sx6JwLXPhaShbVPbYOz4gLYfGYZeF3MClz4Xklkk4nrs+A0cn93BZNuaS5+D4hACV4kdr2ISNuShCPrhc3CUEdSDaJ9E+4nHS0RXPheWywjgDNqP0B5LSZ7ce+vaXhjJ6JcIbH02mWHK2ylhQlXTtg9D6qeU5JlMavvQZxHY+hxxAn9zhGlvZx7BidbhNy1EUEIS+ikCW5/NfYbFLkvMoDlmJOVnh+VXNxHIRO2jAxHY+Bz5WcfrGtokxioCOp8hedEIcF7bW0zM+i0CG5+Fh9qm8Vp+zjHl7UP6OgI6bLHk+65tNAc+y7zhqzFayMZSA8cJmEIwyxmvYIWAntP2Sttxz32WFUF8E0na95j6Lb4goBctRBAhM+0Vj30ewChwIHZc2msYUYJHruY/CJTqQQQK7/fV51uq+87kFCXQ24Qufm/+7fkodySh7zD6yTZEIEG8r+2xp75e0PY85ZynOI/0sLRrYkhe6nC/9QVZvp5KOUeWt++YVkJIMj4VY+7Ec3jSI74UY1IEDmFhI/kPCxtJ4QobmzT726nLwkbOCTzCdTEmReABNoWNcvx0yu+bYMLyh01hY5Yl4ypFkE+yFjZK32eVXP48DjFRBDkka2Gj9F/R9jqhXx5qXKMI8kuWwsYouTXVXoApc4W12HkkZ/OCLIWNUXKvqlb9nckbY78hNBFIHeIDzJd+YV61ifZtlZMyr6yFjWZy62qrCFNGhW/Ghw1NBGlL2/eq9dDOa7IWNprJlV3FZbxehuJVoCKQJN/B3Cq6EAYxf2ogHgs+fwCbwsZm7BYi75nEraQUsAi6MWJMuAsz7JlMQ0B3U84Lnabq7TuNuRCBXP3VDktKimCLMcSjWlQRbPe8EKhgtDzDUITJApaKEwxFeOxRraewG6pVwUUCQ2o05PmK7KOMMhzhIV8Gka+0P9O2l+EIUwAbyvNNIbJ7DGEEKDMU4fJS8T+HBQ9rJEn+RPAPTBvoMiEo/KgAAAF7dEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1zdHlsZSBtYXRoc2l6ZT0iMjJweCI+PG1zdWI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPnk8L21pPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5NPC9taT48L21zdWI+PG1vPj08L21vPjxtZnJhYz48bXJvdz48bXN1Yj48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+eTwvbWk+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPkI8L21pPjwvbXN1Yj48bW8+KzwvbW8+PG1zdWI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPnk8L21pPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5BPC9taT48L21zdWI+PC9tcm93Pjxtbj4yPC9tbj48L21mcmFjPjwvbXN0eWxlPjwvbWF0aD4RBcV2AAAAAElFTkSuQmCC" alt="" style="width: 12%;">

        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(UFRGS) A distância entre os pontos A (-2, y) e B (6, 7) é 10. O valor de y é:</p>

                <p>a) -1</p>
                <p>b) 0</p>
                <p>c) 1 ou 13</p>
                <p>d) -1 ou 10</p>
                <p>e) 2 ou 12</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: c) 1 ou 13
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(UFES) Sendo A (3, 1), B (–2, 2) e C (4, –4) os vértices de um triângulo, ele é:</p>
                <p>a) Equilátero.</p>
                <p>b) Retângulo e isósceles.</p>
                <p>c) Isósceles e não retângulo.</p>
                <p> d) Retângulo e não isósceles.</p>
                <p>e) N.d.a.</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: c) Isósceles e não retângulo.
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Veja mais sobre:</h4>
            <br>
            <li><a href="geoespa.php">Geometria Espacial</a></li>
            <li><a href="geoplana.php">Geometria Plana</a></li>

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