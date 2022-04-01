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
      echo "<h3>Funções Strings em PHP: strpos()</h3>";
      echo "verifica em qual posição está a substring (obs.: case sensitive)";
        
      #entrada
      $frase = "Estou aprendendo PHP ";
      echo "<p>String teste: $frase</p><br>";

      #saída
      $pos = strpos($frase, "PHP");
      echo "a stringo foi encontrada na posição $pos";
     
        
        
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 