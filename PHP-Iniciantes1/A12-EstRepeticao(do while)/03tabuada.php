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
        $v = isset($_GET["num"])?$_GET["num"]:1;
        echo "<h2>Tabuada de $v </h2>";
        $c = 1;
        do {
          $r = $v * $c;
          echo "$v x $c = $r <br/>";
          $c++;
        }while ($c <=10); 
    ?>
    <a href="03index.php" class="botao">voltar</a>
</div>
</body>
</html>
 