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
      echo "<h3>Funções Strings em PHP: str_replace()</h3>";
      echo "procura uma substring e substitui por outra";
      
      $frase = "Gosto de estudar Matemática";
      printf("<p>$frase</p>");
      $nfrase = str_replace("Matemática", "PHP", $frase);
      printf("<p>$nfrase</p>");

        
    ?>
    <p><br><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 