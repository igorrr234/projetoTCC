<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/padrao.css">
    <title>Painel do Usuário - Aprenda Fácil</title>
    <link rel="icon" href="../public/img/a.png">
    <script src="javinha.js"></script>
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

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 100px;
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

        .user-panel {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            border-radius: 7px;
            text-align: center;
            margin: 20px auto;
            max-width: 900px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            margin-bottom: 100px;
            font-size: 17px;
        }

        .user-details {
            flex: 1;
            text-align: left;
        }

        .user-avatar img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
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
</head>

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

    <div class="user-panel">
        <div class="user-details">
            <h2>Painel do Usuário</h2>
        
        </div>
        <div class="user-avatar">
            <img src="caminho/para/avatar.jpg" alt="Avatar">
            <!-- Substitua "caminho/para/avatar.jpg" com o caminho real do avatar do usuário -->
        </div>
    </div>

    

    <section id="contato">
    <h2>Entre em Contato Conosco</h2>
        <p>Estamos aqui para responder a todas as suas perguntas. Entre em contato conosco por e-mail.
        <p>
            <a href="../view/contato.php" class="cta-button">Contate-nos</a>
    </section>

    <footer>
        <p>&copy; 2023 Sua Plataforma de Ensino</p>
    </footer>
</body>

</html>