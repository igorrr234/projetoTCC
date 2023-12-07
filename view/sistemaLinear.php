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
    <title>Sistema de Equações - Aprenda Fácil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 1000px;
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

        .sistema h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .sistema img {
            width: 70%;
            border-radius: 1%;
            margin-bottom: 15px;
        }

        .sistema {
            align-items: center;
            justify-content: center;
        }

        .sistema p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .sistema h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .sistema h3 {
            margin-bottom: 10px;
        }


        .exercicio1 button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 40px;
            border: none;
            margin-top: 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
        }

        .answer p {
            color: #007BFF;
        }

        .bbs {
            margin-bottom: 30px;
        }

        .exercicio1 h1 {
            left: 0;
            margin-bottom: 20px;
        }

        .exercicio1 img {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .video h2 {
            margin-bottom: 10px;
        }

        .sistema h5 {
            margin-bottom: 10px;
        }

        .exercicio1 p {
            margin-top: 5px;
            line-height: 1.5;
        }

        .video iframe {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="sistema">
            <h1><u>Sistemas de Equações</u></h1>
            <h2>O que é um Sistema de Equações?</h2>

            <p>Um <strong>sistema de equações</strong> é constituído por um conjunto de equações que apresentam mais de uma incógnita. Para resolver um sistema é necessário encontrar os valores que satisfaçam simultaneamente todas as equações.</p>

            <p>Um sistema é chamado do 1º grau, quando o maior expoente das incógnitas, que integram as equações, é igual a 1 e não existe multiplicação entre essas incógnitas.</p>

            <h2>Como resolver um sistema de equações do 1º grau?</h2>


            <p>Podemos resolver um sistema de equações do 1º grau, com duas incógnitas, usando o método da <strong>substituição</strong> ou o da <strong>soma</strong>.</p>

            <h3>Método da substituição</h3>

            <p>Esse método consiste em escolher uma das equações e isolarmos uma das incógnitas, para determinar o seu valor em relação a outra incógnita. Depois, substituímos esse valor na outra equação.</p>

            <p>Desta forma, a segunda equação ficará com uma única incógnita e, assim, poderemos encontrar o seu valor final. Para finalizar, substituímos na primeira equação o valor encontrado e, assim, encontramos também o valor da outra incógnita.</p>

            <h4>Exemplo</h4>

            <p>Resolva o seguinte sistema de equações:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHUAAAAtCAYAAACQ2SQmAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAc1CXO0QAAA2ZJREFUeNrtXFGEFVEYPjKysiIr+9BDrCTJ6jXJWtaVda21JEmyYu1DD/c96SGRHq6VxMpaSSJrrZUrkmutJJKsHhJJj/vSwz7kWkv9x/0u0+mc2Tkzc46Zc/+Pj3vPzJ1z5/9mzv+fM9+9Quhxk/hFMIJBi/iaeJpDEQbmie85DGFhk1jnMISFDjHiMISFPxwC5zhJvE38bNh+nrhC3CHuYr+rLGq58Yw4lxDrDeIV4iDey4L1HdoqIWo/X0Q2536cuOWjoxvE+5r2u9hWZH9LxMua9gbxXp+kuo6vjj4Rh2PvZ4mPHPR3nfhAaTtE/EYcMhx3P1ZJ1HMYgr2IepHYxOsJ4ltH/U0SXyptd1BwhD78DhA/oIDyluPeEMdQpQ2lOH6WO0geN75seZT4HSccsqhHiGvEmu/CpYHSe9Rxf79jr5vot+iLp0yijkDQE76Td29O1cxYctv0t4kTHcFdeiDg6vcU8QnqBq/JWwZ3HR3LOdXHFMNvnv6eEqeIz4nXAp7SDKN+iHwNCfGc1lJErGNi7UrUBqY2WyIMmM79Fe5Ur8n7IHGVeEyz7QUqYheYxvebCkDMpPxeeB1Q5hUeKSY/FgxM1BYm4YxARD2DXMOwhCx+fnIYwkGEImeCQxEOlomXOAxhQa7OyJWhGoeCcyqDq18Gi8pgURksKouqYFx0l+3kg2tpiJJeoQVh/+itn2Dj5z1MfCy6NhbJRbQ5FbVNnBHdJzY9nBXdH1Yx9LDx80qvV/xpVF3Y+78KG353WDsr6Py8chHooWbfBZHR0J1HVOmE+KppL8IfnBZV9Aerfl7TItA4tnkRVdovZpFXJw375PUHp0XV/ME6P+8vJa31INu2XYuqnnySuy+vPzgtquQPNvl59xI+s+vrTpXe1Gl8wbGE/dgf/G/MTH7ePYuh2nlOHYSwJuTxB9ug7P7g/fy824bhd8DH8GtzJeX1B9ugzP7gNH7eFaE379V8Fko9jKIg0V2Zef3BNiirPzitn3cGwqtYdj2l2cB8KsKdIMvtH6g+hZLTivAH26Cs/mAbP28b5xFhKL6FmGcePtM4wy/gS3bAtvj/D0DYH5w+f+sKqSXEVtYIi7GVqEz5qOr/zsL+YAVzIsePW0sC9gcbgrIuCv49hyewPzgB84L/m7Cy+As1dCQipdh0fwAAAVB0RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bWZlbmNlZCBjbG9zZT0iIiBvcGVuPSJ7Ij48bXRhYmxlIGNvbHVtbmFsaWduPSJsZWZ0IiBjb2x1bW5zcGFjaW5nPSIxLjRleCI+PG10cj48bXRkPjxtaT54PC9taT48bW8+KzwvbW8+PG1pPnk8L21pPjxtbz49PC9tbz48L210ZD48bXRkPjxtbj4xMjwvbW4+PC9tdGQ+PC9tdHI+PG10cj48bXRkPjxtbj4zPC9tbj48bWk+eDwvbWk+PG1vPi08L21vPjxtaT55PC9taT48bW8+PTwvbW8+PC9tdGQ+PG10ZD48bW4+MjA8L21uPjwvbXRkPjwvbXRyPjwvbXRhYmxlPjwvbWZlbmNlZD48L21hdGg+u/oHoQAAAABJRU5ErkJggg==" alt="" style="width:10%">


            <h4>Resolução</h4>


            <p>Vamos começar escolhendo a primeira equação do sistema, que é a equação mais simples, para isolar o x. Assim temos:</p>

            <img src="https://static.todamateria.com.br/upload/si/st/sistemasubstituicao1.jpg?auto_optimize=low" alt="" style="width:39%">


            <p>Após substituir o valor de x, na segunda equação, podemos resolvê-la, da seguinte maneira:</p>


            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAACFCAYAAAC5QwHXAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAABDL/GCtAAABmlJREFUeNrtnVGEHVcYgEetFRUlKqL6EFZEVK0lqmJFlYqqWBGqIqoqrFqr9r2qTyX6UNGHsqKqoi8VVVWrVMRaFaUqoqpK9akPeenDqlgrbM+x/+rsdWbmzNw55/xn5vv42Ts7e+8/5/5z5sw99ztbFOFYMXG9yJfrcgygiHkT9wZwHD/KsUBHXjaxYeKRiR0Tf5i4YeLpKd6QBcf20ybeN3G/4u8WTdw2sW1iV/a7mrBdzprYGlEdtGn/p0x8auIniXXZdoi7Ji6bmC1ts4XxfYfkFqSwXNwysWxir+L3myaumDgqj5+T57qSsLG3pMDGQJv2v2NiqfT4omzzYrtDch+ZWG3YZ6/F85008SBhY7+b+VhxWlzt/7qJTxz73vDpBOZM/N4hEdvLne+xsAq5PPfNZybecGxfM/Fh6fG5Nmdi4FxSMdn+9nJ5oWJIdbvqSU6YeFvGWa91SGJ74pI6bWGdq7m0TsNb0ruWeVKOuzy2nO3Yc4fIpa49m6Irrvb/p+I9ttseNiW31jGRx54N4cMRGRguBngz7Unz1cS2D+TmYpLdwIXVJpeYVLV/3Xtc2VbHTFySJ3wpYWHZPL6p6HL7OFttT/Br6fFxE39KY3YtrBi5xKKu/R9PM2w5KsWV4lI4Jwd1KnDjPSr9/HFFLx3jUuibS6xLYVP7P6x4j4+4LoV9DZp/8Lh01R3oGRM3ZYwR46OEOQnbQzxRMca4oySXGPi0vx2gv+rYfqFu8H7AvAweY37ccELGGjORGvEL+SzmSxNvVuyz6hhYp8olNL7tf1mKb5LPJz9u2JTPJmbkTLG3jX/J3UpVt1vFgsddXNXffydnTCzW5Fb/QUNPclZJLqFp0/53JecZuSy+J3V0iPPypDsS9o8uNlzP67hXuOfYmq79IW6X67gkz71U8fuYUzpNucSgTfsfkxNhR8aH68X/n9gHI5dJ6KWGPGNOQi8Vw5i4D847hf6pkA0ZnFeNFZeV5AIZ8bxc/skFAAAAAAAAAAAAAPqnrVf4QrH/9Ypt2f/botu3TfvMaSj07valpI1XuCyFdLp0cPbAtxLmNCSiuX0pmfxKrj3In5XlNAZ6d/tS4vIK1xMn7coplpOX2v3rxe1LSZ1XaN/UZ5TlNK2T50vb1+lTcJja7UuJj1e4I2Orr2VQvSuXxqsJc4rl5KVy/3p1+1JS5xXaN/cXaeSD78cvylm74lkcXc7cupzaOnk5uX/B3L6UuLxCO3B+1rGvvVv7O1FORTGdk9eGNq8z7QkV3O1LyWTlbxTVvttuopyKIp6TF+t1grt9KXF5hSsVd0Znim7WdB85WWI5eTFep3e3LyW+XuGs7HutdOAvymcsryTK6eCWP4aTF+N1enf7UtLGKzwuZ8q/MoDcLJrXwwqdUywnL8brqHf7xkQsJw/3b2TEcvJw/0ZELCcP9w8AAAAAAAAAAAAA0mInjPcSvr5GP0+jv5kVdob9t8SFpdHP0+hvZoU9468lLiwXWv08jf6mOhZLZ7ursPDzDqPR31THrPQIJ2sKCz9vH43+plrsuu6rE0Uxydj9PI3+ZhS69hDzjt7Ate8Q/LzQrmQXf3Ow2AY65VFYRYGfN3kHrc3fzKqnK4OfV98zavA31RebC/y8w0MIbf5mtoU1Vj9Po785qMIaq5+n0d8cFPh5EAT8POgd/DwAAAAAAAAAAAAAGB+pncAD7Ndz7VeW7zfsh3+XARqcwANuFft+XV0u+HeZoNEJrMoF/y4TtDqBezUnAf6dcjQ7gVX74d9lgGYnsKqwBunfDQnNTmBdYeHfKUerE9iUC/6dcjQ6gT6FhX+XabG5iPW/AX1ywb8bUGHF+t+APrng3w2osGL9b8DCc0yGfzcQcAIhCDiB0Ds4gQAAAAAAAAAAAAAAOYA/CEHAH4Sg4A9C1MLCH4QghYU/CEEKC38QghQW/iAEKSz8QQhSWPiDEKSw8AchSGHhD0LngsrFH9SyjCYMCE3LaMKA0LiMpmpSLQGZE03LaIKDVEtAph7H+ebss4wmOEi1BGQu+CyjCQ5iLgG5Fzj6xncZTaggxRKQOVwK2yyjCQ5SLAGZA7mdQOpIsQRkzsUGnqRYApLCGgExl4CksEaE1iUgmZvLHI1LQDI3lzlal4Bkbg56h7k56B3m5iAIzM1B7zA3B0Fgbg6CwNwcRC02AAoLKCwIwH8Ec3+HZ3LSdAAAAm50RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bW4+MzwvbW4+PG1vPi48L21vPjxtbz4mI3hBMDs8L21vPjxtbz4oPC9tbz48bW4+MTI8L21uPjxtbz4tPC9tbz48bWk+eTwvbWk+PG1vPik8L21vPjxtbz4mI3hBMDs8L21vPjxtbz4tPC9tbz48bWk+eTwvbWk+PG1vPiYjeEEwOzwvbW8+PG1vPj08L21vPjxtbz4mI3hBMDs8L21vPjxtbj4yMDwvbW4+PG1zcGFjZSBsaW5lYnJlYWs9Im5ld2xpbmUiLz48bW4+MzY8L21uPjxtbz4tPC9tbz48bW4+MzwvbW4+PG1pPnk8L21pPjxtbz4tPC9tbz48bWk+eTwvbWk+PG1vPj08L21vPjxtbj4yMDwvbW4+PG1zcGFjZSBsaW5lYnJlYWs9Im5ld2xpbmUiLz48bW8+LTwvbW8+PG1uPjQ8L21uPjxtaT55PC9taT48bW8+PTwvbW8+PG1uPjIwPC9tbj48bW8+LTwvbW8+PG1uPjM2PC9tbj48bXNwYWNlIGxpbmVicmVhaz0ibmV3bGluZSIvPjxtbj40PC9tbj48bWk+eTwvbWk+PG1vPj08L21vPjxtbj4xNjwvbW4+PG1zcGFjZSBsaW5lYnJlYWs9Im5ld2xpbmUiLz48bWk+eTwvbWk+PG1vPj08L21vPjxtZnJhYz48bW4+MTY8L21uPjxtbj40PC9tbj48L21mcmFjPjxtbz49PC9tbz48bW4+NDwvbW4+PC9tYXRoPnrLwRQAAAAASUVORK5CYII=" alt="" style="width:13%">

            <p>Agora que encontramos o valor do y, podemos substituir esse valor da primeira equação, para encontrar o valor do x:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAAA8CAYAAAAuaUeTAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAdoyL+RwAAApVJREFUeNrtmzFLA0EQhZcgImIjIiIWAQkiKdJYiYgERCxSiGARrEQQCxH/gJUIFmIhNiJWIoKEICIiiIiFRUBELOysLOzFIqSJM2SKEO6SvbvduT2cDx4k2ctl83Zn97wXlXKDAqhu+TPGQNugN5/2KVAJ9AOq0XHLyjH6QB8MZp2B1tp8zhOoSP1BsqBnes0KYb7wMWiVwawwfUyD3r0asMN7Hq/vUJsNs3DqP0QwmmNAq34Nr6ChpucroCNLHemmUUtrvreuIdN9nKRS9GQedECPZ5tG3YZZOIs3IpawzZnVA6rQ7PflHjRDu8GApdHOeYyYS2b1g65Ac50O3KKtM2dx1HDEMgHfy1WGo2RURmfBLVEpFi2aZeJL25hZ46ATUK/ScPSaDsRrjReNMlQGSynuMsSN7RLU1ekEg6DbFnMKdCH3X8y6oZnVcQsvg0Y82i5oh3Tx+ifM+duVe1zLgiAIgiAIgiAIgiBo43KWx5FlBsK5LI/gyjJDYSTLM0jHLNNEbshhFlK12BftLDNobuhclheRQFlm1NzQ9szSyvIiEDjLDJIbcpqlm+WxZplBckPnsrwIBM4yo+aGNmaWdpZnoA/ag24iNzRtlnaWx9kvU7mhabO0sjzOfsWZG7qe5UlmKAiCIAiCIAiCIDgD3go6BP2qRgBx5/PHvACcgnZV414V3vnA+98VscWb1jgrpRq3sxMBd26I5dfXYtZXkkabMzfE9Wqz6TnmgftJMoszN8xR2aHwNw3foOmkrSUcuSEmvuegYVrckQnQpwr3r3uxwZEbln3Onwc9JsUortywGrLNGThzQ/ztk1e6nKW1y2m4c8NFMixPlwwpeoxr1rrLRsWVGy7RpUqNSg93xAWXjfoD2h0grXwKhN0AAAD9dEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1pPng8L21pPjxtbz4rPC9tbz48bW4+NDwvbW4+PG1vPj08L21vPjxtbj4xMjwvbW4+PG1zcGFjZSBsaW5lYnJlYWs9Im5ld2xpbmUiLz48bWk+eDwvbWk+PG1vPj08L21vPjxtbj4xMjwvbW4+PG1vPi08L21vPjxtbj40PC9tbj48bXNwYWNlIGxpbmVicmVhaz0ibmV3bGluZSIvPjxtaT54PC9taT48bW8+PTwvbW8+PG1uPjg8L21uPjwvbWF0aD7yFADNAAAAAElFTkSuQmCC" alt="" style="width:7%">

            <p>Assim, a solução para o sistema dado é o par ordenado (<strong>8, 4</strong>). Repare que esse resultado tornam ambas as equações verdadeiras, pois 8 + 4 = 12 e 3.8 - 4 = 20.</p>


            <h3>Método da Adição</h3>

            <p>No método da adição buscamos juntar as duas equações em uma única equação, eliminando uma das incógnitas.</p>

            <p>Para isso, é necessário que os coeficientes de uma das incógnitas sejam opostos, isto é, devem ter o mesmo valor e sinais contrários.</p>


            <h4>Exemplo

            </h4>

            <p> Para exemplificar o método da adição, vamos resolver o mesmo sistema anterior:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHUAAAAtCAYAAACQ2SQmAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAc1CXO0QAAA2ZJREFUeNrtXFGEFVEYPjKysiIr+9BDrCTJ6jXJWtaVda21JEmyYu1DD/c96SGRHq6VxMpaSSJrrZUrkmutJJKsHhJJj/vSwz7kWkv9x/0u0+mc2Tkzc46Zc/+Pj3vPzJ1z5/9mzv+fM9+9Quhxk/hFMIJBi/iaeJpDEQbmie85DGFhk1jnMISFDjHiMISFPxwC5zhJvE38bNh+nrhC3CHuYr+rLGq58Yw4lxDrDeIV4iDey4L1HdoqIWo/X0Q2536cuOWjoxvE+5r2u9hWZH9LxMua9gbxXp+kuo6vjj4Rh2PvZ4mPHPR3nfhAaTtE/EYcMhx3P1ZJ1HMYgr2IepHYxOsJ4ltH/U0SXyptd1BwhD78DhA/oIDyluPeEMdQpQ2lOH6WO0geN75seZT4HSccsqhHiGvEmu/CpYHSe9Rxf79jr5vot+iLp0yijkDQE76Td29O1cxYctv0t4kTHcFdeiDg6vcU8QnqBq/JWwZ3HR3LOdXHFMNvnv6eEqeIz4nXAp7SDKN+iHwNCfGc1lJErGNi7UrUBqY2WyIMmM79Fe5Ur8n7IHGVeEyz7QUqYheYxvebCkDMpPxeeB1Q5hUeKSY/FgxM1BYm4YxARD2DXMOwhCx+fnIYwkGEImeCQxEOlomXOAxhQa7OyJWhGoeCcyqDq18Gi8pgURksKouqYFx0l+3kg2tpiJJeoQVh/+itn2Dj5z1MfCy6NhbJRbQ5FbVNnBHdJzY9nBXdH1Yx9LDx80qvV/xpVF3Y+78KG353WDsr6Py8chHooWbfBZHR0J1HVOmE+KppL8IfnBZV9Aerfl7TItA4tnkRVdovZpFXJw375PUHp0XV/ME6P+8vJa31INu2XYuqnnySuy+vPzgtquQPNvl59xI+s+vrTpXe1Gl8wbGE/dgf/G/MTH7ePYuh2nlOHYSwJuTxB9ug7P7g/fy824bhd8DH8GtzJeX1B9ugzP7gNH7eFaE379V8Fko9jKIg0V2Zef3BNiirPzitn3cGwqtYdj2l2cB8KsKdIMvtH6g+hZLTivAH26Cs/mAbP28b5xFhKL6FmGcePtM4wy/gS3bAtvj/D0DYH5w+f+sKqSXEVtYIi7GVqEz5qOr/zsL+YAVzIsePW0sC9gcbgrIuCv49hyewPzgB84L/m7Cy+As1dCQipdh0fwAAAVB0RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bWZlbmNlZCBjbG9zZT0iIiBvcGVuPSJ7Ij48bXRhYmxlIGNvbHVtbmFsaWduPSJsZWZ0IiBjb2x1bW5zcGFjaW5nPSIxLjRleCI+PG10cj48bXRkPjxtaT54PC9taT48bW8+KzwvbW8+PG1pPnk8L21pPjxtbz49PC9tbz48L210ZD48bXRkPjxtbj4xMjwvbW4+PC9tdGQ+PC9tdHI+PG10cj48bXRkPjxtbj4zPC9tbj48bWk+eDwvbWk+PG1vPi08L21vPjxtaT55PC9taT48bW8+PTwvbW8+PC9tdGQ+PG10ZD48bW4+MjA8L21uPjwvbXRkPjwvbXRyPjwvbXRhYmxlPjwvbWZlbmNlZD48L21hdGg+u/oHoQAAAABJRU5ErkJggg==" alt="" style="width:11%">

            <p> Note que nesse sistema a incógnita y possui coeficientes opostos, ou seja, 1 e - 1. Então, iremos começar a calcular somando as duas equações, conforme indicamos abaixo:</p>


            <img src="https://static.todamateria.com.br/upload/si/st/sistemasadicao1.jpg?auto_optimize=low" alt="" style="width:18%">

            <p>Ao anular o y, a equação ficou apenas com o x, portanto agora, podemos resolver a equação:</p>


            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFMAAAAjCAYAAADokDbBAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAXQ/cXWQAAAitJREFUeNrtmcErg3EYx9+kJe2iJclByUEOSzlpSStJcljKQQ6Si4O0/0HKQZJcJCdJSZIkJclhh5UkB0nJwcF9SWsXvk/7bl6/ve/2bu+G1fOpT7E9q/na7/f8nt8s638QhWfwA6bhE1yHIaMuAg9hCmbgHZy2lB9cwQkYsD3WB8+Nums4BYP8vRcm+JhSgpSHmk54r1EVpws+eqxNa1zOtMFZ7ptjHuoHuNQVG5+GcQ+vaYJJNibFgRYYY0hDJeqO4YhGVpogA3XbTyXIbo3JO06NpQduw2aNxzthNiGzOR3ARo3HHTmMTzKkBk5EL3DGqDvlJ1MpwiCDSlOZiMY9dHy7v4FsLRvwne9TJrQO/fdVxg5c5gqS0XelSJNUymyIsiVlnArnmLTJEp9Tsss7aIT56lZ8y46ZQ8a6zTKmlr/ay/xMWuW8Z9kvF41RdtWteBSu8edheKkfxoLjWobKCeSNzdOVC45xcvEa+uNPiB+rjVz17cF26/vetR8+M2RH4kw+XOMlU2/L/MglkyiPcgXkvhaQpa6316VHW9fn5PLghAdT6Vg3NV7m9caDy8VKL/fOPK1W9gste3gygexqhnkmGGiUR6Lc2Ct75nyuKMD9wGks2meHV7JM8viY4dKWjh6rxz9k/J82tLojyCWmYVaBLY60GqZPIrZJTMP0gTTHe04fGqZP5BZrwZhelAovFRIOo6BSAUmHiUPDrNGFhFKFgBUNU8Msiy+ULLMjiMyTQQAAAIt0RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bWk+eDwvbWk+PG1vPj08L21vPjxtZnJhYz48bW4+MzI8L21uPjxtbj40PC9tbj48L21mcmFjPjxtbz49PC9tbz48bW4+ODwvbW4+PC9tYXRoPl5Cy6gAAAAASUVORK5CYII=" alt="" style="width:7%">

            <p>Para encontrar o valor do y, basta substituir esse valor em uma das duas equações. Vamos substituir na mais simples:</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAN4AAAAPCAYAAACLBXE9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAMyZLetQAAAn1JREFUeNrtmU9EBGEYxsfKWkkkSTrESrLSpVPSoUuHJCuSJB0iHZIOe0s6RZIO3ZIOSZckHZIuSZLsJVnZQ3RIh+5JRpft+fSktebfzr+d+WYeHubPmv2+37zvu+/3raL8qx7egT9hFb6E25XwqwtehR917g/AJ/AH/M3PTSvyKWgcZI03LY3CJb2b+/A6XAcn4Q04L8GkD+F5g4nfwFNwA88z8B2vyaSgcZA13ioleBaNEk+tOE+w8llVKeAAqhlfB1yQtPoGhYPTeAuLduE5I+6fZdXuD8SbBy9UVLpJjevLrIBBCDitwLCqHNwYczCV03gLA3PRvl+ZcRf99lLZeT+85cELnYU3Nfr9Z7hZ57lmdjvg+tlm2dEK/EroUeZgJqfxFnTmSXYLHWbce/lT/81+/x0e9CDxRuDjimtrXPgHocVKca0xYPIsK15nJZeVgxNVG29hYy7WrItm3EVWHsFtzFShPviFgBQXq4GoLE9l5y38nlQAAq4JPoOHXdo8KJGrrBzsxoCdeAsT816NTkGTxanOhIfgaw9amK+y42322G6/3GrHl2awdVp8lhVvGFRfGTjYlZ14CxPzvAa/UrULaNWDxLvlC06z4iR82F0yGl83vMd+36msrjdk52B3w0aVgLnlZC3qVLgMe2+3E+8AHmNLMKP4I73xtbLvr3Ppe3IVu3VR5WAkN+ItTMx1uY8TxhArQILHoiIseJB4y+zHC7WeOHTOSl8LRZWDG/EWJuaG+TEBP3CXSeVOU9ajQWQ5kDGfJmzUlztdM8Uc7MnPeKsVc7s/TJ5JTPpeiRVziJn7qgvl9w/TqCvmEDP3TT1cT0RdMYcIM/8BJ+lnQVb5qVgAAADldEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1uPjg8L21uPjxtbz4rPC9tbz48bWk+eTwvbWk+PG1vPj08L21vPjxtbj4xMjwvbW4+PG1vPiYjeDIxRDI7PC9tbz48bWk+eTwvbWk+PG1vPj08L21vPjxtbj4xMjwvbW4+PG1vPi08L21vPjxtbj44PC9tbj48bW8+JiN4MjFEMjs8L21vPjxtaT55PC9taT48bW8+PTwvbW8+PG1uPjQ8L21uPjwvbWF0aD4q3LfdAAAAAElFTkSuQmCC" alt="" style="width:19%">

            <p>Note que o resultado é o mesmo que já havíamos encontrado, usando o método da substituição.</p>

            <p>Quando as equações de um sistema não apresentam incógnitas com coeficientes opostos, podemos multiplicar todos os termos por um determinado valor, a fim de tornar possível utilizar esse método.</p>



            <p>Por exemplo, no sistema abaixo, os coeficientes de x e de y não são opostos:</p>


            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAAtCAYAAAByBT9fAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAc1CXO0QAABB9JREFUeNrtXG9klVEYP+aayUQmkz6MK5nMRJLMZMzMzMyYJEnGzOzD1dekD4n0YSaJyUySmJkkVySTScZkJkkkfejDvvRhcl3XWM9jv+nd6Zz33+45e8+958ePe8977n3PeZ5zzvO85/zuFUKNKeJn4eE0isQ3xDPeFO5igvjRm8F9rBAHvRncR5mY82ZwHzsx6/Uglpbg/G/EGWJLndipi7hI3CJWiOvEqzE+N5jAxlYcuUwcITYGys4iSaoHvCdeITbjPSeGH1CmA9f9kjVH6rCV0XbZQBtxI+T6LHHMBUfmiV8V5dz4+4ryu7hWzXbNES8rygvEe5ZyDN1S/M7moExzk1biDcTJAU2dT6i3B67/yEC7rhMfSGVH0LYWzfdGMS4uYnmV0YiZ2pZVR8odLoTU7SdO43VvYHRWu108kBaksjvE24bt1kRcxcyTwavRlO0wkeYmx4jD6MilkHpvcX09Rnabdqbw9wa3Fo8Tv8PQpsD9f0nsU1zrVMzSzMfIZjhThwJS9U7D7SoFXk9HrBQHXVrzcOIpzfVVxTUnstZyxHPXdESKXo12rcDAeczGBkO2aic+QQxOO1Ay6chOJBWqUfsKHeZZu5Zi4yBJu54Sh4jPidcM2akVsTh3CJOlqjfhB+JRdKQBOz0/kDUKKUYVJcfx7sYzg50v4DFkw6CdXmNGCtcd2Y3OlMFl8f9mO6fdS8STis+/QCZrAsPox5BhO6VdLp2IkVkAO7Duj+JqwZFFPJx7RzqMDiz5dQ1OTH4KD6eRQwLS603hNubxOOHhOPhZkHde+rwpfIz08Fmrh3ekh3ekd6RHzTjyUM7YYiCt3tQ0zovdYy9uFx8y8LGerKY4Snwsdg+jmbMoM+7ILCKN3tQ0xuG40wGH8eBakeqxjil4YjMokmubMu/Ig9wvSm9qEjyQ1mLU482Yh4rymbSD0IQjbepadZAlKLb0r7MxHaHbjOnBtczMSFu6VhVUelNb+lcWbJ+I0cbfYv/PL/bAZZumHVlB8Obzv5uBuKSCLV2rDJ3e1Jb+tYzYyEqJEmy2pkjAtkO+o2IjFvGpyTkYgEdfmI7Fhq41iDC9qS396w5WowHxT9/UhZk/GdORZdtJRR+yRh1s6VoZUXpTIezoX3nFUmmW+JdrvwLvNzVLa5PppTXp6LGpa42jNxXCjv61GPK9FSnZ6ddMjkXbjuyAQVSzw5auNYne1Ib+dVKTHbeL/ar8EQw+GfOmHz+WkA02gP1w4ohUz7auNYne1Ib+tRHhZiwwuC7gnrIaYxltyuFztyJCVeTSGGc0jyJgbyN1XsA2lNwJ27rWJDHMhv51bzDzbPsDe7FzujXJ2Rx8UMIzaHPam9bTv3rUtP51XKh/rFmLqHn9axHJSXsN97Fu9K8Twv8XnVP4C19ma8w+OqfqAAABOHRFWHRNYXRoTUwAPG1hdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTgvTWF0aC9NYXRoTUwiPjxtZmVuY2VkIGNsb3NlPSIiIG9wZW49InsiPjxtdGFibGUgY29sdW1uYWxpZ249ImxlZnQiPjxtdHI+PG10ZD48bW4+MzwvbW4+PG1pPng8L21pPjxtbz4rPC9tbz48bWk+eTwvbWk+PG1vPj08L21vPjxtbj4yNDwvbW4+PC9tdGQ+PC9tdHI+PG10cj48bXRkPjxtbj41PC9tbj48bWk+eDwvbWk+PG1vPis8L21vPjxtbj4yPC9tbj48bWk+eTwvbWk+PG1vPj08L21vPjxtbj42MDwvbW4+PC9tdGQ+PC9tdHI+PC9tdGFibGU+PC9tZmVuY2VkPjwvbWF0aD5ANaMNAAAAAElFTkSuQmCC" alt="" style="width:11%">



            <p>Portanto, não podemos, inicialmente, anular nenhuma das incógnitas. Neste caso, devemos multiplicar por algum número que transforme o coeficiente em um número oposto do coeficiente da outra equação.</p>

            <p>Podemos, por exemplo, multiplicar a primeira equação por - 2. Contudo, devemos ter o cuidado de multiplicarmos todos os termos por - 2, para não modificarmos a igualdade.</p>

            <p>Assim, o sistema equivalente ao que queremos calcular é:</p>

            <img src="data:image/png;base64,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" alt="" style="width:13%">

            <p>Agora, é possível resolver o sistema por adição, conforme apresentado abaixo:</p>

            <img src="https://static.todamateria.com.br/upload/si/st/sistemasadicao2.jpg?auto_optimize=low" alt="" style="width:17%">


            <p>Logo, x = - 12, não podemos esquecer de substituir esse valor em uma das equações para encontrar o valor do y. Substituindo na primeira equação, temos:</p>

            <img src="data:image/png;base64,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" alt="" style="width:14%">


            <p>Assim, a solução para o sistema é o par ordenado (<strong>-12, 60</strong>)</p>



        </div>
        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>Cefet - RJ - 2016 Uma garrafa PET (politereftalato de etileno) com sua tampa custa sessenta centavos. Sabendo que a garrafa custa cinquenta centavos a mais que a tampa, quanto custa só a tampa?</p>

                <p>a) R$ 0,05</p>

                <p>b) R$ 0,15</p>

                <p>c) R$ 0,25</p>

                <p>d) R$ 0,35</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: a) R$ 0,05
                    </p>
                </div>

                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>Cefet - RJ - 2014 Se eu leio 5 páginas por dia de um livro, eu termino de ler 16 dias antes do que se eu estivesse lendo 3 páginas por dia. Quantas páginas tem o livro?</p>

                <p>a) 120</p>

                <p>b) 125</p>

                <p>c) 130</p>

                <p>d) 135</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: a) 120
                    </p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
                <br>
                <h4>Não deixe de aprender mais:</h4>
                <br>
                <li><a href="geoespa.php">Geometria Espacial</a></li>
                <li><a href="geoana.php">Geometria Analítica</a></li>
                <li><a href="geoplana.php">Geometria Plana</a></li>
                <li><a href="funcaoAfim.php">Função Afim</a></li>





            </div>
        </div>
    </main>
</body>


<script>
    function showAnswer1() {
        var answerDiv = document.getElementById("answer1");
        var respost = document.getElementById("respver")
        answerDiv.style.display = "block";
        respost.style.display = "none"
        var hideButton = document.querySelector('.hide-answer-btn1');
        hideButton.style.display = "inline";

    }

    function hideAnswer1() {
        var answerDiv = document.getElementById("answer1");
        var respost = document.getElementById("respver")
        answerDiv.style.display = "none";
        respost.style.display = "block"
        var hideButton = document.querySelector('.hide-answer-btn1');
        hideButton.style.display = "none";


    }

    function showAnswer2() {
        var answerDiv2 = document.getElementById("answer2");
        var respost2 = document.getElementById("respver2")
        answerDiv2.style.display = "block";
        respost2.style.display = "none"
        var hideButton2 = document.querySelector('.hide-answer-btn2');
        hideButton2.style.display = "inline";

    }

    function hideAnswer2() {
        var answerDiv2 = document.getElementById("answer2");
        var respost2 = document.getElementById("respver2")
        answerDiv2.style.display = "none";
        respost2.style.display = "block"
        var hideButton2 = document.querySelector('.hide-answer-btn2');
        hideButton2.style.display = "none";


    }
</script>