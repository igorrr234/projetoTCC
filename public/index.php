<?php

session_start();

include_once('../view/pagina.php')

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/padrao.css">
    <title>Início - Aprenda Fácil</title>
    <link rel="icon" href="../public/img/a.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="../public/js/index/index.js"></script>


</head>
<style>
    * {
        font-family: 'Nunito Sans', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    body {
        background-color: #f2f2f2;
        color: #333;
    }


    #banner {
        background-color: #5e5e5e;
        text-align: center;
        color: #ffffff;
        padding: 100px;

    }

    #banner h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    #banner p {
        font-size: 1.2rem;
        margin-bottom: 30px;
    }

    .cta-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007BFF;
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
    }

    #cursos-em-destaque {
        text-align: center;
        margin: 20px 0;
    }

    #cursos-em-destaque h2 {
        font-size: 1.8rem;
        margin-bottom: 35px;
    }

    .grid {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-bottom: 10px;
    }

    .curso {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        padding: 20px;
        flex: 0 0 calc(33.333% - 20px);
        margin-bottom: 20px;
        text-align: center;
        height: 419px;
        margin-bottom: 30px;
    }

    .curso img {
        height: 200px;
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        border-radius: 2px;
    }

    .curso h3 {
        font-size: 1.5rem;
        margin: 10px 0;
    }

    .curso p {
        font-size: 1rem;
        height: 70px;
    }

    .curso a {
        display: block;
        text-align: center;
        color: #fff;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 5px;
        margin-top: 10px;
    }

    #contato {
        background-color: #007BFF;
        color: #fff;
        text-align: center;
        padding: 30px 0;
    }

    #contato h2 {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    #contato p {
        font-size: 1.2rem;
        margin-bottom: 30px;
    }

    .cta-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007BFF;
        color: black;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
    }

    .cta-button2 {
        display: inline-block;
        padding: 10px 20px;
        background-color: #fff;
        color: black;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
    }

    .cta-button:hover {
        background-color: #fff;
        color: #007BFF;
    }

    .cta-button2:hover {
        background-color: #fff;
        color: #007BFF;
    }

    .slick-prev,
    .slick-next {
        display: none !important;
    }
</style>

<body>
    <section id="banner">
        <h1>Bem-vindo à Plataforma de Ensino</h1>
        <p>Descubra disciplinas de alta qualidade para aprimorar seu conhecimento.</p>
        <a href="../view/cursos.php" class="cta-button2">Explorar</a>
    </section>

    <section id="cursos-em-destaque">
        <h2>Disciplinas Gerais</h2>
        <div class="grid">
            <div class="curso">
                <a href="../view/fisica.php"><img src="https://static.todamateria.com.br/img/categories/fisica.png" alt="Física"></a>
                <h3>
                    <h3>Física</h3>
                    <p>Desvende os mistérios do universo e dê vida às maravilhas da tecnologia com a física!</p>
                    <a href="../view/fisica.php" class="cta-button">Saiba mais</a>
            </div>
            <div class="curso">
                <a href="../view/hist.php"><img src="https://static.todamateria.com.br/img/categories/historia.png" alt="História"></a>
                <h3>História</h3>
                <p>Conheça uma riqueza de narrativas e lições do passado!</p>
                <a href="../view/hist.php" class="cta-button">Saiba mais</a>
            </div>
            <div class="curso">
                <a href="../view/geo.php"><img src="https://static.todamateria.com.br/img/categories/geografia.png" alt="Geográfia"></a>
                <h3>Geografia</h3>
                <p>Explore os infinitos cenários do mundo e entenda a complexa dança entre terras!</p>
                <a href="../view/geo.php" class="cta-button">Saiba mais</a>
            </div>
            <div class="curso">
                <a href="../view/mat.php"><img src="https://static.todamateria.com.br/img/categories/matematica.png" alt="Matemática"></a>
                <h3>Matemática</h3>
                <p>Explore os infinitos cenários do mundo e entenda a complexa dança entre os números!</p>
                <a href="../view/mat.php" class="cta-button">Saiba mais</a>
            </div>
            <div class="curso">
                <a href="../view/qui.php"><img src="https://static.todamateria.com.br/img/categories/quimica.png" alt="Química"></a>
                <h3>Química</h3>
                <p>Explore os vastos cenários do mundo e desvende a intricada coreografia entre átomos e moléculas!</p>
                <a href="../view/qui.php" class="cta-button">Saiba mais</a>
            </div>
            <div class="curso">
                <a href="../view/bio.php"><img src="https://static.todamateria.com.br/img/categories/biologia.png" alt="Biologia"></a>
                <h3>Biologia</h3>
                <p>Entre os vastos ecossistemas da vida e mergulhe no complexo teia da existência!</p>
                <a href="../view/qui.php" class="cta-button">Saiba mais</a>
            </div>
        </div>
    </section>

    <section id="contato">
        <h2>Entre em Contato Conosco</h2>
        <p>Estamos aqui para responder a todas as suas perguntas. Entre em contato conosco por e-mail.</p>
        <a href="../view/contato.php" class="cta-button2">Contate-nos</a>
    </section>

    <footer>
        <p>&copy; 2023 Sua Plataforma de Ensino</p>
    </footer>

</body>

</html>