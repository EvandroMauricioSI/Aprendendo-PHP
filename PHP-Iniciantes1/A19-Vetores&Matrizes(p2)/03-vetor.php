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
    $v = array("A", "J", "M", "X", "K");
    print_r($v);
    
    echo "aplicando array_unshift($v, 'O'')<br>";
    array_unshift($v, "O");
    print_r($v);

    echo "<br>aplicando array_shift($v)<br>";
    array_shift($v);
    print_r($v);
    ?>
  <pre>
  <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 