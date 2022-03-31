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
        $v = array(3, 6, 7, 2, 1, 9);

        printf("<h2>Usando print_r:</h2>");
        print_r($v);
        
        printf("<h2>Usando var_export:</h2>");
        var_export($v);

        printf("<h2>Usando var_dump:</h2>");
        var_dump($v);
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 