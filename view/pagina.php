<head>
    <link rel="icon" href="../public/img/a.png">
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

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo img {
            width: 85px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo h1 {
            font-size: 2.5rem;
            margin-left: 10px;
            color: #fff;
        }

        .menu nav ul {
            list-style: none;
            margin-top: 20px;
        }


        .menu nav ul li {
            display: inline;
            margin-right: 2px;
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
            margin-right: 20px;
        }


        .a {
            margin-right: 80px;
            text-align: center;
        }



        .aa {
            margin-left: 200px;
            margin-top: -50px;
            padding-right: 10px;
        }

        .aa2 {
            margin-left: -19px;
            margin-top: -50px;
            margin-right: -15px;
            padding-left: 20px;
        }


        .font {
            font-size: 14px;
            padding-right: 20px;
            margin-right: -20px;
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
                <ul class="menu-list">
                    <li class="a"><a href="../public/index.php">Início</a></li>
                    <li class="a"><a href="../view/cursos.php">Disciplinas</a></li>
                    <li class="a"><a href="../view/sobre.php">Sobre</a></li>
                    <li class="a"><a href="../view/contato.php">Contato</a></li>
                    <?php if (isset($_SESSION['nome']) || (isset($_SESSION['email']))) : ?>
                        <li class="aa"><a href="../view/logout.php" class="font">Sair</a></li>
                        <li class="aa2"><a href="../view/perfilU.php" class="font">Meu perfil</a></li>
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

    <script src="../public/js/navbar/navzin.js"></script>
</body>