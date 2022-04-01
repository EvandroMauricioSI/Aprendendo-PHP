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
    #$v[] = "O";
    array_push($v, "O");# adiciona um elemento no final do vetor 
    #array_pop($v); elimina o último elemento do vetor
    $tot = count($v);
    echo "O vetor tem $tot elementos<br><br>";
    print_r($v);
    ?>
  <pre>
  <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 