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
  <title>Filosofia Antiga - Aprenda Fácil</title>
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
    <h1><u>Filosofia Antiga</u></h1>
    <li class="aula">
      <a href="../view/socrates.php">
        <h2>Sócrates</h2>
        <p>Sócrates (469-399 a.C.) foi um dos filósofos mais influentes da Grécia Antiga e uma figura central na história da filosofia ocidental. Nascido em Atenas, Sócrates não deixou nenhum registro escrito de suas ideias, mas suas contribuições foram preservadas por seus discípulos, especialmente por Platão.</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/logicaAristoteles.php">
        <h2>Lógica Aristotélica</h2>
        <p>
          A lógica aristotélica, desenvolvida por Aristóteles (384-322 a.C.), é uma parte fundamental da filosofia antiga que teve um impacto duradouro na tradição intelectual. Aristóteles dedicou-se ao estudo da razão e do raciocínio válido, buscando compreender a estrutura do pensamento coerente.</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/sofistas.php">
        <h2>Os Sofistas</h2>
        <p>Os Sofistas, filósofos itinerantes da Grécia Antiga, foram figuras marcantes cujas ideias e métodos de ensino desafiaram as tradições filosóficas e retóricas da época. Atuando principalmente durante o século V a.C., os sofistas eram conhecidos por sua habilidade retórica e pela crença na relatividade da verdade.</p>
      </a>
    </li>


</body>

</html>