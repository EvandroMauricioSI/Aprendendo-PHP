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

    echo "<br>- - - - - - - - - - - - - - - - - - - - - - <br> ";
    
    echo "aplicando sort()<br>";
    sort($v);
    print_r($v);

    echo "<br>- - - - - - - - - - - - - - - - - - - - - - <br> ";

    $v = array("A", "J", "M", "X", "K");
    echo "aplicando rsort()<br>";
    rsort($v);
    print_r($v);

    echo "<br>- - - - - - - - - - - - - - - - - - - - - - <br> ";

    $v = array("A", "J", "M", "X", "K");
    echo "aplicando asort()<br>";
    asort($v);
    print_r($v);

    echo "<br>- - - - - - - - - - - - - - - - - - - - - - <br> ";

    $v = array("A", "J", "M", "X", "K");
    echo "aplicando arsort()<br>";
    arsort($v);
    print_r($v);

    echo "<br>- - - - - - - - - - - - - - - - - - - - - - <br> ";

    echo "aplicando ksort()<br>antes: ";
    $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
    print_r($v);
    echo "depois:<br>";
    ksort($v);
    print_r($v);

    echo "<br>- - - - - - - - - - - - - - - - - - - - - - <br> ";

    echo "aplicando krsort()<br>antes: ";
    $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
    print_r($v);
    echo "depois:<br>";
    krsort($v);
    print_r($v);

    ?>
  <pre>
  <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 