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
  <title>Química Orgânica - Aprenda Fácil</title>
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
    <h1><u>Química Orgânica</u></h1>
    <li class="aula">
      <a href="../view/isomeria.php">
        <h2>Isomeria</h2>
        <p>Compostos orgânicos com a mesma fórmula molecular, mas diferentes arranjos atômicos. Isso inclui isomeria estrutural, geométrica e óptica.</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/caracteristicaCarbono.php">
        <h2>Carbono e Tetravalência</h2>
        <p>O carbono é um elemento crucial na química orgânica, exibindo características distintivas que permitem a diversidade de compostos orgânicos. </p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/nomenclaturaComposto.php">
        <h2>Nomenclatura de Compostos Orgânicos</h2>
        <p>Sistema de regras para nomear compostos orgânicos, incluindo alcanos, alcenos, alcinos, álcoois, éteres, entre outros.</p>
      </a>
    </li>
    <li class="aula">
      <a href="../view/gruposFuncionais.php">
        <h2>Grupos Funcionais</h2>
        <p>Identificação e compreensão dos grupos de átomos responsáveis pelas propriedades químicas de um composto. Exemplos incluem hidroxila (-OH), carbonila (-C=O), amino (-NH₂), entre outros.</p>
      </a>
    </li>



  </ul>

</body>

</html>