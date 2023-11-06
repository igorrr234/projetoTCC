<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/padrao.css">
    <title>HTML Básico - Aprenda Fácil</title>
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
        .cursos-disponiveis img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <header>
        <table>
            <tr>
                <td>
                    <div class="logo">
                        <img src="../public/img/a.png" alt="Logo de HTML">
                    </div>
                </td>
                <td>
                    <h1>Aprenda Fácil</h1>
                </td>
            </tr>
        </table>
    </header>

    <section id="conteudo-cursos">
        <h1>HTML BÁSICO</h1>
    </section>
</body>
</html>
