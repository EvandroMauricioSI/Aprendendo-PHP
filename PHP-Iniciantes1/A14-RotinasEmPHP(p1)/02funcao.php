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
        function soma($a, $b){
          return $a + $b;
        }
        $x = 4;
        $y = 8;
        $r = soma($x, $y);
        echo ":: $x + $y = $r";
    ?>
</div>
</body>
</html>
 