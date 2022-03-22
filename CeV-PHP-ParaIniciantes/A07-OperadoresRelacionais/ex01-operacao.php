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
        echo "No final da url use ( ?a=[valor]&b=[valor]&op=[valor] ) para poder passar os parâmetros<br/><br/>";
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores informados foram $n1 e $n2<br/>";
        $r = ($tipo =="s") ? $n1+$n2 : $n1*$n2 ;
        echo "O resultado = $r";
    ?>
</div>
</body>
</html>
