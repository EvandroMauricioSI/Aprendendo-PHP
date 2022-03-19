<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções Aritméticas em PHP</title>
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variável a = $a<br>A variável b = $b"; 

    ?>
</div>
</body>
</html>
