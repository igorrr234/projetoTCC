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
    <title>Biologia - Aprenda Fácil</title>
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
        <h1><u>Biologia</u> </h1>

        <div class="cursos-disponiveis">

            <div class="curso">
                <a href="../view/citologia.php"><img src="../public/img/citologia.png" alt="Conteúdo"></a>
                <center>
                    <h3>Citologia</h3>
                </center>
                <p>A citologia é um ramo da biologia que se dedica ao estudo das células, as unidades fundamentais da vida. Essa disciplina examina a estrutura, função, reprodução e evolução das células, abrangendo desde organismos unicelulares até seres multicelulares complexos.
                </p>
            </div>

            <div class="curso">
                <a href="../view/genetica.php"><img src="../public/img/genetica.png" alt="Conteúdo"></a>
                <center>
                    <h3>Genética</h3>
                </center>
                <p>A genética é o ramo da biologia que estuda a hereditariedade, a variação e a transmissão de características de geração para geração. Essa disciplina explora os mecanismos moleculares e celulares subjacentes à expressão dos genes, bem como a forma como os genes interagem e se herdam.</p>
            </div>

            <div class="curso">
                <a href="../view/ecologia.php"><img src="../public/img/ecologia.png" alt="Conteúdo"></a>
                <center>
                    <h3>Ecologia</h3>
                </center>
                <p>A ecologia é uma disciplina científica que estuda as interações entre organismos e seu ambiente, incluindo fatores abióticos (não vivos) e bióticos (vivos). Essa área da biologia busca compreender a distribuição e abundância dos seres vivos, os processos que influenciam essas populações e as interconexões em ecossistemas.</p>
            </div>
        </div>
    </section>
</body>

</html>