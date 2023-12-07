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
  <title>Geometria - Aprenda Fácil</title>
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

    <h1><u>Geometria</u></h1>
    <li class="aula">
      <a href="../view/geoplana.php">
        <h2>Geometria Plana</h2>
        <p>
          A geometria plana é uma área da matemática que se dedica ao estudo das propriedades e relações das figuras geométricas bidimensionais, ou seja, aquelas que existem apenas em um plano. Nesse ramo, exploramos conceitos como pontos, retas, segmentos, polígonos, circunferências e suas interações.</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/geoespa.php">
        <h2>Geometria Espacial</h2>
        <p>A geometria espacial é um ramo da matemática que se dedica ao estudo das propriedades e relações das figuras tridimensionais no espaço tridimensional. Enquanto a geometria plana se concentra em objetos bidimensionais, a geometria espacial expande essa análise para incluir sólidos tridimensionais como prismas, pirâmides, cilindros, cones e esferas.</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/geoana.php">
        <h2>Geometria Analítica</h2>
        <p>
          A geometria analítica é um ramo da matemática que combina conceitos da álgebra com a geometria para estudar propriedades geométricas por meio de métodos algébricos. Esse campo permite representar figuras geométricas e analisar suas propriedades usando coordenadas numéricas.</p>
    </li>
    </a>
  </ul>

</body>

</html>