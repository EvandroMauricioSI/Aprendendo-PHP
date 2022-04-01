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
      echo "<h3>Funções Strings em PHP: str_pad()</h3>";
      echo "";
      
      $nome = "Evandro";
      $novo = str_pad($nome, 50, " ", STR_PAD_RIGHT);
          # STR_PAD_RIGHT = alinhamento à direita
          # STR_PAD_CENTEER = alinhamento centralizado 
          # STR_PAD_LEFT = alinhamento à esquerda
      print("$novo é meu nome");
        
    ?>
    <p><br><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 