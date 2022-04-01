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
      echo "<h3>Funções Strings em PHP: strrev()</h3>";
      echo "coloca a string de tras pra frente";
        
      #entrada
      $nome = "evandro mauricio ";
      echo "<p>String teste: $nome</p><br>";

      #saída
      $nome2 = strrev($nome);
      echo  "<p>Aplicando strrev() temos: $nome2</p>";
      #print(strrev($nome));
        
        
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 