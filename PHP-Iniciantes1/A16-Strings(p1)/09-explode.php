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
        echo "<h3>Funções Strings em PHP: explode()</h3>";

        $site = "Curso em Vídeo";
        $vetor = explode(" ", $site);
        print_r($vetor); 
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 