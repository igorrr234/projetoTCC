<?php
session_start();

include_once('../view/pagina.php');


if (isset($_SESSION['nome'])) {

    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
}


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
            padding: 10px 0;
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

    <div class="user-panel">
        <div class="user-details">
            <h1>Meu perfil</h1>
            <p> Nome: <?php echo "$nome" ?> </p>


        </div>
        <div class="user-avatar">
        </div>
    </div>


</body>

</html>