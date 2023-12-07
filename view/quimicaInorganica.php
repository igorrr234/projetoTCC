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
    <title>Química Inorgânica - Aprenda Fácil</title>
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
        <h1><u>Química Inorgânica</u></h1>
        <li class="aula">
            <a href="../view/modeloAtomico.php">
                <h2>Modelos Atômicos</h2>
                <p>Os modelos atômicos são representações conceituais da estrutura e comportamento dos átomos ao longo do tempo. Cada modelo reflete avanços nas descobertas científicas.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/tabelaPeriodica.php">
                <h2>Os Átomos e a Tabela Periódica</h2>
                <p>A Tabela Periódica é uma ferramenta crucial para cientistas e estudantes de química, permitindo a previsão de comportamentos químicos, identificação de tendências periódicas e compreensão das relações entre diferentes elementos. </p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/ligacaoQuimica.php">
                <h2>Ligações Químicas</h2>
                <p>As ligações químicas são as forças que mantêm os átomos unidos para formar moléculas e compostos. Existem três tipos principais de ligações químicas: iônica, covalente e metálica.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/acidoBase.php">
                <h2>Ácidos e Bases</h2>
                <p>Ácidos e bases são duas categorias fundamentais de substâncias químicas que desempenham papéis essenciais em reações químicas e equilíbrios ácido-base.</p>
            </a>
        </li>
        <li class="aula">
            <a href="../view/termoquimica.php">
                <h2>Termoquímica</h2>
                <p>
                    A termoquímica é o ramo da química que estuda as trocas de energia durante reações químicas e processos físicos.</p>
            </a>
        </li>


    </ul>

</body>

</html>