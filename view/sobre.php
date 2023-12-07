<?php

session_start();

include_once('../view/pagina.php')

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Aprenda Fácil</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section p {
            margin-top: 5px;
        }

        h2 {
            color: #3498db;
        }

        p {
            line-height: 1.6;
        }

        .team {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .team-member {
            flex: 0 0 calc(33.33% - 20px);
            margin-bottom: 20px;
            box-sizing: border-box;
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .values {
            margin-top: 20px;
        }

        .values ul {
            list-style: none;
            padding: 0;
        }

        .values li {
            margin-bottom: 10px;
        }

        .values h3 {
            margin-bottom: 10px;
        }

        .curiosities {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .curiosity {
            flex: 0 0 calc(33.33% - 20px);
            margin-bottom: 20px;
            box-sizing: border-box;
            padding: 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            text-align: center;
        }

        .sobre {
            justify-content: center;
        }
    </style>
</head>

<body>


    <section>
        <h2>Nossa História</h2>
        <p>Há aproximadamente quatro meses, dois jovens uniram forças com a nobre missão de conceber um website dedicado à aprendizagem. Desde então, enfrentamos desafios, celebramos conquistas e experimentamos um notável crescimento conjunto. Assim, orgulhosamente apresentamos o Aprenda Fácil, uma plataforma de ensino online que se destaca pela sua facilidade e praticidade.</p>
    </section>

    <section>
        <h2>Nossa Missão</h2>
        <p>Na Aprenda Fácil, buscamos incessantemente elevar o nível de ensino, visando alcançar um público diversificado por meio da internet. Acreditamos que a dedicação e a busca constante, o desejo de aprender, são os elementos que nos motivam a criar e inovar continuamente.</p>
    </section>

    <section>
        <h2>Quem Somos</h2>
        <div class="team">
            <div class="team-member">
                <h3>Andreo Figueiredo
                    <br>
                    Igor Aparecido
                </h3>
            </div>
        </div>
        <div class="values">
            <h3>Valores</h3>
            <ul>
                <li><strong>Inovação:</strong> Estamos sempre buscando maneiras criativas de superar expectativas.</li>
                <li><strong>Integridade:</strong> Comprometemo-nos a agir com ética e transparência em todos os aspectos.</li>
                <li><strong>Comunidade:</strong> Valorizamos a colaboração e contribuímos para o acesso das comunidades que servimos.</li>
            </ul>
        </div>
    </section>

    <section>
        <h2>Curiosidades</h2>
        <div class="curiosities">
            <div class="curiosity">
                <h3>Há quanto tempo estamos ativos?</h3>
                <p>Atualmente 1 dia</p>
            </div>
            <div class="curiosity">
                <h3>Qual é o objetivo principal das aulas?</h3>
                <p>Atender às necessidades educacionais dos estudantes do Ensino Médio.</p>
            </div>
            <div class="curiosity">
                <h3>Prêmios Recebidos</h3>
                <p>Aprovação TCC</p>
            </div>
        </div>
    </section>

</body>

</html>