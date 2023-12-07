<?php
require_once('../action/classes.php');
require_once('../database/conexao.php');


session_start();

include_once('../view/pagina.php');


$database = new Database();
$db = $database->Conexao();
$usuario2 = new Usuario2($db);



if (isset($_POST['enviar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($usuario2->formContato($nome, $email, $assunto, $mensagem)) {
            print "<script>alert('Formulário enviado com sucesso!')</script>";
        } else {
            print "";
        }
    } else {
        print "<script>alert('Erro!.')</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/padrao.css">
    <title>Contato - Aprenda Fácil</title>
    <link rel="icon" href="../public/img/a.png">
    <script src="javinha.js"></script>
</head>

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

    #contato {
        background-color: #4f4f4f;
        color: #fff;
        text-align: center;
        padding: 40px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    #contato h2 {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    #contato p {
        font-size: 1.2rem;
        margin-bottom: 30px;
    }

    #contato-form {
        text-align: center;
        padding: 20px;
    }

    .form {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        padding: 20px;
        max-width: 400px;
        margin: 0 auto;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form h2 {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .form label {
        display: block;
        margin-bottom: 10px;
    }

    .form input[type="text"],
    .form input[type="email"],
    .form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
    }

    .form textarea {
        height: 150px;
    }

    .form input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }

    footer {
        text-align: center;
        padding: 20px;
        background-color: #007BFF;
        color: #fff;
    }

    .form button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        margin: 20px auto;
        cursor: pointer;
        display: block;
    }
</style>

<body>

    <section id="contato">
        <h2>Entre em Contato Conosco</h2>
        <p>Estamos aqui para responder a todas as suas perguntas. Utilize o formulário abaixo ou entre em contato por e-mail.</p>
    </section>

    <section id="contato-form">
        <div class="form">
            <h2>Formulário de Contato</h2>
            <form action="#" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="assunto">Assunto:</label>
                <input type="text" id="assunto" name="assunto" required>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

                <button type="submit" name="enviar">Enviar</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Sua Plataforma de Ensino</p>
    </footer>
</body>

</html>