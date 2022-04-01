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

      #título:
      echo "<h3>Funções Strings em PHP: substr()</h3>";
      echo "faz um fatiamento da string";
      # substr(string a ser fatiada, ínicio, quantidade caracteres), ex: substr($site, 0, 5);
      # obs1: colocar apenas um valor substr($site, 6) começa o fatiamento a partir da 6a letra
      # obs2: colocar valor negativo ($site, -5) pega apenas as últimas 5 letras
      # obs3: colocar valor negativo ($site, -5, 2) pega as últimas 5 letras e útiliza apenas 2
        
      $site = "Curso em Vídeo";
      $sub = substr($site, 0, 7);
      echo $sub;
        
        
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 