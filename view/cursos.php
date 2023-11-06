<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/padrao.css">
    <title>Cursos disponíveis - Aprenda Fácil</title>
    <link rel="icon" href="../public/img/a.png">
    <style>
        /* Reset de estilos padrão do navegador */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo do corpo da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Estilo do cabeçalho */
        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            width: 80px;
        }

        .logo h1 {
            font-size: 40px;
            margin-left: 10px;
        }


        .logo {
            display: flex;
            align-items: center;
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
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .cursos-disponiveis {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
        }

        .curso {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
        }

        .curso img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .curso p {
            font-size: 1rem;
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
    <header>
        <div class="logo">
            <a href="../public/index.php"><img src="../public/img/a.png" alt="Logo da Plataforma"></a>
            <h1>Aprenda Fácil</h1>
        </div>
    </header>

    <section id="conteudo-cursos">
        <h1>Conteúdos Gerais</h1>

        <div class="cursos-disponiveis">
            <!-- História -->
            <div class="curso">
                <a href="../view/devweb.php"><img src="../public/img/hiss.png" alt="Conteúdo"></a>
                <center><h3>História</h3></center>
                <p>A história humana é uma narrativa complexa de eventos, culturas e transformações que moldaram o mundo. </p>
            </div>

            <!-- Geografia -->
            <div class="curso">
                <a href="../view/mark.php"><img src="../public/img/geo.jpg" alt="Conteúdo"></a>
                <center><h3>Geografia</h3></center>
                <p>O estudo da Terra, abrangendo a diversidade de paisagens, clima e fenômenos naturais. </p>
            </div>

            <!-- Curso 3: Design Gráfico -->
            <div class="curso">
                <a href="../view/design.php"><img src="../public/img/fiss.png" alt="Conteúdo"></a>
                <center><h3>Física</h3></center>
                <p>A ciência que investiga as leis fundamentais do universo, desde partículas subatômicas até a vastidão cósmica.</p>
            </div>
            <div class="curso">
                <a href="../view/devsoft.php"><img src="../public/img/mat.jpg" alt="Conteúdo"></a>
                <h3>Matemática</h3>
                <p>A Matemática é a linguagem universal que desvenda padrões, relações e estruturas abstratas.</p>
            </div>
        </div>
    </section>
</body>

</html>