<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/padrao.css">
    <title>Início - Aprenda Fácil</title>
    <link rel="icon" href="../public/img/a.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #f2f2f2;
        color: #333;
    }

    header {
        background-color: #007BFF;
        color: #fff;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo img {
        width: 100px;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo h1 {
        font-size: 40px;
        margin-left: 10px;
        color: #fff;
    }

    .menu nav ul {
        list-style: none;
        margin-top: 20px;
        margin-right: 320px;
    }


    .menu nav ul li {
        display: inline;
        margin-right: 20px;
        font-size: 25px;
        transition: all 0.6s ease;
    }

    .menu-list {
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .menu-list .a {
        margin-right: 34px;
    }


    .a {
        margin-right: 80px;
        text-align: center;
    }



    .aa {
        margin-left: 200px;
        margin-top: -57px;
        padding-right: 10px;
    }

    .aa2 {
        margin-left: -19px ;
        margin-top: -57px;
        padding-right: 7px;
    }


    .font {
        font-size: 14px;
        padding-right: 10px;
    }

    .menu nav ul li a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        position: relative;
    }

    .menu nav ul li a::after {
        content: " ";
        width: 0px;
        height: 4px;
        background-color: #fff;
        position: absolute;
        top: 30px;
        left: 0;
        transition: width 0.5s;
    }

    .menu nav ul li a:hover::after {
        width: 37px;
    }

    .menu {
        display: flex;
        align-items: center;
        position: relative;
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
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .grid {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .curso {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        padding: 20px;
        flex: 0 0 calc(33.333% - 20px);
        margin-bottom: 20px;
        text-align: center;
    }

    .curso img {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        border-radius: 5px;
    }

    .curso h3 {
        font-size: 1.5rem;
        margin: 10px 0;
    }

    .curso p {
        font-size: 1rem;
    }

    .curso a {
        display: block;
        text-align: center;
        background-color: #007BFF;
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
        padding: 40px 0;
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
</style>

<body>
    <header>
        <div class="logo">
            <img src="img/a.png" alt="Logo da Plataforma">
            <h1>Aprenda Fácil</h1>
        </div>
        <div class="menu">
            <nav>
                <ul class="menu-list">
                    <li class="a"><a href="../public/index.php">Início</a></li>
                    <li class="a"><a href="../view/cursos.php">Conteúdos</a></li>
                    <li class="a"><a href="../view/sobre.php">Sobre</a></li>
                    <li class="a"><a href="../view/contato.php">Contato</a></li>
                    <?php if (isset($_SESSION['nome'])) : ?>
                        <li class="aa"><a href="../view/logout.php" class="font">Sair</a></li>
                        <li class="aa2"><a href="../view/perfilU.php" class="font">Meu Painel</a></li>
                    <?php else : ?>
                        <li class="aa">
                            <a href="../view/login.php" class="font">Login</a>
                        </li>
                        <li class="aa2">
                            <a href="../view/cadastro.php" class="font">Cadastro</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
    <section id="banner">
        <h1>Bem-vindo à Plataforma de Ensino</h1>
        <p>Descubra disciplinas de alta qualidade para aprimorar suas habilidades.</p>
        <a href="../view/cursos.php" class="cta-button">Explorar</a>
    </section>

    <section id="cursos-em-destaque">
        <h2>Disciplinas em Destaque</h2>
        <div class="grid">
            <div class="curso">
                <a href="../view/devweb.php"><img src="img/fisicaq.jpg" alt="Curso de Programação Web"></a> <h3>
                <h3>Fisica </h3>
                <p>Desvende os mistérios do universo e dê vida às maravilhas da tecnologia com a física!</p>
                <a href="../view/devweb.php" class="cta-button">Saiba mais</a>
            </div>
            <div class="curso">
                <a href="../view/mark.php"><img src="img/historia.jpg" alt="Curso de Marketing Digital"></a>
                <h3>História</h3>
                <p>Conheça uma riqueza de narrativas e lições do passado!</p>
                <a href="../view/mark.php" class="cta-button">Saiba mais</a>
            </div>
            <div class="curso">
                <a href="../view/design.php"><img src="img/geografia.jpg" alt="Curso de Design Gráfico"></a>
                <h3>Geografia</h3>
                <p>Explore os infinitos cenários do mundo e entenda a complexa dança entre terrass!</p>
                <a href="../view/design.php" class="cta-button">Saiba mais</a>
            </div>
        </div>
    </section>

    <section id="contato">
        <h2>Entre em Contato Conosco</h2>
        <p>Estamos aqui para responder a todas as suas perguntas. Entre em contato conosco por e-mail.</p>
        <a href="../view/contato.php" class="cta-button">Contate-nos</a>
    </section>

    <footer>
        <p>&copy; 2023 Sua Plataforma de Ensino</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>