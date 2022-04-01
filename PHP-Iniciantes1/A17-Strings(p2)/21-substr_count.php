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
      echo "<h3>Funções Strings em PHP: substrs_cont()</h3>";
      echo "conta quantas vezes a substring aparece na string";
        
      $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP ";
      echo "<p>String teste: $frase</p><br>";
      $cont = substr_count($frase, "PHP");

      #saída
      
      echo "PHP encontrado $cont vezes";
     
        
        
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 