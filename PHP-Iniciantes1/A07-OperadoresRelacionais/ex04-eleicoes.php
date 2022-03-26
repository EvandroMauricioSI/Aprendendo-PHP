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
        echo "No final da url use ( ?an=[valor] ) para poder passar os parâmetros<br/><br/>";
        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "Quem nasceu em $ano tem $idade anos";
        $tipo = ($idade >=18 && $idade<65)?"Obrigatório":"Não Obrigatório";
        echo "<br>Seu voto é $tipo";
        
    ?>
</div>
</body>
</html>
