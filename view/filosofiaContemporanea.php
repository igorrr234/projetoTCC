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
  <title>Filosofia Contemporânea - Aprenda Fácil</title>
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
    <h1><u>Filosofia Contemporânea</u></h1>
    <li class="aula">
      <a href="../view/marxismo.php">
        <h2>Marxismo</h2>
        <p>O marxismo é uma corrente filosófica, econômica e política que se originou das ideias de Karl Marx (1818-1883) e Friedrich Engels (1820-1895). Essa abordagem, muitas vezes chamada de materialismo histórico e dialético, oferece uma análise crítica da sociedade e busca compreender as dinâmicas econômicas, políticas e sociais que moldam a vida humana.</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/niilismo.php">
        <h2>Niilismo</h2>
        <p>O niilismo é uma corrente filosófica que questiona ou nega o valor intrínseco das crenças, princípios e valores fundamentais. O termo "niilismo" deriva do latim "nihil", que significa "nada".</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/existencialismo.php">
        <h2>Existencialismo</h2>
        <p>O existencialismo é uma corrente filosófica que destaca a importância da existência individual, da liberdade e da responsabilidade pessoal. Emergindo principalmente no século XX, o existencialismo se desenvolveu como uma resposta às questões fundamentais sobre o sentido da vida, a liberdade individual e a natureza da existência humana. </p>
      </a>
    </li>



</body>

</html>