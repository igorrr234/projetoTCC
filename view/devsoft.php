<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/padrao.css">
    <title>Cursos de Desenvolvimento de Software - Aprenda Fácil</title>
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

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
        }

        .logo img {
            width: 80px;
        }

        .logo h1 {
            font-size: 40px;
            margin-left: 10px;
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

        .curso:hover{
            cursor: pointer;
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
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header>
        <table>
            <tr>
                <td>
                    <div class="logo">
                        <img src="../public/img/a.png" alt="Logo da Plataforma">
                    </div>
                </td>
                <td>
                    <h1>Aprenda Fácil</h1>
                </td>
            </tr>
        </table>
    </header>

    <section id="conteudo-cursos">
        <h1>Desenvolvimento de Software</h1>

        <div class="cursos-disponiveis">
            <div class="curso">
                <img src="../public/img/java.png" alt="Curso de Java Básico">
                <h3>Curso de Java Básico</h3>
                <p>Explore os aprendizados da linguagem Java para dominar o desenvolvimento de aplicativos e sistemas robustos.</p>

            </div>
            <div class="curso">
                <img src="../public/img/python.png" alt="Curso de Python Básico">
                <h3>Curso de Python Básico</h3>
                <p>Desenvolva habilidades em Python e desbrave um universo de possibilidades.</p>
            </div>

            <div class="curso">
                <img src="../public/img/c++.png" alt="Curso de C++ Básico">
                <h3>Curso de C++ Básico</h3>
                <p>Explore os princípios fundamentais do C++ para desenvolver aplicações de software de alto desempenho.</p>
            </div>

        </div>
    </section>
</body>

</html>
