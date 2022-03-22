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
        $valor = $_GET["v"];
        #echo "O valor enviado foi $valor";
        $rq = sqrt($valor);
        echo "A raiz de $valor = ".(number_format($rq, 2));
    ?>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <a href="01exercicio.html">[voltar]</a>
</div>
</body>
</html>
 