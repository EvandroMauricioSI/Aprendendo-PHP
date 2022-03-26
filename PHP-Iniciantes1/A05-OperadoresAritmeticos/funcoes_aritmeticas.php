<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções Aritméticas em PHP</title>
    <style>
        h2 {
            width: 300pt;
            background-color: #DCDCDC;
            font: 14pt Menlo;
            font-weight: bold;
            color: #4F4F4F;
        }
        div{
            font: 12pt Menlo;
        }
    </style>

</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2> Valores recebidos: $v1 e $v2<br></h2>";
        echo "O valor absoluto de $v2 = ".abs($v2);
        echo "<br>O valor de $v1<sup>$v2</sup> = " . pow($v1, $v2);
        echo "<br>A raiz de $v1 = " . sqrt($v1);
        echo "<br>O valor de  $v2 arredodado = " . round($v2); //round arredonda pelas regras matemáticas 
        // round pode ser substituído por:
        //           ceil  (sempre arredonda pra cima)
        //           floor (sempre arredonda pra baixo)
        echo "<br>A parte inteira de  $v2  = " . intval($v2);
        echo "<br>O valor de $v1 em moeda  = R$" . number_format($v1, 2, ",", ".");

    ?>
</div>
</body>
</html>
