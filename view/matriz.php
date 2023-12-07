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
    <title>Matrizes - Aprenda Fácil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .aulas-list {
            list-style-type: none;
            padding: 20;
            margin-top: 35px;
        }


        .aulas-list a {
            color: #333;
            text-decoration: none;
        }

        .aulas-list h1 {
            margin-bottom: 30px;
            text-align: center;
        }

        .aula {
            background-color: #fff;
            margin: 10px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .aula a:hover {
            color: #696969;
        }

        .aula h2 {
            color: #008BFF;
            margin-top: 0;
        }


        .aula p {
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <ul class="aulas-list">

        <h1><u>Matrizes</u></h1>
        <li class="aula">
            <a href="../view/definicaoMatriz.php">
                <h2>Definição de Matrizes</h2>
                <p>
                    Matrizes são conjuntos retangulares de números, dispostos em linhas e colunas. São frequentemente representadas usando colchetes.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/operacaoMatriz.php">
                <h2>Operações Básicas</h2>
                <p>Adição e subtração de matrizes envolvem a soma ou diferença dos elementos correspondentes. A multiplicação por um escalar implica a multiplicação de todos os elementos da matriz por um número.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/multiplicacaoMatriz.php">
                <h2>Multiplicação de Matrizes</h2>
                <p>
                    A multiplicação de duas matrizes é uma operação que produz uma nova matriz cujos elementos são obtidos através de combinações lineares de linhas e colunas das matrizes originais.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/matrizTransposta.php">
                <h2>Matriz Transposta</h2>
                <p>
                    A transposta de uma matriz é obtida trocando suas linhas por colunas e vice-versa. É representada por A^t
                </p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/matrizInversa.php">
                <h2>Matriz Inversa</h2>
                <p>
                    Uma matriz quadrada A tem uma matriz inversa A-¹ se o produto A x A-¹ = A-¹. For a matriz identidade. Nem todas as matrizes possuem inversa.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/determinanteMatriz.php">
                <h2>Determinante</h2>
                <p>
                    O determinante de uma matriz quadrada é um número associado a ela, usado para verificar a existência de inversa e em várias aplicações, como sistemas de equações lineares.</p>
            </a>
        </li>

    </ul>

</body>

</html>