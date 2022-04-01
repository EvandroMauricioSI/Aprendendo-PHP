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
      echo "<h3>Funções Strings em PHP: str_repeat()</h3>";
      echo "repete a string quantas vezes o usuário desejar";
      
      $txt = str_repeat("Php", 5);
      print("<p>O texto gerado foi $txt</p>");
      print(str_repeat(" -", 30));
        
    ?>
    <p><br><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 