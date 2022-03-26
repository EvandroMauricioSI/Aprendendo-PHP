<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP - CursoEmVídeo.com</title>
    <style>
        h2 {
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
    /*  Este exercício pretende demonstar o uso de operadores de incremento e decremento;
        Tanto pós ou pré 
        Também demonstrar como se faz comentários em PHP
            comentários inline usa // ou #
            comentários multiline (como está sendo feito agora)
 
    */  echo "informe o ano no final da url usando o formato ?aa=[int]<br><br>";
        $atual = $_GET["aa"]; // essa linha pega a linha na url
        echo "O ano atual é $atual e o ano anterior é ". --$atual; #--$atual é um pré decremento
    ?>
</div>
</body>
</html>
