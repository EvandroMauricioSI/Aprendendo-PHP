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
        echo "<h2>Passagem por VALOR:</h2>";
        echo "(valores usados a=3, x=x+2)";
        function teste($x){
          $x += 2;
          echo "<p>o valor de x é $x</p>";
        }
        $a = 3;
        teste($a);
        echo "<p>o valor de a é $a</p>";

        echo "<h2>Passagem por REFERÊNCIA:</h2>";
        echo "(valores usados a=3, x=x+2)";
        function teste2(&$x){
          $x += 2;
          echo "<p>o valor de x é $x</p>";
        }
        $a = 3;
        teste2($a);
        echo "<p>o valor de a é $a</p>";
    ?>
</div>
</body>
</html>
 