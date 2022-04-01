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
      echo "<h3>Funções Strings em PHP: ucfirst</h3>";
      echo "Coloca a PRIMEIRA letra da string e maiúsculo<br><br>";
        $nome = "evAndrO MauRicIo";
        echo "<p>String teste: $nome</p><br>";

        $nome2 = ucfirst($nome);
        echo  "<p>Aplicando uc() temos: $nome2</p>";
        $nome2 = ucfirst(strtolower($nome));
        echo  "<p>Aplicando ucfirt(strtolower()) temos: $nome2</p>";
        
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 