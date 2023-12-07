<?php

session_start();

include_once('../view/pagina.php')

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/padrao.css">
    <title>Física - Aprenda Fácil</title>
    <link rel="icon" href="../public/img/a.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
        }


        nav ul {
            list-style: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        #conteudo-cursos {
            padding: 40px;
        }

        #conteudo-cursos h1 {
            font-size: 2.3rem;
            margin-bottom: 50px;
            text-align: center;
        }

        .cursos-disponiveis {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 17px;
        }

        .curso {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .curso img {
            width: 80%;
            max-height: 150px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .curso h3 {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        .curso p {
            font-size: 1rem;
        }
    </style>
</head>

<body>


    <section id="conteudo-cursos">
        <h1><u>Física</u></h1>

        <div class="cursos-disponiveis">

            <div class="curso">
                <a href="../view/mecanica.php"><img src="../public/img/mecanica.png" alt="Conteúdo"></a>
                <center>
                    <h3>Mecânica</h3>
                </center>
                <p>A mecânica é um ramo fundamental da física que estuda o movimento e o comportamento dos corpos, assim como as forças que atuam sobre eles. A mecânica é um ramo fundamental da física que estuda o movimento e o comportamento dos corpos, assim como as forças que atuam sobre eles.
                </p>
            </div>

            <div class="curso">
                <a href="../view/termodinamica.php"><img src="../public/img/termodinamica.png" alt="Conteúdo"></a>
                <center>
                    <h3>Termodinâmica</h3>
                </center>
                <p>A termodinâmica é um ramo da física que estuda as relações entre calor, trabalho e energia. Ela fornece as ferramentas conceituais para entender e descrever os processos que envolvem transferência de energia térmica.</p>
            </div>

            <div class="curso">
                <a href="../view/optica.php"><img src="../public/img/optica.png" alt="Conteúdo"></a>
                <center>
                    <h3>Óptica</h3>
                </center>
                <p>A óptica é um ramo da física que se concentra no estudo da luz e sua interação com a matéria. Ela abrange uma ampla gama de características, desde a formação de imagens por lentes e espelhos até o comportamento ondulatório e corpuscular da luz.</p>
            </div>

            <div class="curso">
                <a href="../view/ondulatoria.php"><img src="../public/img/ondulatoria.png" alt="Conteúdo"></a>
                <center>
                    <h3>Ondulatória</h3>
                </center>
                <p>A teoria das ondas, também conhecida como ondulatória, é um ramo fundamental da física que se concentra no estudo do comportamento das ondas. Ondas são perturbações que se propagam através de um meio ou do espaço, transferindo energia sem a necessidade de transporte de matéria.</p>
            </div>
            <div class="curso">
                <a href="../view/eletromagnetismo.php"><img src="../public/img/eletromagnetismo.png" alt="Conteúdo"></a>
                <center>
                    <h3>Eletromagnetismo</h3>
                </center>
                <p>O eletromagnetismo é um ramo da física que estuda a interação entre partículas carregadas eletricamente, tanto em repouso quanto em movimento. Ele unifica duas forças fundamentais da natureza: a força elétrica e a força magnética.
                </p>
            </div>
        </div>
    </section>
</body>

</html>