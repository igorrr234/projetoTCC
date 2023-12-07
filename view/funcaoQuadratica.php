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
    <title>Função Quadrática - Aprenda Fácil</title>
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

        .funcao {
            align-items: center;
            justify-content: center;
        }

        .funcao h1 {
            text-align: center;
            align-items: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .funcao img {
            display: flex;
            width: 70%;
            border-radius: 3%;
            margin-bottom: 30px;
        }

        .funcao p {
            font-size: 17px;
            line-height: 1.4;
            margin-bottom: 16px;
        }

        .funcao h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .funcao h3 {
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

        .funcao h5 {
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
        <div class="funcao">
            <h1><u>Função Quadrática</u></h1>
            <h2>O que é uma Função Quadrática?</h2>


            <p>A <a href="">função quadrática</a>, também chamada de <strong>função polinomial de 2º grau</strong>, é uma função representada pela seguinte expressão:</p>

            <p><strong>f(x) = ax² + bx + c</strong></p>

            <p>Onde <strong>a, b e c</strong> são números reais e <strong>a</strong> ≠ 0.</p>


            <h3>Exemplo:</h3>

            <p><strong>f(x) = 2x² + 3x + 5,</strong></p>

            <p> sendo,</p>

            <p>a = 2</p>
            <p> b = 3</p>
            <p>c = 5</p>

            <p>Nesse caso, o polinômio da função quadrática é de grau 2, pois é o maior expoente da variável.</p>


            <h2>Como resolver uma função quadrática?</h2>



            <p>Confira abaixo o <strong>passo-a-passo</strong> por meio um exemplo de resolução da função quadrática:</p>

            <h3>Exemplo</h3>

            <p>Determine a, b e c na função quadrática dada por: f(x) = ax² + bx + c, sendo:</p>

            <p>f (-1) = 8</p>
            <p>f (0) = 4</p>
            <p>f (2) = 2</p>

            <p>Primeiramente, vamos substituir o x pelos valores de cada função e assim teremos:</p>

            <p><strong>f (-1) = 8</strong></p>
            <p>a (-1)2 + b (–1) + c = 8</p>
            <p>a - b + c = 8 <strong>(equação I)</strong></p>

            <p><strong>f (0) = 4</strong></p>
            <p>a . 02 + b . 0 + c = 4</p>
            <p>c = 4 <strong>(equação II)</strong></p>

            <p><strong>f (2) = 2</strong></p>
            <p>a . 22 + b . 2 + c = 2</p>
            <p>4a + 2b + c = 2 <strong>(equação III)</strong></p>

            <p>Pela segunda função f (0) = 4, já temos o valor de c = 4.</p>

            <p>Assim, vamos substituir o valor obtido para c nas equações I e III para determinar as outras incógnitas (a e b):</p>

            <p><strong>(Equação I)</strong></p>

            <p>a - b + 4 = 8</p>
            <p>a - b = 4</p>
            <p>a = b + 4</p>

            <p>Já que temos a equação de a pela Equação I, vamos substituir na III para determinar o valor de b:</p>

            <p><strong>(Equação III)</strong></p>

            <p>4a + 2b + 4 = 2</p>
            <p>4a + 2b = - 2</p>
            <p>4 (b + 4) + 2b = - 2</p>
            <p>4b + 16 + 2b = - 2</p>
            <p> 6b = - 18</p>
            <p> b = - 3</p>

            <p> Por fim, para encontrar o valor de a substituímos os valores de b e c que já foram encontrados. Logo:</p>

            <p><strong>(Equação I)</strong></p>

            <p>a - b + c = 8</p>
            <p>a - (- 3) + 4 = 8</p>
            <p> a = - 3 + 4</p>
            <p> a = - 3 + 4</p>
            <p>a = 1</p>

            <p> Sendo assim, os coeficientes da função quadrática dada são:</p>

            <p>a = 1</p>
            <p>b = - 3</p>
            <p>c = 4</p>

            <h2>Raízes da Função</h2>

            <p>As raízes ou zeros da função do segundo grau representam aos valores de x tais que f(x) = 0. As raízes da função são determinadas pela resolução da equação de segundo grau:</p>

            <p><strong>f(x) = ax² +bx + c = 0</strong></p>

            <p>Para resolver a equação do 2º grau podemos utilizar vários métodos, sendo um dos mais utilizados é aplicando a <a href="">Fórmula de Bhaskara</a>, ou seja:</p>

            <img src="https://static.todamateria.com.br/upload/58/7e/587e4d614823c-funcao-quadratica.jpg" alt="" style="width: 10%;">

            <img src="https://static.todamateria.com.br/upload/58/7e/587e4d6c59419-funcao-quadratica.jpg?auto_optimize=low" alt="" style="width: 10%;">


            <h3>Exemplo</h3>

            <p>Encontre os zeros da função f(x) = x² – 5x + 6.</p>

            <h3>Solução:</h3>
            <p>Sendo</p>
            <p>a = 1</p>
            <p> b = – 5</p>
            <p>c = 6</p>


            <p>Substituindo esses valores na fórmula de Bhaskara, temos:</p>

            <img src="data:image/png;base64,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YQBeZMc0WeuzN+N388aNLLUjncHLZGGSWMWNSu0xrg9mNOI01n09DeuBMJD26SP0nsjTWff1NKwHwkA+uUh/zY6apr/u62lYD4SkSeVS986/VdIPxKnunX51X0/DeiAgUnVfT8N6ICBSdV9Pw3ogIFJ1X0/DeiAgUnVfT8N6ICBSdV9Pw3ogIGJ1X0/DeiAgYnVfT8N6INTa/wAkLaKd5ewWbQAAAx10RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bWk+eDwvbWk+PG1vPj08L21vPjxtZnJhYz48bXJvdz48bW8+LTwvbW8+PG1pPmI8L21pPjxtbz4mI3hCMTs8L21vPjxtc3FydD48bXN1cD48bWk+YjwvbWk+PG1uPjI8L21uPjwvbXN1cD48bW8+LTwvbW8+PG1uPjQ8L21uPjxtaT5hPC9taT48bWk+YzwvbWk+PC9tc3FydD48L21yb3c+PG1yb3c+PG1uPjI8L21uPjxtaT5hPC9taT48L21yb3c+PC9tZnJhYz48bW8+PTwvbW8+PG1mcmFjPjxtcm93Pjxtbj41PC9tbj48bW8+JiN4QjE7PC9tbz48bXNxcnQ+PG1uPjI1PC9tbj48bW8+LTwvbW8+PG1uPjI0PC9tbj48L21zcXJ0PjwvbXJvdz48bW4+MjwvbW4+PC9tZnJhYz48bXNwYWNlIGxpbmVicmVhaz0ibmV3bGluZSIvPjxtc3ViPjxtaT54PC9taT48bW4+MTwvbW4+PC9tc3ViPjxtbz49PC9tbz48bWZyYWM+PG1yb3c+PG1uPjU8L21uPjxtbz4rPC9tbz48bW4+MTwvbW4+PC9tcm93Pjxtbj4yPC9tbj48L21mcmFjPjxtbz49PC9tbz48bWZyYWM+PG1uPjY8L21uPjxtbj4yPC9tbj48L21mcmFjPjxtbz49PC9tbz48bW4+MzwvbW4+PG1zcGFjZSBsaW5lYnJlYWs9Im5ld2xpbmUiLz48bXN1Yj48bWk+eDwvbWk+PG1uPjI8L21uPjwvbXN1Yj48bW8+PTwvbW8+PG1mcmFjPjxtcm93Pjxtbj41PC9tbj48bW8+LTwvbW8+PG1uPjE8L21uPjwvbXJvdz48bW4+MjwvbW4+PC9tZnJhYz48bW8+PTwvbW8+PG1mcmFjPjxtbj40PC9tbj48bW4+MjwvbW4+PC9tZnJhYz48bW8+PTwvbW8+PG1uPjI8L21uPjwvbWF0aD7nYdmIAAAAAElFTkSuQmCC" alt="" style="width: 25%;">

            <p>Portanto, as raízes são 2 e 3.</p>

            <p>Observe que a quantidade de raízes de uma função quadrática vai depender do valor obtido pela expressão: <strong>Δ = b² – 4. ac</strong>, o qual é chamado de discriminante.</p>

            <p>Assim,</p>

            <p>Se <strong>Δ > 0</strong>, a função terá duas raízes reais e distintas (x1 ≠ x2);</p>
            <p>Se <strong>Δ , a função não terá uma raiz real</strong>;</p>
            <p>Se <strong>Δ = 0</strong>, a função terá duas raízes reais e iguais (x1 = x2).</p>


            <h2>Gráfico da função quadrática</h2>




            <p>O gráfico das funções do 2º grau são curvas que recebem o nome de parábolas. Diferente das <a href="funcaoAfim.php">funções do 1º grau</a>, onde conhecendo dois pontos é possível traçar o gráfico, nas funções quadráticas são necessários conhecer vários pontos.</p>

            <p>A curva de uma função quadrática corta o eixo x nas raízes ou zeros da função, em no máximo dois pontos dependendo do valor do discriminante <strong>(Δ)</strong>. Assim, temos:</p>

            <p>Se Δ > 0, o gráfico cortará o eixo x em dois pontos;</p>
            <p>Se Δ</p>
            <p>Se Δ = 0, a parábola tocará o eixo x em apenas um ponto.</p>
            <p>Existe ainda um outro ponto, chamado de <a href="">vértice da parábola</a>, que é o valor máximo ou mínimo da função. Este ponto é encontrado usando-se a seguinte fórmula:</p>


            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJ4AAAAkCAYAAAB41INoAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAXQ/cXWQAAA89JREFUeNrtXFFIVEEUHURkiUUQEQmJBfEjJKQ/CQkJIkJk8U9EIsS/iJB+IkQiJIgIPyQCiZCIEEQkRPyJEAmRIEQiJAI/IiSkn5AICWG7tz1br3HevtF9vJ3n3AOH3Te7T3eP983ce+Y+lTre+EmsUQJBgmgjvhcZEsFZYgGP3qOPOCMyJILHxEXilEih1B3iKPEu8Stxj7hMPCnSxIoscZtYi8d63wWZJW4RbxEbkOtNyCwYO24Sx/F8HMde4xOxXRvjq3FXYiVWbBJzeH6K+PE4fbmCBYOoQUWrIyOBFysuILcL4iXGvUQn8jkd54ivJV4quqiDWDAEmSkYvcEAcTokHxmTWIsF5ZbVTbzuHSaJQ9pYnSr6elLVxoNyhcQI3ATvMI/i4iKOWzA2JPESC9g6+aLCrZMsXvdu12iHmEfw7RM3VNFQFsSDQRVtFrOpfEWkEsSJVcui5I1IJXAWw8T7IUnksMhzAM3EOVXcivtM7I54/1Nif0gifs93MdchaAmcjD864s+qxB9yHfWokPM45h2SDxHnXCU+0MZOIA9t9F3by6q4n6lQEYrZagYH0G1tjE3TujLn9Kji/nEQ3MggviLwCsvGxhGuxLhQSJiHAVsE34lN2thuhH3QqM2KfD43MWSOubbWWnPO8YvYkcAXTCM6Q77LqsW5wf3jCWgt2hK6kDCzKAMy+RuRNyyZtmB7oRXcUtKW/wcsxgISXnae31VxqXUZ3Gjw9ojnPkPgvlBirv7NN5a0QOslPje8d9pgC7Sgyst4otcmlkmesRpQaJy3OG8EtkrYvSBeacuV2Dy+oI4ZVLpB9KuDnR/cg3XJs9WBl819BKGtz9mH/Csf8rpoWwbsYW1rOU8S7eSl/HMXxQ9X3YMpzA/XHNQ2DL2uFSqc45xGPsgWQXMCv3MFBU8Wx+2oJNNUBC0hR3RNWxOymM2dCjzutbpBfEi8VsXPkVPpuXf2jLLrzHVF2ymkEE4FXjeuxjUHPsueYawGf8CdwLKcS0mAuqAtpzWlXauwwKuKxqWbadodsDZMxi3PLJPq322Nsyo9/XjV1rbUqZ2LCLw0a1wRMsiHurTxAXXQ4GX/rEfqQitwh9L1wLEp8LzVuKGMzbBsSOBXUrTUVhMdhhWkIBoX0Yqgawt5Xf8PUfz8h8SUtVvRZhF43mnMNsMTWA1h+GZIlNclpqxg23jglcbNyCtqI963rf7fXuJ+tzmJqYqC0WuNFzHjRYFb9acw/XPOwRvySxI/sQaeVxofpvdsFLPjGK7MHSW3N8YZeKKxJZpEArc0/g1Qllf/paob/wAAAXV0RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bXN1Yj48bWk+eDwvbWk+PG1pPnY8L21pPjwvbXN1Yj48bW8+PTwvbW8+PG1mcmFjPjxtcm93Pjxtbz4tPC9tbz48bWk+YjwvbWk+PC9tcm93Pjxtcm93Pjxtbj4yPC9tbj48bWk+YTwvbWk+PC9tcm93PjwvbWZyYWM+PG1vPiYjeEEwOzwvbW8+PG1vPiYjeEEwOzwvbW8+PG1pPmU8L21pPjxtbz4mI3hBMDs8L21vPjxtc3ViPjxtaT55PC9taT48bWk+djwvbWk+PC9tc3ViPjxtbz49PC9tbz48bWZyYWM+PG1yb3c+PG1vPi08L21vPjxtbz4mI3gyMjA2OzwvbW8+PC9tcm93Pjxtcm93Pjxtbj40PC9tbj48bWk+YTwvbWk+PC9tcm93PjwvbWZyYWM+PC9tYXRoPlO3yb8AAAAASUVORK5CYII=" alt="" style="width: 15%;">


            <p>O <strong>vértice</strong> irá representar o ponto de valor máximo da função quando a parábola estiver voltada para baixo e o valor mínimo quando estiver para cima.</p>

            <p>É possível identificar a posição da concavidade da curva analisando apenas o sinal do coeficiente a. Se o coeficiente for positivo, a concavidade ficará voltada para cima e se for negativo ficará para baixo, ou seja:</p>

            <img src="https://static.todamateria.com.br/upload/fu/nc/funcao2grauconcavidade.jpg?auto_optimize=low" alt="" style="width: 40%;">

            <p>Assim, para fazer o esboço do gráfico de uma função do 2º grau, podemos analisar o valor do a, calcular os zeros da função, seu vértice e também o ponto em que a curva corta o eixo y, ou seja, quando x = 0.</p>


            <p>A partir dos <strong>pares ordenado</strong>s dados <strong>(x, y)</strong>, podemos construir a parábola num plano cartesiano, por meio da ligação entre os pontos encontrados.</p>

        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(Vunesp-SP) Todos os possíveis valores de m que satisfazem a desigualdade 2x2 – 20x – 2m > 0, para todo x pertencente ao conjunto dos reais, são dados por:</p>


                <p>a) m > 10</p>
                <p>b) m > 25</p>
                <p>c) m > 30</p>
                <p>d) m e) m</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: b) m > 25
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(UE-CE) O gráfico da função quadrática f(x) = ax² + bx é uma parábola cujo vértice é o ponto (1, – 2). O número de elementos do conjunto x = {(– 2, 12), (–1,6), (3,8), (4, 16)} que pertencem ao gráfico dessa função é:</p>
                <p>a) 1</p>
                <p>b) 2</p>
                <p>c) 3</p>
                <p>d) 4</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: b) 2
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
            </div>
            <br>
            <h4>Veja mais sobre:</h4>
            <br>
            <li><a href="funcaoAfim.php">Função Afim</a></li>
            <li><a href="funcaoexpo.php">Função Exponencial</a></li>

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