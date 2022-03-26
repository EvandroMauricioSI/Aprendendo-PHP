<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores em PHP</title>
</head>
<body>
<div>
    <?php
        echo "Nota: Para informar os velores para as operações:<br>";
        echo "\tNo final da url coloque ?a=3&b=5, por exemplo";
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1  e $n2 </h2>";
        echo "<br>A SOMA VALE : ".($n1 + $n2);
        echo "<br>A SUBTRAÇÃO VALE  : ".($n1 - $n2);
        echo "<br>A MULTIPLICAÇÃO VALE : ".($n1 * $n2);
        echo "<br>A DIVISÃO VALE : ".($n1 / $n2);
        echo "<br>O MÓDULO VALE : ".($n1 % $n2);
        echo "<br>A MÉDIA VALE : ".(($n1 + $n2)/2);


    ?>
</div>
</body>
</html>