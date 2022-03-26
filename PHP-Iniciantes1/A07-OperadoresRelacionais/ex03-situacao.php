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
        echo "No final da url use ( ?n1=[valor]&n2=[valor] ) para poder passar os parâmetros<br/><br/>";
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "A média entre $nota1 e $nota2 = $m";
        echo "<br>O aluno está: " .(($m<6)?"REPROVADO":"APROVADO");
    ?>
</div>
</body>
</html>
