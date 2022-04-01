<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
      $v = array( 3 => 5,
                  1 => 9,
                  8 => 8,
                  7 => 7,   
                );
      $v[]=10;
      unset($v[1]);
      print_r($v);
    ?>
  </pre>
  <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 