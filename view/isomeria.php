<?php

session_start();

include_once('../view/pagina.php')

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/img/a.png">
    <title>Isomeria - Aprenda Fácil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        main a {
            text-decoration: none;
            color: #007BFF;
        }

        main a:hover {
            cursor: pointer;
            color: #6959CD;
        }

        .isomeria h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .isomeria li {
            margin-bottom: 5px;
        }

        .isomeria img {
            width: 70%;
            border-radius: 1%;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .isomeria {
            align-items: center;
            justify-content: center;
        }

        .isomeria p {
            font-size: 17.5px;
            line-height: 1.35;
            margin-bottom: 10px;
        }

        .isomeria h2 {
            font-size: 1.6rem;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .isomeria h3 {
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .video h2 {
            margin-bottom: 10px;
        }

        .isomeria h5 {
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .video iframe {
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="isomeria">
            <h1><u>Isomeria</u></h1>

            <p>A <strong>isomeria</strong> é um fenômeno observado quando diferentes compostos são formados por quantidades iguais dos mesmos tipos de átomos.</p>

            <p>Sendo assim, podemos encontrar substâncias químicas com a mesma fórmula molecular e distintas fórmulas estruturais ou arranjos espaciais.</p>

            <p>Na Química Orgânica muitos compostos orgânicos apresentam <strong>isômeros</strong>. Como cada átomo de carbono pode fazer 4 ligações químicas, é possível observar diversas combinações.</p>

            <p>A mudança no arranjo dos átomos faz surgir novas substâncias e, consequentemente, as propriedades físicas e químicas são diferentes.</p>

            <p>Quando dizemos que compostos são isômeros significa que eles apresentam partes iguais, pois a palavra é a combinação de dois termos de origem grega: isos, quer dizer “mesmo”, e meros, que é “partes”.</p>

            <p>Os tipos de isômeros são divididos em dois grandes grupos: isomeria plana e isomeria espacial (estereoisomeria).</p>

            <p>A <strong>isomeria plana</strong> pode ser visualizada pela fórmula estrutural plana dos compostos e apresenta cinco classes: de posição, de função, de cadeia, de compensação e tautomeria.</p>

            <p>A <strong>isomeria espacial</strong> é observada pela orientação dos compostos e se subdivide em geométrica (cis-trans) e óptica.</p>

            <p>O conceito de isomerismo foi introduzido em 1830 pelo cientista sueco Jacob Berzelius.</p>

            <h2>Exemplos de isômeros</h2>


            <p>A <strong>isomeria de cadeia</strong> ocorre quando o mesmo conjunto de átomos se conectam formando estruturas do mesmo grupo funcional, mas com cadeias diferentes.</p>

            <p>Exemplo: a fórmula molecular C4H10 de um hidrocarboneto pode se apresentar com uma cadeia linear ou ramificada.</p>

            <img src="https://static.todamateria.com.br/upload/is/om/isomerosdecadeia-1-cke.jpg" alt="" style="width: 45%;">
            <h5>Isômeros de cadeia</h5>


            <p>A <strong>isomeria de posição</strong> ocorre quando os compostos são formados pelos mesmos grupos funcionais, mas eles estão em diferentes posições na cadeia.</p>

            <p>Exemplo: A fórmula molecular C4H9OH corresponde a dois tipos de álcool.</p>

            <img src="https://static.todamateria.com.br/upload/is/om/isomerosdeposicao-0-cke.jpg?auto_optimize=low" alt="" style="width: 45%;">
            <h5>Isômeros de posição</h5>

            <p>A <strong>isomeria de função</strong> ocorre quando a mesma fórmula molecular corresponde a dois compostos com diferentes grupos funcionais.</p>

            <p>Exemplo: A fórmula molecular C2H6O corresponde a dois isômeros que apresentam as funções álcool (-OH) e éter (-O-).</p>

            <img src="https://static.todamateria.com.br/upload/is/om/isomerosdefuncao-0-cke.jpg?auto_optimize=low" alt="" style="width: 45%;">
            <h5>Isômeros de função</h5>


            <p>A <strong>isomeria geométrica</strong>, também chamada de isomeria cis-trans, ocorre quando a presença de uma ligação dupla ou estrutura cíclica faz com que ligantes iguais estejam do mesmo lado do plano (cis) ou em lados opostos (trans).</p>

            <p>Exemplo: os átomos de cloro nos compostos de fórmula molecular C2H2Cl2 podem apresentar duas estruturas espaciais.</p>

            <img src="https://static.todamateria.com.br/upload/is/om/isomerosgeometricoscistrans-cke.jpg?auto_optimize=low" alt="" style="width: 45%;">
            <h5>Isômeros geométricos cis-trans</h5>


            <p>A <strong>isomeria óptica</strong> ocorre quando ao desviar a luz polarizada emitida sobre a estrutura, os compostos conseguem desviar o feixe luminoso para esquerda, se for um isômero levogiro (l), ou para a direita, quando é um isômero dextrogiro (d).</p>

            <p>Exemplo: Este tipo de isomeria ocorre com o ácido lático. Observe a seguir que as imagens espectrais dos isômeros não se sobrepõem, por isso são chamados de enantiômeros.</p>
            <img src="https://static.todamateria.com.br/upload/is/om/isomerosopticos-0-cke.jpg?auto_optimize=low" alt="" style="width: 45%;">
            <h5>Enantiômeros</h5>

            <p>O símbolo C* indica a presença de um carbono quiral na estrutura, ou seja, um átomo de carbono com 4 ligantes diferentes.</p>


            <div class="video">

                <h2>Vídeo sobre a Isomeria</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/A3nWboRxzaY?si=BoaVgE_ksp1TsLVt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>





        </div>
    </main>
</body>