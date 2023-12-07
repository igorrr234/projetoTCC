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
  <title>Filosofia Moderna - Aprenda Fácil</title>
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
    <h1><u>Filosofia Moderna</u></h1>
    <li class="aula">
      <a href="../view/racionalismo.php">
        <h2>Racionalismo</h2>
        <p>O racionalismo é uma corrente filosófica que enfatiza o papel da razão na aquisição de conhecimento e na compreensão do mundo. Surgindo como uma resposta ao ceticismo e ao empirismo, o racionalismo argumenta que a razão, por meio da reflexão e da dedução lógica, é a principal fonte de conhecimento verdadeiro e confiável.</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/empirismo.php">
        <h2>Empirismo</h2>
        <p>O empirismo é uma corrente filosófica que atribui grande importância à experiência sensorial como fonte primária de conhecimento. Em contraste com o racionalismo, o empirismo argumenta que é por meio da observação, experiência e experimentação que os seres humanos adquirem informações sobre o mundo ao seu redor.</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/kant.php">
        <h2>Immanuel Kant</h2>
        <p>Immanuel Kant (1724-1804) foi um filósofo alemão cujas ideias influenciaram profundamente a filosofia moderna. Ele é especialmente conhecido por sua tentativa de reconciliar as tradições filosóficas racionalistas e empiristas, sintetizando-as em sua obra magistral, a "Crítica da Razão Pura".</p>
      </a>
    </li>



</body>

</html>