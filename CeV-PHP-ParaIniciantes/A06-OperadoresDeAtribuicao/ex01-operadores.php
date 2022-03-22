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
        echo "Informe o valor no final da url colocando ?p=[valor]";
        $preco = $_GET['p'];
        echo "<h2>O preço do produto é R$" .number_format($preco, 2, ",", "."). "</h2>";
        $preco += $preco*0.1;
        echo "<br>O novo preço com 10% de aumento será R$ ".number_format($preco, 2, ",", ".");

    ?>
</div>
</body>
</html>
