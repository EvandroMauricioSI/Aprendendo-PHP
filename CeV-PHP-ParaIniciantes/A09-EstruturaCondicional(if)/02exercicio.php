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
        if($i<16){
            $v = "não vota";
        }
        elseif (($i>=16 && $i<18) || ($i>65)){
            $v = "voto opcional";
        }
        else{
            $v = "voto obrigatório";
        }
          
        
        echo "VOTO: $v";
    ?>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <a href="02exercicio.html">[voltar]</a>
</div>
</body>
</html>
 