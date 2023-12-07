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
    <title>Vetores - Aprenda Fácil</title>
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

        .vetor {
            align-items: center;
            justify-content: center;
        }

        .vetor h1 {
            text-align: center;
            align-items: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .vetor img {
            width: 70%;
            border-radius: 3%;
            margin-bottom: 30px;
        }

        .vetor p {
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .vetor h2 {
            margin-bottom: 7px;
        }

        .vetor h3 {
            margin-bottom: 10px;
        }

        .exercicio1 a {
            text-decoration: none;
            color: #007BFF;
        }

        .exercicio1 a:hover {
            cursor: pointer;
            color: #6959CD;
        }

        .exercicio1 button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 40px;
            border: none;
            margin-top: 16px;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
        }

        .answer p {
            margin-bottom: 10px;
            color: #007BFF;
        }

        .bbs {
            margin-bottom: 30px;
        }

        .video h2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .video iframe {
            margin-bottom: 20px;
        }

        .exercicio1 img {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .exercicio1 p {
            margin-top: 5px;
            line-height: 1.5;
        }

        .exercicio1 h1 {
            left: 0;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="vetor">
            <h1><u>Vetores</u></h1>
            <h2>O que é um vetor?</h2>

            <p><strong>Vetor</strong> é a representação que determina o <strong>módulo</strong>, a <strong>direção</strong> e o <strong>sentido</strong> de uma grandeza vetorial. Os vetores são segmentos de reta orientados por uma seta em uma extremidade.</p>
            <p>Nomeamos os vetores com uma letra e uma pequena seta.</p>
            <img src="https://static.todamateria.com.br/upload/im/ag/image-702.jpg" alt="" style="width: 25% ;">
            <br>
            <p>Os vetores caracterizam as grandezas vetoriais, que são as grandezas que precisam de orientação, ou seja, direção e sentido. Alguns exemplos são: força, velocidade, aceleração e deslocamento. Não basta o valor numérico, é preciso descrever para onde atuam estas grandezas.</p>

            <!-- Modulo de um vetor -->
            <h3>Módulo de um vetor</h3>
            <p>O <strong>módulo do vetor</strong>, ou intensidade, é seu valor numérico, seguido da unidade de medida da grandeza que ele representa, por exemplo:</p>
            <img src="https://static.todamateria.com.br/upload/im/ag/image-703.jpg?auto_optimize=low" alt="" style="width: 16% ;">
            <p>Indicamos o módulo entre barras mantendo a seta ou, apenas a letra, sem barras e sem seta.
            </p>
            <img src="https://static.todamateria.com.br/upload/im/ag/image-706.jpg?auto_optimize=low" alt="" style="width: 10% ;">

            <p>O comprimento do vetor é proporcional ao módulo. Um vetor maior representa um módulo maior.</p>

            <img src="https://static.todamateria.com.br/upload/im/ag/image-707.jpg?auto_optimize=low" alt="" style="width: 20% ;">

            <p>O módulo do vetor b é de 4 unidades, enquanto do vetor a é de 2 unidades.</p>

            <h3>Direção de um Vetor</h3>
            <p>A <strong>direção do vetor</strong> é a inclinação da reta suporte em que ele está determinado. Só existe uma direção para cada vetor.</p>

            <img src="https://static.todamateria.com.br/upload/im/ag/image-708.jpg?auto_optimize=low" alt="" style="width: 30% ;">

            <h3>Sentido de um Vetor</h3>
            <p>O <strong>sentido do vetor</strong> é mostrado pela seta. Uma mesma direção pode conter dois sentidos, como para cima ou para baixo e, para a direita ou esquerda.</p>
            <img src="https://static.todamateria.com.br/upload/im/ag/image-709.jpg?auto_optimize=low" alt="" style="width: 20% ;">

            <p>Adotando um sentido como positivo, o sentido oposto, o negativo, é representado com um sinal de subtração antes do símbolo do vetor.</p>

            <h2>Vetor Resultante</h2>

            <p>O <strong>vetor resultante</strong> é resultado de operações vetoriais e, equivale a um conjunto de vetores. É conveniente conhecer o vetor que representa o efeito produzido por mais de um vetor.</p>

            <p>Por exemplo, um corpo pode estar sujeito a um conjunto de forças e, querermos saber o resultado que irão produzir, todas juntas, sobre este corpo. Cada força é representada por um vetor, mas o resultado pode ser representado por apenas um vetor: o <strong>vetor resultante.</strong></p>

            <img src="https://static.todamateria.com.br/upload/im/ag/image-746.jpg?auto_optimize=low" alt="" style="width: 35% ;">

            <p>O vetor resultante,<strong>R</strong>, de direção horizontal e sentido para a direita, é o resultado de somas e subtrações dos vetores <strong>a</strong>,<strong>b</strong>,<strong>c</strong> e <strong>d</strong>. O vetor resultante mostra uma tendência ao corpo se mover com esta orientação.</p>

            <p>Os vetores com direção vertical, possuem o mesmo tamanho, ou seja, o mesmo módulo. Como possuem sentidos opostos eles se anulam. Isto mostra que não haverá movimento do caixote na direção vertical.</p>

            <p>Ao analisar os vetores <strong>c</strong> e <strong>d</strong>, que possuem mesma direção e sentidos opostos, percebemos que "sobra" uma parte da força para a direita, pois o vetor <strong>c</strong> é maior que o <strong>d</strong> com seta para a direita sobrescrito, ou seja, o módulo de c com seta para a direita sobrescrito é maior.</p>

            <p>Para determinar o vetor resultante, realizamos operações de soma e subtração de vetores.</p>


            <h2>Soma e subtração de vetores com mesma direção</h2>
            <p>Com <strong>sentidos iguais</strong>, somamos os módulos e mantemos a direção e o sentido.</p>

            <h3>Exemplo:</h3>

            <img src="https://static.todamateria.com.br/upload/im/ag/image-713.jpg?auto_optimize=low" alt="" style="width: 30% ;">

            <p>Graficamente colocamos os vetores em sequência, sem alterar seus módulos. O início de um deve coincidir com o final do outro.</p>

            <p>Vale a propriedade comutativa da adição, pois a ordem não altera o resultado.</p>

            <p>Com <strong>sentidos opostos</strong>, subtraímos os módulos e mantemos a direção. O sentido do vetor resultante é o do vetor com maior módulo.</p>

            <h3>Exemplo:</h3>

            <img src="https://static.todamateria.com.br/upload/im/ag/image-749.jpg?auto_optimize=low" alt="" style="width: 37% ;">

            <p>O vetor <strong>R</strong> é a parte que sobra de <strong>b</strong>, após retirar <strong>a</strong>.</p>

            <p>Subtrair um vetor equivale a somar com o oposto do outro.</p>

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAAAUCAYAAABiZ7R2AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAATRJrTQAAAAbRJREFUeNrtmr1KA0EUhZcUwdZS0lqJhICFiPgGYidiKYKIBAt7C7EJvoGFpS9gJYhFCBJsUlmIYClim8JiWVjPwG2EDDM7uZM7A/fAB9lid+6eObvzsykKVS46A4MFtzmgdlWZqwvGQm2/UPtZqNasWDuxJ+T1BhhpgPJVjwIk6fWIgqQByvDebkBfuJ5zn/nXHngFJfgA20Imm/F2SHV8gwvBTuf0JDRAj2BH2Ost8Oy64D1Yo99H4E0oQOZ1vQtaYIWODxtew4WvOD0JDdAUtIW9blMd3mpRKiUCtDwj/cMEhqB5PQkNUJWI12XMG+Z66mtLx/1mOI/h8qSK1E5Tr50BuqRxvgp41cfuoFKg47g9SXEI8/XaOYTdgn2wJLwiqi3FfwnUwu1J6LlPkRY0Tbx2TqKniSypZ7V5AO4EauH2JIdlvM3rPtVh1Ts4pt8dcE3Luo5AgB7AOh13qbZVgQBxexIaoJgbib5eOzcSzckTGv/MvscmuAI/Ak+9WS5/0rxjEmkPxEepeGI0Lvi/R/l6ndWnDJU9zPoxVTWXTovF/53DzHtO1HqVSqVSqVSq//oDw6m37VtFsngAAAGMdEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1pIG1hdGh2YXJpYW50PSJub3JtYWwiPmE8L21pPjxtbz4mI3hBMDs8L21vPjxtbz4tPC9tbz48bW8+JiN4QTA7PC9tbz48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+YjwvbWk+PG1vPiYjeEEwOzwvbW8+PG1vPj08L21vPjxtbz4mI3hBMDs8L21vPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5hPC9taT48bW8+JiN4QTA7PC9tbz48bW8+KzwvbW8+PG1vPiYjeEEwOzwvbW8+PG1vPig8L21vPjxtbz4tPC9tbz48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+YjwvbWk+PG1vPik8L21vPjxtbz4mI3hBMDs8L21vPjxtc3BhY2UgbGluZWJyZWFrPSJuZXdsaW5lIi8+PG1vPiYjeEEwOzwvbW8+PC9tYXRoPsD4DmgAAAAASUVORK5CYII=" alt="" style="width: 16% ;">

            <h2>Soma e Subtração de Vetores Perpendiculares</h2>


            <p>Para somar dois vetores com direções perpendiculares, movimentamos os vetores sem alterar seus módulos, de modo que o início de um coincida o final do outro.</p>

            <p>O vetor resultante liga o início do primeiro ao final do segundo.</p>
            <img src="https://static.todamateria.com.br/upload/im/ag/image-719.jpg?auto_optimize=low" alt="" style="width: 36% ;">

            <p>Para determinar o módulo do vetor resultante entre dois vetores perpendiculares, fazemos coincidir o início dos dois vetores.</p>

            <img src="https://static.todamateria.com.br/upload/im/ag/image-721.jpg?auto_optimize=low" alt="" style="width: 25% ;">

            <p>O módulo do vetor resultante é determinado pelo teorema de Pitágoras.</p>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAAbCAYAAABGDxCrAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAXQ/cXWQAAAupJREFUeNrtWjFrFEEUHg4JFkESYoqAYnOFiARBQxSLIIikCCFNiIJikyI/wCKSIohFCi1EQRCRFHYqGlA0kDKEIyByCiIoInKopAl6CWcIkvN78B0s62127nZmd3bdB18xM7sz38ybeW/e21UqG9IF1HP8g0zIMLCscsmkzAE38mXIpnwCTubLkD0pAj+APRH6GKFZ3wZKwE1gr8NzThvftuUi8DxiHy+AIaDA8hXgtsNzThvftuUZMGm4TzkFmylag7Tx1RIxxb+B/Rb6rcU4j6ihSyhff4z0B6jSBJx2VLkngC8W+p0C5lOk3FC+YQHx8H8SAvUDK0BPSpSrxdc/QAdwBnjN+pKDyv1gOAQaBBaA3piV1O572nyDBuhj/bbm+3Glxrrob02FAKeABxFDqjiV2xLfoAEKrK85plwJgV6FPDPABahwc1ZZ9u/0g8DTBM2r9z1xf2VgC/gJ3DPBN4jYBOtfOmaSH2uEQEEb65HvuSXgsAPKHQvg+xHojMLXT0wyP1cZP9VpBuKUAyHtcks+GvLMIrM5HbRAMwFWyJR1ifqeWJjrdIUix4DPbJuNwjfohXUuUJxylmNP7BICVdrwjwWDbsGkG2o8c26XtSjbIHskgclOA7+ArxZCIJeVqyLceVoaYB8Xd1XzhJi+UA14/JBq4iPHNPoQv3SXu77GxIzND9m2zLlOtNLyAIOsu5XQpekNza8/BNpQ4SnHUZ8y4/hLwYZye9i2ZoPYNdaPJqDcZqdXJwRqXLjq5F+0YJZtKLe7SdsU2x7aIlZizFVMQMFvge+e8h365DBpnNohliWUuOSZ54iDyhU3eJluUHztOC+00nbcFrFDTACUVfwfhft9p1f3r4uFgJv/qqe85pByq0xYNHMhs7aJNXb9/YROb6XFEKib2agtYp6bVPCOF5QlRxIy3ty95Ba+0fLIneOCyriI790BniS0uXKxLO+5wyfzpcjm6a0r839d5OKInM+XQF/+Agtyt+nIYYT5AAABDnRFWHRNYXRoTUwAPG1hdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTgvTWF0aC9NYXRoTUwiPjxtc3R5bGUgbWF0aHNpemU9IjIwcHgiPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5SPC9taT48bW8+PTwvbW8+PG1zcXJ0Pjxtc3VwPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5hPC9taT48bW4+MjwvbW4+PC9tc3VwPjxtbz4rPC9tbz48bXN1cD48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+YjwvbWk+PG1uPjI8L21uPjwvbXN1cD48L21zcXJ0PjwvbXN0eWxlPjwvbWF0aD5EEEZYAAAAAElFTkSuQmCC" alt="" style="width: 10% ;">

            <h2>Soma e subtração de vetores oblíquos</h2>

            <p>Dois vetores são <strong>oblíquos</strong> quando formam um ângulo entre suas direções, diferente de 0°, 90° e 180°. Para somar ou subtrair vetores oblíquos utilizam-se os métodos do paralelogramo e linha poligonal.</p>

            <h3>Método do paralelogramo</h3>

            <p>Para realizar o método, ou regra, do paralelogramo entre dois vetores e, desenhar o vetor resultante, seguimos os seguintes passos:</p>

            <p>O primeiro passo é posicionar suas origens no mesmo ponto e traçarmos retas paralelas aos vetores, para formar um paralelogramo.</p>

            <p>O segundo é traçar um vetor diagonal no paralelogramo, entre a união dos vetores e a união das retas paralelas.</p>

            <img src="https://static.todamateria.com.br/upload/im/ag/image-725.jpg?auto_optimize=low" alt="" style="width: 25% ;">

            <p>As linhas pontilhadas são paralelas aos vetores e a figura geométrica formada é um paralelogramo.</p>

            <p>O vetor resultante é a linha que liga a origem dos vetores ao encontro das paralelas.</p>

            <p><strong>O módulo do vetor resultante é obtido pela Lei dos Cossenos.</strong></p>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOYAAAAbCAYAAABoZvN8AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAXQ/cXWQAABVpJREFUeNrtXF1oFUcUHkIIfQiSkIgISkFCKUVE0JCGEKQgEqQEKYT0Ui8iivjUJx+UIiI+FDRIUBFEJIjkJS0qqVghhFCKhAtBovgDSigiUUJB0mu4hkvo9Qz5loyT3dnZ3dm9c5P54Hu4O7OzZ87MOWfmzCSMrQ00ESuOjmuIawI9xL+Zg4ODVfiVeMGpwcHBLrwifuvU4OBgD9qI74j1Cdr4HkvhMnGSOED8wuI+15q8DusQB4l/JGzjHnEPsQ6/TxAvWdznWpPXYR3iDvGo4TZ59FmoIR3UmrwOaxx8+fqR2JpCu6UM+5E0RZ61vLbrw1Z0EccwVpzjxE5dZXhcIhaxbOqytKO7if+k0O5x4lANTcQs5d1JHCROY3Lxfe4M8SJxkzPMQHwHm/Kzs71RDFNmj4WdTeOYZAfxIbGlRgwza3lVc2SOLSfjnGGuXtHMok9XiI3gVTybZYrkpayMBlj5FJ5PWtjhF8zsMUkH8S5xY8YTKu571ZD3L2Je+CZPQLXjOW9r1BnmKuQVNjSJsp+iKmMznpcTeNI0rhw1YX9p6piAr/VvsGTHLlkaZjXl9UML2io5w1yFYfQn51PWj7LhqMqo01R41obJj0n+DKnTjsn7Bo6liN9yhNlKvF3FCSW+14P92yJxnnjNQnmDlmuqeaI7FnH0oYscInsJ7Y0H7O+OEQtCkqaAZ0HRcEpoc9QnJzON/mxUOLTpqIPkWfR9y7zQbyz8mCTIKYxI9Xim7GsLDPNAgLwvsSexRV7Vcu33hGMRRx86GNIMEqp6coLtsGabCyF6rjDFcZfcIN/EnxIa7czY8LaElPNs7PaQOg/Y8i2ZBkT+XwK8uqmonvQ9Hk3OYfvAwTOgMyg7Y5G8Mngk4Lev3hO3JRyLOPoIQ5/QXr8gQzdbPnWQ6/EkVi/q1MFBzKGsT6g/I9iGV5dH+Anp+2WNFWQ5anR5D4Vmib34dn9A+W4oOer+qs7gZDS5dPfq7FPoYtoieUXwI5KnmLgdhsbCtD7uCxFYp94hn7JDPivHN3jWG9JuKob5TRUG/iTxP+LrgPIkxyQ2GyZLsMevhmHyuTELI9lqcCxM66OEd8IceRH1/BKKDSgrSnvRimCw3SHfN7KU3QDDKGhGJtMD367wcmMa3o9hH3aVrRyGL6Wc8UtrSamTFc/aSXUjGXMTk9bkWJjWx5JmP8sxvpsTIqd3XNQs1XmOshZTyZ8OPBusUoLnETotgh+TfGDh1/B6mf9Ni1ozzBZh32OLvF0wrvOa9aOOhWl9zOOdMAcSNWKKUTyPQOaX0BpRBJkci3lcclZzHZ0G/KKmzjGJlxyqQP62lDKRpg2z2afsOMpuWSIvX7L+y6JdJIg6Fqb14RlGLqTeqGKPeQRl9xTvf4k6i9Jzb8nr9182CijLxxmkSXidtioY52PiW+H3ZexBdZcve/C7ka2k9CspJbSSGuZrTIp6eOE+JN942S5L5PUSJF/FWErqjkVcfVwR6Lfym0N7XuTcJUW3A0K9/Wwl09oHZyTLOo53RPl4nXfS9xsFuQcRkflW8RqLcSVP9gRFrIOz/oPcHVLU1P1vBXeZf4a5wD6/22mLYRaFgZJ5JiXdxpE3Tv4g6ljE1YdKhtOa8t5Q1BvQ1MXPPt/vV9Tfl2SQPA93vUpRk+81oxyTNEPJi+AQHAznE2zix5gdEO9RnoIHXcIeO8fsQhzDjDoWcfURlkP4Ac6gjD0y39d1Bixbp1BvAcvX/T71OtFGSZAvr5CP3z2fEPSg9WdfNoPvNf9ny7dKrjMHBwdr8Aye8KhThYODXVGTG2arU4WDg1340anAYT3gEzV/5KLbCf44AAABSnRFWHRNYXRoTUwAPG1hdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTgvTWF0aC9NYXRoTUwiPjxtc3R5bGUgbWF0aHNpemU9IjIwcHgiPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5SPC9taT48bW8+PTwvbW8+PG1zcXJ0Pjxtc3VwPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj5hPC9taT48bW4+MjwvbW4+PC9tc3VwPjxtbz4rPC9tbz48bXN1cD48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+YjwvbWk+PG1uPjI8L21uPjwvbXN1cD48bW8+KzwvbW8+PG1uPjI8L21uPjxtaT5hYjwvbWk+PG1vPi48L21vPjxtaT5jb3MmI3gzQjg7PC9taT48L21zcXJ0PjwvbXN0eWxlPjwvbWF0aD4cTyaOAAAAAElFTkSuQmCC" alt="" style="width: 17% ;">

            <p>Onde:</p>

            <p><strong>- R é o módulo do vetor resultante;</strong></p>
            <p><strong>- a é o módulo do vetor ;</strong></p>
            <p><strong>- b é o módulo do vetor pilha espaço b;</strong></p>
            <p><strong>- θ é o ângulo formado entre as direções dos vetores.
                </strong>
            </p>

            <p>O <strong>método do paralelogramo</strong> é utilizado para somar um par de vetores. Caso se queira somar mais de dois vetores, devemos somá-los dois a dois. Ao vetor resultante da soma dos dois primeiros, somamos o terceiro e assim por diante.</p>
            <p>Outra forma de somar mais de dois vetores é usar o método da linha poligonal.</p>

            <h2>Multiplicação de um número real por um vetor</h2>

            <p>Ao multiplicar um número real por um vetor, o resultado será um novo vetor, que possui as seguintes características:</p>

            <li>Mesma direção, se o número real for diferente de zero;</li>
            <li>Mesmo sentido, se o número real for positivo e, sentido contrário se for negativo;</li>
            <li>O módulo será o produto entre o módulo do número real e o módulo do vetor multiplicado.</li>
            <br>
            <h3>Produto entre um número real e um vetor</h3>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEEAAAASCAYAAAAE7bMcAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAARqpSybAAAAUZJREFUeNpjYCAMPIC4C4j5GIY2oMgfokC8BohfA3HWEA4Egv7gAeL/ROJVQMwySD1KM38gh2DOMEkJOeTmJcFhUibQxR//ScSDDuByGCkOpnYgIKvzAeIbQPwNiDfgiNXjUPUGOMzTgMofp2Ug0Cpi3LAE4Ews6hOhctNwmNcHlU8cioHwGIgnADEbEIdDxT5hUQ+S/wBNLVxocixQPe+g6oZcIExBEmMi4KYJUDn09kAyVLxnqJYJHCS4CZbvL6CJn4GKqw3lgpEUNx2GyptC+cZQ/n5yLGQbJNmB1ECIh8rPhvKnQfmhxFrIhCQ2f4gGAgu0dfgLiCWB+AcQP0XzG1bwBWpwOLRknQnVOBQDgQFaAILUnITSjcRYOBNLnvUYwoGggqTuDxDLE2OhILQlBkpCt6AtNIYhHAggcBCqbgvDKMANAEDF3bsptTCXAAABB3RFWHRNYXRoTUwAPG1hdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTgvTWF0aC9NYXRoTUwiPjxtc3R5bGUgbWF0aHNpemU9IjIwcHgiPjxtb3Zlcj48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+dTwvbWk+PG1vPiYjeDIxOTI7PC9tbz48L21vdmVyPjxtbz49PC9tbz48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+bjwvbWk+PG1vdmVyPjxtaSBtYXRodmFyaWFudD0ibm9ybWFsIj52PC9taT48bW8+JiN4MjE5Mjs8L21vPjwvbW92ZXI+PC9tc3R5bGU+PC9tYXRoPtFh3cAAAAAASUVORK5CYII=" alt="" style="width: 5% ;">
            <p>Onde:</p>
            <p><strong>u</strong> é o vetor resultante da multiplicação;</p>
            <p><strong>n</strong> é o número real;</p>
            <p><strong>v</strong> é o vetor que está sendo multiplicado.</p>

            <h3>Exemplo</h3>
            <p>Seja o número real n = 3 e o vetor reto v com seta para a direita sobrescrito de módulo 2, o produto entre eles é igual a:</p>
            <p>Cálculo do módulo</p>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKIAAAAQCAYAAACV8KRlAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAPUJuPDwAAAtxJREFUeNrtWjFIHEEUXY7jCBKEI8hxhQREJFiEgyAiQSSNXCEWQrAQkcNOJEWaVBbBRkTEQg4OCwkhjViIiI2FiIUELK6wCIKIiIgIhwQ55BDM//AWPzK7bO52d2ZgPzyO+TP7d/78P3/+nz3HSUgXDRB+Em4JdUKVsELoaVJeAc9XIa9BOCMsE3Ia9WwnzBNOMac7wg/on5AB9OQBNtZIiPIYN4RuDTrm4IBe80rIANonjBEyaOcJFRjovAl5B4RJQgfaKUIf+CxzW5OO/O5fYiNwhJwgHMa5u23cCTp1SYmoGBa9gcx6zLoPYcxeswYIyo/SeHIcH1N/sJBbhKwYd4RxBQ8579B/ZIkjdkHmTogy05oc0Y3uo3E6YlRRaVihfEWMK4FX9pCzjP6S4VE4hzmeo9jIhyh7EmuwGbNOx3gvpx5fRbFyA7tkbXLES1SCrMw4eH/FuAyqMN7tbYpIwGNrIg8zOQ1gI33D8RwWcb54jTXoilm3OvTa8IimJ8gXrXDEVUX+9HIuK+DNvOBPg79kWT5aDjHKniAC9WvQ7RH63CIqp2HDIubEfQu25IivAszFzQOrHkdDTwjOEXWO+JYwKww016K8XsIV1qRTk+4NjBlU9I2h78KmYiUI/xD8PrQ/oL1vWdU81ML1jUuDzvOlcUaj7jWfMe7p9hDU+BnNR3NQ/hT4a2iX0f5s4f1iK9c3H5GbLRqgxxZ0yfs44r2f8WWyvG6JI6aRizSg+AOOppRlTvheUZAFpU6swbYhunzxydGL6NtVPXiPznFUoBUY0wZHdKAw9/3G73fDne4AEdtN4j/hSJaRXUWrApJ2m8yJo6LXIuddx0ZJ4UrO9Svlp8yKIgcoWuSI3aL/EQWA6UewCleO/z2iV45m4hetYVG0BL4dyOJc5wdPhbfa4ohulAn7y0RU1I+CooY152jIF70d/+HApjsiUwF+5f4jiG8zSk5CCZlI/wBcNdgf07S2+QAAAX10RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bWkgbWF0aHNpemU9IjIwcHgiIG1hdGh2YXJpYW50PSJub3JtYWwiPnU8L21pPjxtbyBtYXRoc2l6ZT0iMjBweCI+PTwvbW8+PG1pIG1hdGhzaXplPSIyMHB4Ij5udjwvbWk+PG1vIG1hdGhzaXplPSIyMHB4Ij4mI3hBMDs8L21vPjxtbyBtYXRoc2l6ZT0iMjBweCI+PTwvbW8+PG1vIG1hdGhzaXplPSIyMHB4Ij4mI3hBMDs8L21vPjxtbiBtYXRoc2l6ZT0iMjBweCI+MzwvbW4+PG1vIG1hdGhzaXplPSIyMHB4Ij4uPC9tbz48bW4gbWF0aHNpemU9IjIwcHgiPjI8L21uPjxtbyBtYXRoc2l6ZT0iMjBweCI+PTwvbW8+PG1uIG1hdGhzaXplPSIyMHB4Ij42PC9tbj48L21hdGg+ZdKx7gAAAABJRU5ErkJggg==" alt="" style="width: 13% ;">
            <p>A direção e o sentido serão os mesmos.</p>
            <img src="https://static.todamateria.com.br/upload/im/ag/image-729.jpg?auto_optimize=low" alt="" style="width: 30% ;">
        </div>
        <div class="video">

            <h2>Veja o vídeo a seguir:</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RRgBdqBl6Ig?si=f5Y_OXJq591GhvO3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="exercicio1">

            <h1><u>Exercícios</u></h1>
            <div class="bbs">
                <h3>Exercício 1</h3>
                <p>(UEFS 2011) O diagrama vetorial da figura esquematiza as forças exercidas por dois elásticos em um dente de uma pessoa que faz tratamento ortodôntico.</p>
                <img src="https://static.todamateria.com.br/upload/im/ag/image-739.jpg?auto_optimize=low" alt="" style="width: 25% ;">
                <p>Admitindo-se F = 10,0N, sen45° = 0,7 e cos45° = 0,7, a intensidade da força aplicada pelos elásticos no dente, em N, é igual a</p>
                <p>a) 3√10</p>
                <p>b) 2√30</p>
                <p>c) 2√85</p>
                <p>d) 3√35</p>
                <p>e) 2√45</p>

                <div class="answer" id="answer1" style="display: none;">
                    <p>Resposta correta: c) 2√85
                    </p>
                    <p>A intensidade da força aplicada no dente é obtida pela Lei dos Cossenos</p>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAK4AAAARCAYAAABEkJdOAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAQ3ZOC+gAAA5pJREFUeNrtWF9kW1EcvqJipkYeKqoPIWJqKvoyVTF7qZqZqDITs4cae9jDzIyZipnZSx/20LepmT7UiIo9VIypyMPMmIipqNCHPdRE2ENMVZTsd+a73XH8bu7f3JPq/fi09+Tk5Py++/t3jmG4Rx/sEb8QM0aESJszhBjxIbEeOcpIahPBBseRo4y0NhEYXCfWIkc5E9qciwwqyu8h8RuxQpxg5k2iPKfPiaMcIbM7wTC1yRG3iV20SA3i3RBtCxPC1jJ8UbzbOauJGQgh4zVxTRm7TNzBCxoFDDuIhC4/HM4dtjbiBRaI43i+AtsLIdgWJubgtGZAieR5YDV5ibiljN0hvlecRGThSyNioFdH6buYK3T54DCAvGrT96FByofzObUtbIgEOqWMfSJmuckviE+VsZfEx9KzeDHTIR24xG+3pZKY0uQoQpdV7OcX2qkqEyx+tOn71OvYo4ZObTNLdw1zfhLvKZ/fIjbxW+JvnlkjjfWPjP+3QioWlGRpQgTYTc74kvJjwiH2iUlFYJWDXoYdrSCy6DoxgRdQQnbQ4SgllKln0n7eMJnKjX1BOu482gUvGjq1bZbYwfdjqHRbSmkX68zgeQbP88o63y0cWsYGcZkZF63DIveFFiJtjHgD10u3NZSJAgSVsclEW1iO0kIvaShB3Q3QZq+OewGH6JxHDZ3aJg6EjwbsYxsZV83AH5mDYMLGpuaARJfkysqJMumapv6mykRqjSlzbh3DS/aPQWzOYboa9iMjAcdY9KihG9u6Ni2Z+DyujMWZdZZsDpMxC12txv+l+qpSftYCyCJeXo56PSP+/xNwcDjNcKousj67GjNuGk6b8aGhG9v6HvffY8bG0Q400XLISFroehVZnS3PakP82WeW84oOcyioa3LcgsVB4QmxqMlxp/HiL/rU0I1tnYAyroznzJ7MazDugLzCLSKa+AdM5G1qcNxDlCsTRatoC8FR1hnB4rh+mtSwnyR617EANHRj24aDHjfPtAVlm5ujHpONG0xLVGcC4/TExl017DLN+7DxivgWhqVweq1octwyDjALeJ7C2Iqm/ew4vElxoqEb29K4AlvGmmLuO6WUH0i+ksVzbsAe71u0KntSkAhbvzIHv1P8ViJUzroVI3ysIrMUsa82c5UTBtrIJC0cXhua9uHk3OBWQ7e2zeIGw5ybZ24R9pFF9yzWMvd6Ar/iqlYW6/eQ/fPGGcaEESHSEPgLmu9H9rabSgEAAAD6dEVYdE1hdGhNTAA8bWF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OC9NYXRoL01hdGhNTCI+PG1zdXA+PG1pPlI8L21pPjxtbj4yPC9tbj48L21zdXA+PG1vPj08L21vPjxtc3VwPjxtaT5hPC9taT48bW4+MjwvbW4+PC9tc3VwPjxtbz4rPC9tbz48bXN1cD48bWk+YjwvbWk+PG1uPjI8L21uPjwvbXN1cD48bW8+KzwvbW8+PG1uPjI8L21uPjxtaT5hPC9taT48bWk+YjwvbWk+PG1pPmNvczwvbWk+PG1pPiYjeDNCODs8L21pPjwvbWF0aD59WXXPAAAAAElFTkSuQmCC" alt="" style="width: 16% ;">
                    <p>a e b são iguais a 10 N.</p>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPMAAABlCAYAAACYydVhAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAxkfqSpAAAB6ZJREFUeNrtnWGoFUUUx4eHiIREjwqRCkMeIiIilJi8QvwiEg95iFISEWKIiIREH4qK6kMkfikKArGQiBLELEIsCAmRCCNKRB5iRPghQgSLh5g8rG1OngfrOrt3797Znbm7vx8c3ruzd++c2d2zc2b23vkb0z+J2oy176yNmfjBZ4ACRqztsvYTPuMztIPr+IzPMPystXYSn/EZGkeytavWpvX/3B5Axmq/Wztt7bi1ex3vW6hjucU1OrzE2qvWzhS8505r76uvYvu1zOBzT8atHdELYkZ9fipwe0PV0TQTGmdZkgJLI+fsAb0upl0VjDkO2JvW9jkO7jG90OrkY2s7cho9ywlrGzMH6UTOBYHPtyK9/VZr8/X1Mr1xbA3U3pB1NIkc76mCYC7DVY3XRXnBPGntk0zZE9YOZnqK4w3f9fIauMXau47ydzIX5CA+Jx3y2ejFcTZAe2Opowkka9g+YDDLze0vDeQdrje8Zu2FTNkb1vakXssFtrThxuc1UFLE9Y7ydbrNh89Jh3xOD7Wabm/IOsY1S5F2X7T2tCMlntKhyFQmA5hF0t1vrV3LSYvTdZ0oaE/iK2gOZxyVXuG8tQU9cvqig9/LBjmJV6zNdZRL2aWKPtcdzDH7LKzRVLvp9oaqY6W1y5qVjujQJp2drrb2q7Xl+nq5vl6T+Zwfc4I8689ZzX5qD+YLmt7NsbbB3Hy2uSWCtCSvgTcK9pmpue42+jxPJ4/GI21vHXVIz/1cj+0Tjp76i0yZ9MijPeraa213j/bMflFoWrOz51NzGqUZ0YOS7gkei2SMUeUkXh+grjqziVh9HtULdH3E56iOOqZ7zEtMO3r9uY5Jp0lTPHm4wpHxFJ0X6VAfMjdn8c/3O+RarTl/Ot3a5yEI6wyMSznp1bwKKVxTPXOMPi/WQB6roU6f7a2jjqTidlePLz3oAR1XL8lsO+04vmXP03rT5/cM5I5yMFP2TSq/j7FnPqLDAVfjj0QazLH5vFQvwDuG4BzVUcdlTz1zmpfM7V+/HbRT6yuLkan9HY7JkI8iDuZNeiFmOWj8PZJIWuyzTGwe1pRuGM5RHXUcKDFm3uhIqY/2GLLOeDxPs5NupRHnHneUyzT6skiD2ejQYI9ekHLHfNn4/epj0mKfj/UxFivz5GLQ9oaoQ4YYF/WGIEF4n7UPU9tXaSAtS4195XXRJOH2zJC1n/Yc1U50RG2D1repnwvgio4xjKN3Ph4wiHulI6N68CUNkRnF/abC7F9Hfe4n7etV7qO9oepYqWNamUg74+iJJ3QSSnrbc9oz533uDY2XhRWDWZ4eXdDPuaKZ0yoDAAAAAAAAAAAAAAAAAAAAAAAAAABtBNkUgJaBbApAy0A2BaAFIJsCEHlP20Z5mqblS4bRd+RqBtvXx3p33mizPE3T8iXD6DtyNfUcb1lw4EDTwdxWeRof8iVJB30XuiZX41vqRtZZO2Xcq/jUSlvlaXxIpCQd9D099Gq63aHq8Omf8KW5uSxR47RVnsaHREoomZqQvgtdk6vx6d9OHdsHoa3yND4kUpIO+t5FuRpf/i3SYzcnRMC0WZ6minxJLDI1oXzvqlyNL/9OamoehDbL0/iQSAklUxPC9y7L1fjwb4sJtzz1/7RZnsaHRErSEd+7LlczqH8jOs+0MmTAtFmexodEStIB35GrGdy/SRPBtyLbLk8zqCRM0gHfkaspv+8h3W/SUb4tdDC3XZ6maUmYYfQduZry++YF8yXTW3QdACLjUE42CwBDhExwnTOBniMDgD9E+nUBhwEAAAAAAAAAAAAAAAAAALoE8jQALQN5GoCWgTwNQAtAngYg8p42tDzNOq33mvojq4bKIuR399hvwuT/YL1peRqAoMQiTyMrPcjyLemF1eQnZ18X7CM/Hp8qCOam5WkAghKrPM0s0wXbpKfdnhPMviVHAKInVnkao+n8+Zxt46le1hXMviVHAKInRnkaqXubjptdS7RIKi7CZosKgtmn5AjAUBCTPE026PfkvG+vtd2Z/bL4lEQBiJ5Y5WlGdSwvM9BrM9tWmNtFzfoNZp6TQ+uIWZ5GmK8BnUZej5UIZp+SKADRE7M8TV4vWvZG4VMSBSB6YpanmU2pL5TMBrL4lEQBiJ6Y5GnkK6Iy8TZHx/LyCOk3a89UDGZjBpd4ARgaYpKnkYm3Y5pWX9dAnOhjnO6iaXkaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAb8iPIJKIDAAq8qS5deUTABhSvrL2LIcBYLi5x9qf+hcAKlJWa6pOdlr73FGOBhVAScpqTdWNjJU355SjQQVQgjJaU3XzoLXLxr2EUR5oUAFkKKM1VTcvGvdKmnmgQQXgoIzWVJo6ns/+bNxrXGdBgwqggCa1plwrYy639ofWb0reQNCgAsjQlNbUmI7B5fMfzWx7y9rbJT8HDSqAHKpoTVVJs1/RYJbnyD9ktslC9w9X6OHRoAJI0bTW1C5r/6bG449Y+6VHil22F0WDCjpNCK0p+fLHp/r/e9Zer/AZaFABZAihNfWBtb+1N5Zny0t7vB8NKoAShNCausvaP9Y+s/Z9ifejQQUQMadM8SMmABgSVmkw38+hABh+NnMIAAbjP646m/NIKNgOAAAClnRFWHRNYXRoTUwAPG1hdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTgvTWF0aC9NYXRoTUwiPjxtc3VwPjxtaT5SPC9taT48bW4+MjwvbW4+PC9tc3VwPjxtbz49PC9tbz48bXN1cD48bW4+MTA8L21uPjxtbj4yPC9tbj48L21zdXA+PG1vPis8L21vPjxtc3VwPjxtbj4xMDwvbW4+PG1uPjI8L21uPjwvbXN1cD48bW8+KzwvbW8+PG1uPjI8L21uPjxtbz4uPC9tbz48bW4+MTA8L21uPjxtbz4uPC9tbz48bW4+MTA8L21uPjxtbz4uPC9tbz48bWk+Y29zPC9taT48bW4+NDU8L21uPjxtbz4mI3hCMDs8L21vPjxtc3BhY2UgbGluZWJyZWFrPSJuZXdsaW5lIi8+PG1zdXA+PG1pPlI8L21pPjxtbj4yPC9tbj48L21zdXA+PG1vPj08L21vPjxtbj4xMDA8L21uPjxtbz4rPC9tbz48bW4+MTAwPC9tbj48bW8+KzwvbW8+PG1uPjI8L21uPjxtbz4uPC9tbz48bW4+MTA8L21uPjxtbz4uPC9tbz48bW4+MTA8L21uPjxtbz4uPC9tbz48bW4+MDwvbW4+PG1vPiw8L21vPjxtbj43PC9tbj48bXNwYWNlIGxpbmVicmVhaz0ibmV3bGluZSIvPjxtc3VwPjxtaT5SPC9taT48bW4+MjwvbW4+PC9tc3VwPjxtbz49PC9tbz48bW4+MzQwPC9tbj48bXNwYWNlIGxpbmVicmVhaz0ibmV3bGluZSIvPjxtaT5SPC9taT48bW8+PTwvbW8+PG1zcXJ0Pjxtbj4zNDA8L21uPjwvbXNxcnQ+PC9tYXRoPpq5FsoAAAAASUVORK5CYII=" alt="" style="width: 20% ;">
                    <p>Fatorando a raiz quadrada, obtemos:</p>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAATCAYAAADvXT9EAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAQ3ZOC+gAAAc5JREFUeNrVlk0oRFEYhqdp0jRZUEqiSLOYpsmGKdOwmM00S02jyNZCFpKVBWUjFkqxRFYs5G8h7CRJLJCFRJOFhcUUpYnbzd9761W30z33x1yj+9bT3Hu/b875Tuc9Pz6f+6oEX2XAdfWAA58HtQf6vVZ0DXjmb1mUBOvgBajgEvT9op0BsCWJhcAcKAIF7IN6Icexpw9BLxeWpig45jcn0rydk8SWwCQIgAowDU4NCi9ZjeDKQX4TKICgJK4I737OruuFG3VmplGwYBIv6mb0p/CHvyg8QbvY1QXImMQ1fw8J7c+4XXiQ/ktKDhhRMfBI/8rUQmuoXFNafqdB4So3iV0wIunPUNVgG6SF72GwzMY7hNgUmLVYLyugjgtTUyvIc0CiAoyPgxsQsSq6mUWHDWJjLFzbp8+E2D1oM2l3U1JgysYpm+YMSRXh4gpZNDQIPkEt39vBnYVNlBI3AGmOVsSaRed6vYJVPs+DCYv8a8ksRul1M8VoKUPt2PGRTovgjQMt2PhvlsWnuA36+Zznaau3VEKXk2FOVtaw06O2CnyADXBic7Dd4Jy7hkLfdhnk3IJ38EQXxN2+3xxxYMNeuwnGWXiDF+/euf/q+BvDGIaDnalLggAAAGN0RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bW4+MjwvbW4+PG1zcXJ0Pjxtbj44NTwvbW4+PC9tc3FydD48L21hdGg+QVJWIQAAAABJRU5ErkJggg==" alt="" style="width: 4% ;">
                    <p>Portanto, a intensidade da força resultante aplicada pelos elásticos no dente é de</p>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD4AAAATCAYAAADI876sAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAABGJhU0UAAAAQ3ZOC+gAAAh9JREFUeNrll08oBGEYxqdN2uRAlIRIDtu27YUtwsFFDg7aKHJSDnLQ5uRAKYmDIo5IDij5dxAukiRxQA4SycHBQVES2+bf89Wjts98M7Mzu6J96tfuzvvtO98z873vfKNp8Vc6+PwF/pyawY6WhNoE7clmOhs88vNfqBIsgScQAaeg1UaeDrCqiKWBcfAMwmAL5Elj4lHTL6BNEfuRZxe0sDEJecE+j8UiUduNitg0GAQpIBUMg0OzidmQyLEN3FaM66kQnMVwwiJwrzihxrscLRdXVyKM14M+u8b1JmukHjBpEH+OWlHfxm8TZFxoA2TZyV/B5W5VJ6DOIC7qu0vKP5JA434wFmt+N+uvUrFBkeUDd6xflfxc2hH2FDG+WmdiETZZcce6FeezYlxoFpRYNZ4J1kCtdFwkmOGfq6TYEBg16RdzIJeNTagUXPOCyEphXNTpBfDYNF4AFqwYL6bpEp1YL42L5/SRFLsBZQaTWVEYrLGwy6vlCrFjXGgABIyMe9ic0kwSd4IPkMPf5eDKZJmHHTbQsAPjolTWVcaFiUWTycubhHl+nwD9JuPPFavIy1o3ko8lYde4UAgE9WLrMdbRFHjlhbq38N8gzdfwMebi92vu9qJLoiJqTB3HBB0ad7FZfmoOt4oZ4B0sgwOLE2oCx+zaYdZtg86YS/AGHrgKAw66unzx4/I6u8dEoWR7EwvQeH4yvns3/teJfwESN6alhDia0AAAAJF0RVh0TWF0aE1MADxtYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk4L01hdGgvTWF0aE1MIj48bW4+MjwvbW4+PG1zcXJ0Pjxtbj44NTwvbW4+PC9tc3FydD48bW8+JiN4QTA7PC9tbz48bWkgbWF0aHZhcmlhbnQ9Im5vcm1hbCI+TjwvbWk+PC9tYXRoPlNnHnkAAAAASUVORK5CYII=" alt="" style="width: 5% ;">


                </div>
                <button class="show-answer-btn" onclick="showAnswer1()" id="respver" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn1" onclick="hideAnswer1()" style="display: none;">Ocultar Resposta</button>
            </div>
            <div class="ass">
                <h3>Exercício 2</h3>
                <p>(PUC RJ 2016) As forças F1 , F2 , F3 e F4 , na Figura, fazem ângulos retos entre si e seus módulos são, respectivamente, 1 N, 2 N, 3 N e 4 N.</p>
                <img src="https://static.todamateria.com.br/upload/im/ag/image-740.jpg?auto_optimize=low" alt="" style="width: 24% ;">
                <p>Calcule o módulo da força resultante, em N.</p>
                <p>a) 0</p>
                <p>b) √2</p>
                <p>c) 2</p>
                <p>d) 2√ 2</p>
                <p>e) 10</p>

                <div class="answer" id="answer2" style="display: none;">
                    <p>Resposta correta: d) 2√ 2
                    </p>
                    <p>Utilizamos o método da linha poligonal para determinar o vetor resultante. Para isso, rearranjamos os vetores de modo que o final de um coincida com o início do outro, dessa forma:</p>
                    <img src="https://static.todamateria.com.br/upload/im/ag/image-743.jpg?auto_optimize=low" alt="" style="width: 24% ;">
                    <p>Utilizando um sistema de coordenadas com origem no início do vetor resultante, podemos determinar os módulos de suas componentes, da seguinte forma:</p>
                    <img src="https://static.todamateria.com.br/upload/im/ag/image-745.jpg?auto_optimize=low" alt="" style="width: 24% ;">
                    <p>Dessa forma, temos que:</p>
                    <p>Ry = 3 - 1 = 2 N</p>
                    <p>Rx = 4 - 2 = 2 N</p>
                    <p>O módulo do vetor resultante é determinado pelo Teorema de Pitágoras.</p>
                    <img src="data:image/png;base64,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" alt="" style="width: 8% ;">
                    <p>Portanto, módulo da força resultante é igual a 2 raiz quadrada de 2 espaço N.</p>
                </div>
                <button class="show-answer-btn" onclick="showAnswer2()" id="respver2" style="display: block;">Ver Resposta</button>
                <button class=" hide-answer-btn2" onclick="hideAnswer2()" style="display: none;">Ocultar Resposta</button>
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