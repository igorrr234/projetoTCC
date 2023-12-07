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
    <title>Calor Específico e Calor Latente - Aprenda Fácil</title>
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

        .calor h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .calor img {
            width: 70%;
            border-radius: 3%;
            margin-bottom: 15px;
        }

        .calor {
            align-items: center;
            justify-content: center;
        }

        .calor p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .calor h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .calor h3 {
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

        .calor h5 {
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
        <div class="calor">
            <h1><u>Calor Latente e Calor Específico</u></h1>
            <h2>O que é Calor Latente?</h2>
            <p>O <strong>calor latente</strong>, também chamado de <strong>calor de transformação</strong>, é uma grandeza física que designa a quantidade de calor recebida ou cedida por um corpo enquanto seu estado físico se modifica.</p>

            <h3>Fórmula</h3>
            <p>Para calcular o calor latente é utilizada a fórmula:</p>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFYAAAAQCAYAAACMV4iGAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAANvpXuIwAAAVdJREFUeNpjYEAFKkA8F4hfA/EvKD0fiNUYRgEy+A/FRAFHIP6CpAkZg8TdRsOT9IAVhKbO/9AUKgsVlwfihVDxl0AsPBqmpAVsLVThNhzyW6DytWQ6gBhMjqfsgfg4EP8A4sVAzAEVDwXiu1Dxg0gJhe4BexCq0AWHvAtU/vAgClgfLGZ0ALEfFvHdAxWw36AKmXDIsyGVtYMlG94C4miom2GB/AGIzwFxLFTcCyr+Y6AC9g8RCv9DWwqDJWA1cIirUVKDUztgP0EVshBIsd8GWRlLiThdAnYbVKEbgTL25GjAkmZmBoFWwSaofP0gbuoMyoBlgVYGsHasJFRcFsoHib8bJO1YWgasFxRTteelg9RJQMef8DTFhlPAEquW5GJNFjpW8AHaUvgBVZgxBHo9gzpg0YEwtFPwH9o+zKNBL2bEAiZoj+YPjXoxIx7oQAPVdDQoCAMAO/TjsUE6yrgAAAENdEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1zdHlsZSBtYXRoc2l6ZT0iMThweCI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPlE8L21pPjxtbz4mI3hBMDs8L21vPjxtbz49PC9tbz48bW8+JiN4QTA7PC9tbz48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+bTwvbWk+PG1vPiYjeEEwOzwvbW8+PG1vPi48L21vPjxtbz4mI3hBMDs8L21vPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5MPC9taT48L21zdHlsZT48L21hdGg+Asy3RAAAAABJRU5ErkJggg==" alt="" style="width: 8%;">
            <p>Onde:</p>
            <p><strong>Q: quantidade de calor (cal ou J)</strong></p>
            <p><strong>m: massa (g ou Kg)</strong></p>
            <p><strong>L: calor latente (cal/g ou J/Kg)</strong></p>

            <p>No <strong>Sistema Internacional (SI)</strong>, o calor latente é dado em J/Kg (Joule por quilograma). Mas também é usual ser medido em cal/g (caloria por grama).</p>

            <p>Note que o calor latente pode apresentar valores negativos ou positivos. Sendo assim, se a substância estiver cedendo calor seu valor será negativo (processo exotérmico). Isso ocorre na solidificação e liquefação.</p>

            <p>Por outro lado, se tiver recebendo calor, o valor será positivo (processo endotérmico). Isso ocorre na fusão e na vaporização.</p>


            <h3>Calor Latente de Vaporização</h3>

            <p>No calor latente ocorre a <strong>mudança de estado físico</strong>. Ou seja, a substância pode passar do estado sólido para o líquido, do líquido para o gasoso e vice-versa.</p>


            <p>Quando a mudança é da <strong>fase líquida para a fase gasosa</strong> o calor latente é chamado calor de vaporização (Lv).</p>

            <img src="https://static.todamateria.com.br/upload/im/ag/image-889.jpg?auto_optimize=low" alt="" style="width: 30%;">

            <p>Calor latente de vaporização da água é de 540 cal/g. Ou seja, são necessárias 540 cal para evaporar 1 g de água a 100 °C.</p>

            <p>Nesse caso, a quantidade de calor necessária (Q) é proporcional à <strong>massa da substância (m)</strong>:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF8AAAAQCAYAAABwQqNMAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAANvpXuIwAAAb1JREFUeNpjYEAFKkA8F4hfA/EvKD0fiNUYRgEy+A/FVAOOQPwFyWBkDBJ3Gw1z2gS+IDSV/4emdFmouDwQL4SKvwRi4dFwp37g10IN24ZDfgtUvpZMRxKDyfG4PRAfB+IfQLwYiDmg4qFAfBcqfhApMdEz8C9Bi24eNHFxqN4LMIGDUAEXHAa5QOUPD6LA98FiRgcQ+2ER3z0Agd8IVROPJp4BFW+ECXyDCjDhMIgNqewfLFn+FhBHQ90Mi4gPQHwOiGOh4l5Q8R8DEPjGUDVb0MR3Q8W1YAJ/iDDsPzQbDZbA18AhrkbrlgkJZt5HK3oEoWF9C1nRJ6hhLARS/rdBVuZTIk6PwO+DqouF8hOh/GZkRduggm4EyvyTo4FPkpn2UHUb0BouxtgqAVytnU1Q+fpB3MwbjIHPgNRhFYcWOXfRFbBAyyFYO18SKi4L5YPE3w2Sdj4tA98LiqkZ+HOhamEJuA+bIh2kjhY6/oSnGTqcAp9YtaQUoehNX3NchspCY+oDNIv8gGrIGAK9y8Ea+CxI4fiUFI8KQztW/6Ht5zwa9BZHAR7ABO05/qFRb3EUEAF0oAFvOhoU1AEAwsQIjhysCY8AAAD5dEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1zdHlsZSBtYXRoc2l6ZT0iMThweCI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPlE8L21pPjxtbz4mI3hBMDs8L21vPjxtbz49PC9tbz48bW8+JiN4QTA7PC9tbz48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+bTwvbWk+PG1vPiYjeEEwOzwvbW8+PG1vPi48L21vPjxtbz4mI3hBMDs8L21vPjxtaT5MdjwvbWk+PC9tc3R5bGU+PC9tYXRoPlN1jwEAAAAASUVORK5CYII=" alt="" style="width: 9%;">

            <p>Onde:</p>

            <p><strong>Lv: é um valor constante que depende da substância.</strong></p>

            <h2>O que é Calor Específico?</h2>

            <p>O <strong>calor específico</strong> é a quantidade de calor necessária para aumentar a temperatura de 1 °C de 1g do elemento. Cada substância possui um calor específico, sendo uma propriedade do material.</p>

            <p>Ele é calculado pela fórmula:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF4AAAAjCAYAAAAdbr1xAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAXQ/cXWQAAAlhJREFUeNrtmr9LAmEYxw8nCWlrkAhBIqIhgoYIiRAaQiSiLUIkAmmI/oNobwiJlojGaHFoaGgJiZAIIkRCJIhwanCLiBDBnoe+wqF33pnvnXk+H/jC+bwnet97fzzvc6dpg8US6Yb0BWVJy5rgKJukPClK8kF8/ERKij3OECYVScMGbQG0hcUm9aRJWxajIS02qadECrZp57YXsUk9VRvnfItNvTG+KjaphxfPUYup5lVsUs8hKWWxuB6LTeoJkZ7bpJPcNi42OUOCVCAt6jZQvJPNkeJij7NweeAOCylnMTXShtjiPnHk71w22CWNiSXu4cM0dE/a68UfiJBuMQTL+DOCw8yQKqRV9IAJ0rnN79ZtSDAhgzlOcJkPkxzXbeoelOUFO2mWYELln/T4geNU5vjeEEYKuYashit5Z2KLeynlA7bR/FB4RSwResE1Rr8Z86Qr0jvOjYhl3bOOFNvstY8gSgxD+OzHbBEU67qjgF18yaR9X2t9sLKNeN/TyP9jpEftt4bEO+wA4lH0Mo7nUOZQARt+geNL9P5m+G20UFOMK5tZrxifwsVMIcZD/wg3Qx9P4OaogEvEkzieRe832ulrHcT7zviMwQLHPfzEIF5T8Jsx/KaerEGGVzPZoVe9Yry/w3i38NQ13RRbwCjQY2awZ4xXEbdLFOmhEZzBLOk+f3p9qnHT+BzmdCPiML8BPzAaMUgxs2J8Z0SwCWpHEdMOc6C1vgS747V0UpXx7UrU3FPnLL6f1PVoTiXLuhvBby+8eWUD5abxf3mwwWtCHgtqvtOSwQ8B3tvl4UrbIQAAAS50RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+YzwvbWk+PG1vPiYjeEEwOzwvbW8+PG1vPj08L21vPjxtbz4mI3hBMDs8L21vPjxtZnJhYz48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+UTwvbWk+PG1yb3c+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPm08L21pPjxtbz4mI3hBMDs8L21vPjxtbz4uPC9tbz48bW8+JiN4QTA7PC9tbz48bWk+JiN4Mzk0OyYjeDNCODs8L21pPjwvbXJvdz48L21mcmFjPjxtbz4mI3hBMDs8L21vPjwvbWF0aD4sCoGNAAAAAElFTkSuQmCC" alt="" style="width: 10%;">


            <p>Onde:</p>

            <p><strong>c: calor específico (cal/g°C ou J/Kg.K)</strong></p>
            <p><strong>Q: quantidade de calor (cal ou J)</strong></p>
            <p><strong>m: massa (g ou Kg)</strong></p>
            <p><strong>Δθ: variação de temperatura (°C ou K)</strong></p>
            <p><strong>C: capacidade térmica (cal/°C ou J/K)</strong></p>


        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(Unifor-CE) Um cubo de gelo de massa 100 g, inicialmente à temperatura de - 20 °C, é aquecido até se transformar em água a 40 °C (dados: calor específico do gelo 0,50 cal/g °C; calor específico da água 1,0 cal/g °C; calor de fusão do gelo 80 cal/g). As quantidades de calor sensível e de calor latente trocados nessa transformação, em calorias, foram, respectivamente:</p>
                <p>a) 8.000 e 5.000</p>
                <p>b) 5.000 e 8.000</p>
                <p>c) 5.000 e 5.000</p>
                <p>d) 4.000 e 8.000</p>
                <p>e) 1.000 e 4.000</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: b) 5.000 e 8.000.
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(FUVEST) Dispõe-se de água a 80°C e gelo a 0°C. Deseja-se obter 100gramas de água a uma temperatura de 40°C (após o equilíbrio), misturando água e gelo em um recipiente isolante e com capacidade térmica desprezível. Sabe-se que o calor específico latente de fusão do gelo é 80 cal/g e o calor específico sensível da água é 1,0 cal/g°C. A massa de gelo a ser utilizada é:</p>
                <p>a) 5,0g</p>

                <p>b) 12,5g</p>

                <p>c) 25g</p>

                <p>d) 33g</p>

                <p>e) 50g</p>
                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: c) 25g
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Não deixe de aprender mais:</h4>
            <br>
            <li><a href="leisTermodinamica.php"> Leis da Termodinâmica</a></li>
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