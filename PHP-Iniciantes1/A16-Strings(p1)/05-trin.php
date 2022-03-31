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
      echo "<h3>Funções Strings em PHP: trin()</h3>";
      echo "<br/>String de teste: ___José_da_Silva___";
      echo "<br/>obs: considere '_' como espaço <br/><br/><br/>";

      $nome = "   Joé da Silva   ";
      $tamNome = (strlen($nome));
      echo "Tamanho da string: $tamNome<br/><br/>";
      $novo = trim($nome);
      $tamNovo = strlen($novo);
      echo "Tamanho da string após aplicar a função trim(): $tamNovo<br/><br/>";
        
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 