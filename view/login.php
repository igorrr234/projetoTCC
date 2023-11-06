<?php
session_start();

require_once('../action/classes.php');
require_once('../database/conexao.php');

$database = new Database();
$db = $database->Conexao();
$usuario = new Usuario($db);

if (isset($_POST['entrar'])) {

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if ($usuario->logar($nome, $senha)) {
        $_SESSION['nome'] = $nome;
        header("Location:../public/index.php");
        exit();
    } else {
        print "<script>alert('Seu email e senha não correspondem.Tente novamente.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/padrao.css">
    <title>Login - Aprenda Fácil</title>
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
    }

    .menu nav ul li {
        display: inline;
        margin-right: 20px;
        font-size: 23px;
    }

    .menu nav ul li a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }

    .login-form {
        background-color: #fff;
        border-radius: 7px;
        text-align: center;
        margin: 20px auto;
        max-width: 400px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin-top: 50px;
        margin-bottom: 100px;
    }

    .login-form h2 {
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    .login-form label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }

    .login-form input {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding-bottom: 12px;
        font-size: 17px;
    }

    .login-form button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        margin: 20px auto;
        cursor: pointer;
        display: block;
    }

    .login-form a {
        color: #007BFF;
    }

    #contato {
        background-color: #007BFF;
        color: #fff;
        text-align: center;
        padding: 20px 0;
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
        color: #007BFF;
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
            <a href="../public/index.php"><img src="../public/img/a.png" alt="Logo da Plataforma"></a>
            <h1>Aprenda Fácil</h1>
        </div>
        <div class="menu">
            <nav>
                <ul class="header-right">
                </ul>
            </nav>
        </div>
    </header>

    <div class="login-form">
        <h2>Faça Login</h2>
        <form action="" method="POST">
            <input type="text" name="nome" placeholder="Nome" required>

            <input type="password" id="senha" name="senha" placeholder="Senha" required>

            <button type="submit" name="entrar">Entrar</button>

            <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
            <p>ou <a href="rec.php">Esqueceu a senha?</a></p>
        </form>
    </div>

    <section id="contato">
        <h2>Entre em Contato Conosco</h2>
        <p>Estamos aqui para responder a todas as suas perguntas. Entre em contato conosco por e-mail.</p>
        <a href="../view/contato.php" class="cta-button">Contate-nos</a>
    </section>

    <footer>
        <p>&copy; 2023 Sua Plataforma de Ensino</p>
    </footer>
</body>

</html>