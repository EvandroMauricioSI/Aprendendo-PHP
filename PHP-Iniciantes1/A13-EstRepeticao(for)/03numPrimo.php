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

      $n = isset($_GET["num"])?$_GET["num"]:1;
      echo "<h2>Analisando o número <span class=foco>$n</span></h2>";
      $multiplos = 0;
      echo "Valores múltplos: ";
      for ($c=1 ; $c<=$n; $c++){
        if($n % $c == 0){
          $multiplos+=1;
          echo "<span class=foco>$c</span> "; 
        }
      }
      echo "<br/>Total de números múltiplos de $n: <span class=foco>$multiplos</span>";
      if($multiplos<=2){
        $sit = "É PRIMO";
      }
      else{
        $sit = "NÃO É PRIMO";
      }
      echo "<br/>Resultado: $n <span class=foco>$sit</span>";
    ?>
    <p><a href="javascript:history.go(-1) ">VOLTAR</a></p>
</div>
</body>
</html>
 