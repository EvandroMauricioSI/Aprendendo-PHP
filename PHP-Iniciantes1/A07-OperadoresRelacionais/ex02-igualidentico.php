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
        $a = 3;
        $b = "3";
        #echo "Os parâmetros passados foram $a e $b<br><br>";
        $r = ($a == $b) ? "SIM" : "NÃO";
        echo "A variáveis A e B são iguais? R:  $r";
        $r = ($a === $b) ? "SIM" : "NÃO";
        echo "<br>A variáveis A e B são identicas? R:  $r";
    ?>
</div>
</body>
</html>
