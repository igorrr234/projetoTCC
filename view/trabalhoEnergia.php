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
    <title>Trabalho e Energia - Aprenda Fácil</title>
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

        .trabalho h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .trabalho img {
            width: 70%;
            border-radius: 3%;
            margin-bottom: 15px;
        }

        .trabalho {
            align-items: center;
            justify-content: center;
        }

        .trabalho p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .trabalho h2 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .trabalho h3 {
            font-size: 1.35rem;
            margin-bottom: 10px;
        }

        .trabalho h4 {
            margin-bottom: 5px;
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

        .exercicio1 p {
            margin-top: 5px;
            line-height: 1.5;
        }

        .video h2 {
            margin-bottom: 10px;
        }

        .trabalho h5 {
            margin-bottom: 10px;
        }

        .video iframe {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="trabalho">
            <h1><u>Trabalho e Energia</u></h1>
            <h2>O que é Trabalho?</h2>
            <p><strong>Trabalho</strong> é uma grandeza física relacionada a transferência de energia devido a atuação de uma força. Realizamos um trabalho quando aplicamos uma força em um corpo e este sofre um deslocamento.</p>

            <p>Apesar da força e do deslocamento serem duas grandezas vetoriais, o trabalho é uma grandeza escalar, ou seja, fica totalmente definida com um valor numérico e uma unidade.</p>
            <p>A unidade de medida do trabalho no sistema internacional de unidades é o N.m. Essa unidade recebe o nome de joule (J).</p>

            <p>Este nome é em homenagem ao físico inglês <strong>James Prescott Joule (1818-1889)</strong>, que realizou importantes estudos no estabelecimento da relação entre <strong>trabalho mecânico e calor</strong>.</p>
            <img src="https://guiadoestudante.abril.com.br/wp-content/uploads/sites/4/2017/09/fisica.jpg?quality=100&strip=info&w=1024" alt="" style="width:65%">

            <h2>O que é Energia?</h2>
            <p>A <strong>energia</strong> é definida como a capacidade de produzir <strong>trabalho</strong>, ou seja, um corpo só é capaz de realizar um trabalho se possuir energia.</p>

            <p>Por exemplo, um guindaste só é capaz levantar um carro (produzir trabalho) quando ligado a uma fonte de energia.</p>

            <p>Da mesma forma, só conseguimos fazer nossas atividades normais, por que recebemos energia dos alimentos que ingerimos.</p>

            <h2>Trabalho de uma Força</h2>

            <h3>Força constante</h3>

            <p>Quando uma <strong>força constante</strong> atua em um corpo, produzindo um deslocamento, o trabalho é calculado usando-se a seguinte fórmula:</p>

            <p><strong>T = F . d . cos θ</strong></p>
            <p>Sendo:</p>

            <p><strong>T: trabalho (J)</strong></p>
            <p><strong>F: força (N)</strong></p>
            <p><strong>d: deslocamento (m)</strong></p>
            <p><strong>θ: ângulo formado entre o vetor força e a direção do deslocamento</strong></p>

            <p>Quando o deslocamento acontece no mesmo sentido da componente da força que atua no deslocamento, o trabalho é motor. Ao contrário, quando ocorre em sentido contrário, o trabalho é resistente.</p>

            <h4>Exemplo</h4>
            <p>Uma pessoa quer mudar a posição de um armário e para isso o empurra fazendo uma força constante e paralela ao chão, com intensidade de <strong>50N</strong>, conforme figura abaixo. Sabendo que o deslocamento sofrido pelo armário foi de <strong>3 m</strong>, determine o trabalho realizado pela pessoa sobre o armário, nesse deslocamento.</p>
            <img src="https://static.todamateria.com.br/upload/tr/ab/trabalhoarmario.jpg" alt="" style="width: 40%;">
            <h4>Solução</h4>
            <p>Para encontrar o trabalho da força, podemos substituir diretamente na fórmula os valores informados. Observando que o ângulo θ será igual a zero, pois a direção e o sentido da força e do deslocamento são os mesmos.</p>
            <p>Calculando o trabalho:</p>
            <p><strong>T = 50 . 3 . cos 0º</strong></p>
            <p><strong>T = 150 J</strong></p>


            <h3>Força variável</h3>
            <p>Quando a força não é constante, não podemos utilizar a fórmula acima. Contudo, verifica-se que o trabalho é igual, em módulo, a área do gráfico da componente da força pelo deslocamento (F x d).</p>

            <img src="https://static.todamateria.com.br/upload/tr/ab/trabalhografico3.jpg?auto_optimize=low" alt="" style="width: 34%;">

            <p>| T |= área da figura</p>

            <h4>Exemplo</h4>

            <p>No gráfico abaixo, representamos a força motora que age no movimento de um carro. Determine o trabalho desta força que atua na direção do movimento do carro, sabendo que o mesmo partiu do repouso.</p>

            <img src="https://static.todamateria.com.br/upload/tr/ab/trabalhografico4.jpg?auto_optimize=low" alt="" style="width: 34%;">

            <h4>Solução</h4>

            <p>Na situação apresentada, o valor da força não é constante em todo o deslocamento. Sendo assim, vamos calcular o trabalho através do cálculo da área da figura, que nesse caso é um <strong>trapézio</strong>.</p>

            <img src="data:image/png;base64,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" alt="" style="width: 23% ;">

            <p>Assim, no deslocamento a força motora fez um trabalho de <strong>540 kJ.</strong></p>

            <h2>Trabalho da Força Peso</h2>

            <p>Todos os corpos nas proximidades da superfície da Terra, sofrem a atuação de uma força devido ao <strong>campo gravitacional terrestre</strong>.</p>

            Sendo assim, quando um corpo é abandonado de uma determinada altura, ele sofre um deslocamento provocado por esta força, chamada de <strong>força peso</strong>.

            <p>A força peso é calculada por P = m.g. Desta forma, podemos calcular o trabalho da força peso, com sendo:</p>

            <p><strong>T = m . g . h</strong></p>
            <p>Sendo:</p>

            <p><strong>T: trabalho (J)</strong></p>
            <p><strong>m: massa do corpo (kg)</strong></p>
            <p><strong>g: aceleração da gravidade (m/s2)</strong></p>
            <p><strong>h: altura (m)</strong></p>

            <p>O <strong>trabalho da força peso</strong> não depende do caminho, ou seja, seu valor só depende do ponto inicial e final da trajetória.</p>

            <p>Quando um corpo está caindo, o trabalho da força peso é motor, pois ela atua no mesmo sentido do deslocamento.</p>

            <p>Se, ao contrário, o corpo estiver subindo, o trabalho é resistente, pois o peso atua no sentido contrário do deslocamento.</p>

            <h4>Exemplo</h4>

            <p>Um corpo de massa igual a <strong>4 kg</strong> é abandonado do alto de um prédio a uma altura de <strong>12 m</strong>. Considerando o valor da aceleração da gravidade local igual a <strong>9,8 m/s²</strong>, determine o trabalho produzido pela força peso no deslocamento do corpo até o chão.</p>

            <h4>Solução</h4>

            <p>Para calcular o <strong>trabalho da força peso</strong>, basta multiplicar os valores indicados no enunciado. Como a força peso atua na mesma direção e sentido da deslocamento, o trabalho será positivo.</p>

            <p>T = 4 . 9,8 . 12 = <strong>470,4 J</strong></p>

            <h2>Trabalho da Força Elástica</h2>

            <p>Quando esticamos ou comprimimos uma mola, verificamos que surge uma força que tenta fazer com que a mola volte a sua posição de equilíbrio.</p>

            <p>Essa força, chamada de <strong>força elástica</strong>, não é constante e sua intensidade varia em função da deformação. Abaixo apresentamos o gráfico da força elástica:</p>
            <img src="https://static.todamateria.com.br/upload/tr/ab/trabalhofel.jpg?auto_optimize=low" alt="" style="width: 34%;">

            <p>Assim, o módulo do trabalho da força elástica será igual a área da figura, que neste caso é um triângulo. Sendo expresso por:</p>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPYAAAAjCAYAAACn4fdUAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAXQ/cXWQAABhFJREFUeNrtnHFkXEkcx8daURElqiLilFUVESfUiYiqUlVVsY5z4v6oCBV1Kk6JU2tVHVWn4pyjqiKiQkScijpO1ao4oc6pUxX6R504UU5VRETZm5/9Ria/zLw37+3bl93X34cfL/Nm5s383vze/OY3s1FKEARftrTkRA2CkB1OankpahCEbFHUMi9qEIRsUdYyheu8llktlzzLjmu5Y0m/jXuNLi8IgoMFzNpHcH0uYvk/tXQZf49p+TnF8oIgWFjT0q/lsZbBGOUvarmH6/NanqZcXhAEBkXCKSL+B4w7Lr9rOavlLy3HDqF8yzGt5SsZf0KDoBn6mZZRLQ/rqGdSy46Wzw+pfEsxoaUkY09oIGTQM7j+EWMuKsNaFuFOj6ZZvpqAAqopK/yCqkUnBaGR/KTlKnOJhyOUL2Bt3q6lQ8uLiK50XeVb0bCFZDgPF29GVGFlSe3f2urUsqql22EDph0c1/KEGeJlLXMBNlRPeS+jzOGFVwNkR+0ds0vbsCdbaHA0w3FEWxsGtPyNdduGlj7R2QH+U7VtLhMKoj21pJuG2YaPQo+lTjrscjHEsOOUjzXbnlK1iFwzzNhf46OSbwGjTvI4ItW1klAbTrCZ50vMDlnT2SeNj1HSi3/UBIbdiZdOa51iC+g2yeOIYe8gK8gRzhQN+5aWG01g2PdVLTJ4RdlP3+we/5tAoGFb7R0HJOgEzyLS36ra3iBfgtyCa7oDL+WEZ9s6EGx5j/oX0cYplo/WTrR1sol8sxa3ztYvcxk0FaHPZUsbSA/30E/K/8DyvBvINwPXmNzS65a2UWDnrpZ3Af22tcGVXk5IZ2LYHnnoZY3UUUfVQ8IY0rJsDMw3ljx05G9d1bYmCuzeUcz2u/3owxrTZBnG2QkjX/D0DCgv7XeO4fqoYYxFi8dh5puHYYThaktQn13lSkjLwx3fhgtslrkOoz6LtvYgX7uRj8pXYIh5yHdaPrJnBrW9GJIWR2dJjLdPwrDfKHskMK0ZO4/Z6DMjjc7Q9rJ8a3BZbdBA+N5iyG24HsWgMvE98F9yzEhrLAByFwPfpIB8Ybx2eA9Bfba1wRUk6mJlrjryHWP9/sHxzG6PNtjSk9SZzNghRrWZwMehHsqWpQANqGts1twKmFHfw6Uz0z6ovejrM3gFJhVPV/wfuOIqoD05uKvchTyCtoV5BFsR0n3vu9q56RgHvK5/1cF9VV4+StuT1Fk99tCKEtkohzDo6zHselyjXszOHHIRHxt/Dwa0c9DxTDPKzLdYch4fNGIAHwDbM832nNby3COfq/2VGGVt93fX12/hMldZHledQzH746rPlp6UzsQV9+ikeazuMGbs5yp4Lz3v0c4Ri5vNecf+HnZ8UDjkBs956M3VhkmHO8vrmo3xbvj9LqxPTzO9zXrUydN9++2q74olPUmdiSsecp+CSeOHZNi0zpsOuD9vrIGD2kmzzWrIs9aZy1dC0DCMomPwzbF1Kh0qeGJxPV9ZYgUc0sG3Md4Nv39bHTxvTHkmPOrk6SPKvi01x/JNq4PR9C/gxo9bnpGUzsSwQ+4veQSQGmHYFHx5aVm7mowbhh/Wzlf40tPA6EQg7Qwb9Pdxn9bVj5TfoY121D1guI/L+FBcYmtUSruMv3vQ5psez6Dto4cx3g2//wv6tRtdvoa2j3nUydOp/IbR7wF8CNfV/m3EMjyCHGIcZfTH9pylBHUmhh1y33asLg3DXjBeqAt60Wue7SzArf+IwWyblW7iuSXUtaH8tru6MOBoO4h+u3vO0Z4zeDYtIV4zgwqiDwOc9NwW4d3w+6SvF3j+KmbdSQSiciF12tJHsFbfQb0XsKQxYxX0Ef0NeSrGO7XVl6TOxLCbpI5m5LgMj0j0Kzk1xuM05MV8UHsHnr4RwxaamV649t3GunlF1r77qCCm0WF4Xisq3u+yBSEVdo/Q0pbgFuIR/aKWUCh+Iz9yEYQMsi0qEIRsMaTi/fxWEIQmhSL+tBsxLKoQhGxA236/qtqWoCAIGaAAoz4pqhCEbEDbf/SPLNpFFYKQDehEIp1kzIsqBCE7LCs5sCMImSP134P/D7/QCGzfQxZuAAABmXRFWHRNYXRoTUwAPG1hdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTgvTWF0aC9NYXRoTUwiPjxtZmVuY2VkIGNsb3NlPSJ8IiBvcGVuPSJ8Ij48bWk+VDwvbWk+PC9tZmVuY2VkPjxtbz49PC9tbz48bWk+JiN4QzE7PC9taT48bWk+cjwvbWk+PG1pPmU8L21pPjxtaT5hPC9taT48bW8+JiN4QTA7PC9tbz48bWk+ZDwvbWk+PG1pPm88L21pPjxtbz4mI3hBMDs8L21vPjxtaT50PC9taT48bWk+cjwvbWk+PG1pPmk8L21pPjxtaT4mI3hFMjs8L21pPjxtaT5uPC9taT48bWk+ZzwvbWk+PG1pPnU8L21pPjxtaT5sPC9taT48bWk+bzwvbWk+PG1vPj08L21vPjxtZnJhYz48bXJvdz48bWk+azwvbWk+PG1vPi48L21vPjxtaT54PC9taT48bW8+LjwvbW8+PG1pPng8L21pPjwvbXJvdz48bW4+MjwvbW4+PC9tZnJhYz48L21hdGg+YnfZsQAAAABJRU5ErkJggg==" alt="" style="width: 23% ;">
            <br>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAAAnCAYAAACyhj57AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAbSkFbcgAAAfZJREFUeNrtmsFHRFEUxq+MjCSSJC1iJMlom8wikSRJ2j2tMiStWkTLpE2LtEi7JEmGJCOjTZIWI0MyWkb/Qoskmc3rO+aM3rw3b5qZZp65t/Px476Zue+Nz733nHvPU+p/yWZyIA0GlKhILWAVPIkVpfUlFng1Du51+bOfPMwbrV5eYyI6mEIL4XMAzxkEKTZHC82DRAAj5Rp06DTnN8EGt0PgBMxU2DcOdkp8vs3fFUSmDOm2GJ7zqAlze6LK/hR6exzXS+DAJ49x0vR6AVFwBUZr6D8N9rg9CW5NSbgoIj2wObXqhsNwFnSZYAyNkDtggaM/3GeN0/0RU5ItMuSY27tgpYZ7xMAFTyfLFGP2wbJrSsSq6B/htakNtINHU6bSpSs0d4KMTxLmjibdHIadRsyC03otfjmfcObcqjcqXX/jMO1UlCNLuIwxrWxqX4l7JjhS1T1tzso+06sFcCY2eLUF1sUGryjszVXwO7sCjNKrTtvyoEQ7248AnmM3Kb4a4/RcyVTyT89FrvQ8Ljb8np6LyqTnIk1UOGJ45z0cbV8WxZZ8ocziIwbSsMrXiSyxxqt+FUxdSktJLdonMU2LDcWiKJpR1R2HGi86Bk2CKbHiRxE2Rd6Mcohq0IcqXxkQsahGTfXtkFhRrJTS8K2FINTw859vSYWZFEcA1UEAAACudEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1pPlQ8L21pPjxtbz49PC9tbz48bWZyYWM+PG1yb3c+PG1pPms8L21pPjxtbz4uPC9tbz48bXN1cD48bWk+eDwvbWk+PG1uPjI8L21uPjwvbXN1cD48L21yb3c+PG1uPjI8L21uPjwvbWZyYWM+PC9tYXRoPiPTGU0AAAAASUVORK5CYII=" alt="" style="width: 7% ;">

            <p>Onde:</p>

            <p><strong>T: trabalho (J)</strong></p>
            <p><strong>k: constante elástica da mola (N/m)</strong></p>
            <p><strong>x: deformação da mola (m)</strong></p>

            <p>O trabalho da força elástica, assim como o trabalho da força peso, também não depende da trajetória. Forças que possuem essa característica são chamadas de <strong>conservativas</strong>.</p>

            <h2>Energia Potencial Gravitacional</h2>

            <p>A <strong>energia potencial gravitacional</strong> é a energia relacionada com a posição do corpo em relação a superfície terrestre.</p>

            <p>Essa energia é igual ao trabalho da força peso ao deslocar o corpo de uma altura h até um ponto de referência. Sendo indicada por:</p>

            <p><strong>Epg = T = P . h</strong></p>

            <p>Onde:</p>

            <p><strong>Epg: energia potencial gravitacional (J)</strong></p>
            <p><strong>T: Trabalho (J)</strong></p>
            <p><strong>P: força peso (N)</strong></p>
            <p><strong>h: altura (m)</strong></p>
            <div class="video">

                <h2>Veja o vídeo a seguir:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/7IcuTJyT1zw?si=zYB9Lqgl4b1CzE24" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>1) UERJ - 2011

                    Uma pessoa empurrou um carro por uma distância de 26 m, aplicando uma força F de mesma direção e sentido do deslocamento desse carro. O gráfico abaixo representa a variação da intensidade de F, em newtons, em função do deslocamento d, em metros. </p>
                <img src="https://static.todamateria.com.br/upload/ue/rj/uerj2011630-1.jpg?auto_optimize=low" alt="" style="width: 25% ;">
                <p>Desprezando o atrito, o trabalho total, em joules, realizado por F, equivale a:</p>
                <p>a) 117</p>
                <p> b) 130</p>
                <p>c) 143</p>
                <p>d) 156</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: d) 156</p>
                    <p>Para calcular o trabalho de uma força variável, devemos encontrar a área da figura, que neste caso é um triângulo.
                    </p>
                    <p> A = (b.h) /2</p>
                    <p>Como não conhecemos o valor da altura, podemos usar a relação trigonométrica: h2 = m.n. Então:</p>
                    <p>h2 = 8.18 = 144</p>
                    <p>h=12m</p>
                    <p>Agora podemos calcular a área:</p>
                    <p>T = (12.26)/2</p>
                    <p>T = 156 J</p>
                    <p></p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>2)Marque a alternativa correta:</p>
                <p>a) O trabalho de uma força independe de o corpo entrar em movimento</p>

                <p>b) Trabalho é uma grandeza vetorial.</p>

                <p>c) O trabalho é definido como motor caso a força e o deslocamento tenham o mesmo sentido.</p>

                <p>d) O trabalho de uma força é diretamente proporcional à força aplicada sobre ele e inversamente proporcional à distância percorrida.</p>
                <p>e) Quando o trabalho é efetuado pela força peso, depende apenas da trajetória percorrida pelo objeto.</p>
                </p>
                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: c) O trabalho é definido como motor caso a força e o deslocamento tenham o mesmo sentido. Pois o trabalho é definido como motor caso a força e o deslocamento tenham o mesmo sentido. Vejamos por que as demais estão incorretas:

                        Alternativa “a” está incorreta porque o trabalho é definido como a relação entre força e o deslocamento. Portanto, se não há deslocamento, não foi realizado nenhum trabalho.

                        Alternativa “b” está incorreta porque o trabalho é uma grandeza escalar. Grandezas vetoriais são aquelas que possuem módulo, direção e sentido. O trabalho possui apenas módulo, portanto, não pode ser caracterizado como grandeza vetorial.

                        A alternativa “d” é incorreta porque, de acordo com equação T = F . d, podemos perceber que o trabalho é diretamente proporcional à força e ao deslocamento.

                        A alternativa “e” está incorreta, pois o trabalho independe da trajetória percorrida.</p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Não deixe de aprender mais:</h4>
            <br>
            <li><a href="leisNewton.php"> Leis de Newton</a></li>
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