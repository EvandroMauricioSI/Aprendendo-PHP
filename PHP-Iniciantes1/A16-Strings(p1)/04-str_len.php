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
        echo "<h3>Funções Strings em PHP: str_len()</h3>";
        echo "<p>String de teste: 'Curso em Vídeo'</p>";

        $txt = "Curso em Vídeo";
        $tamanho = strlen($txt);
        echo "Tamanho da String '$txt' = $tamanho ";
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 