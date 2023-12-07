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
  <title>Lista de Aulas</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .aulas-list {
      margin-top: 35px;
      list-style-type: none;
      padding: 20;
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
      margin-top: 10px;
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
    <h1><u>Funções</u></h1>
    <li class="aula">
      <a href="../view/funcaoAfim.php">
        <h2>Função Afim</h2>
        <p>A função afim descreve uma relação linear entre duas variáveis, mostrando como uma quantidade dependente varia em relação a uma variável independente. Em um contexto mais simples, ela representa uma linha reta quando graficamente representada.
        </p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/funcaoQuadratica.php">
        <h2>Função Quadrática</h2>
        <p>
          A função quadrática é um conceito matemático que descreve uma relação entre variáveis, proporcionando uma representação gráfica na forma de uma parábola. Ela é amplamente utilizada em diversas disciplinas e contextos para modelar situações em que uma quantidade dependente é influenciada por uma variável independente.</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/funcaoexpo.php">
        <h2>Função Exponencial</h2>
        <p>A função exponencial é um conceito matemático que descreve um tipo específico de crescimento ou decaimento em que a taxa de mudança é proporcional à quantidade existente. Em outras palavras, o comportamento da função é caracterizado pela rápida expansão ou redução, influenciada pela própria magnitude da variável independente.</p>
    </li>
    </a>
  </ul>

</body>

</html>