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
  <title>Mecânica - Aprenda Fácil</title>
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
    <h1><u>Mecânica</u></h1>

    <li class="aula">
      <a href="../view/cinematicaEscalar.php">
        <h2>Cinemática Escalar</h2>
        <p>A cinemática escalar é um ramo da física que se concentra no estudo do movimento sem levar em consideração as causas desse movimento, como as forças envolvidas. Ela se preocupa principalmente com a descrição matemática das grandezas relacionadas ao movimento, tais como posição, deslocamento, velocidade e aceleração, sem considerar a influência específica das forças que podem estar agindo.</p>
      </a>
    </li>

    <li class="aula">
      <a href="../view/vetor.php">
        <h2>Vetores</h2>
        <p>Vetores na física representam quantidades que têm tanto magnitude quanto direção. Ao contrário das grandezas escalares, que possuem apenas magnitude, vetores são caracterizados por uma quantidade numérica e uma orientação específica.</p>
      </a>
    </li>

    <li class="aula">
      <a href="../view/leisNewton.php">
        <h2>Leis de Newton</h2>
        <p>As Leis de Newton, formuladas por Sir Isaac Newton no século XVII, são fundamentais para o entendimento do movimento e das interações entre corpos na física clássica. Elas fornecem as bases para a mecânica clássica e são essenciais para compreender o comportamento de objetos em diferentes situações. </p>
      </a>
    </li>

    <li class="aula">
      <a href="../view/trabalhoEnergia.php">
        <h2>Trabalho e Energia</h2>
        <p>Trabalho e energia são conceitos fundamentais na física, permitindo a análise das interações entre forças e movimento, além de proporcionar uma compreensão profunda da conservação da energia em diferentes situações.</p>
      </a>
    </li>

    <li class="aula">
      <a href="../view/gravitacao.php">
        <h2>Gravitação Universal</h2>
        <p>A Gravitação Universal é uma força fundamental que governa a interação entre massas no universo. Sua compreensão é crucial para explicar fenômenos astronômicos e terrestres, desde o movimento planetário até as marés oceânicas.</p>
      </a>
    </li>

  </ul>

</body>

</html>