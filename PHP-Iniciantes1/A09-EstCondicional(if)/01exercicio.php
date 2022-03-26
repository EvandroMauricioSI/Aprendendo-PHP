<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos<br/><br/>";
        if($i>=18){
            $v = "PODE VOTAR";
            $d = "PODE DIRIJIR";
        }
        else{
            $v = "NÃO PODE VOTAR";
            $d = "NÃO PODE DIRIJIR";
        }
        echo "Com essa idade você $v e $d";
    ?>
    <a href="01exercicio.html">voltar</a>
</div>
</body>
</html>
 