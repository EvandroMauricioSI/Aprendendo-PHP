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
        echo "<h3>Funções Strings em PHP: implode() ou join()</h3>";

        $vetor[0] = "Curso";
        $vetor[1] = "Em";
        $vetor[2] = "Vídeo";
        $texto = implode("-", $vetor); #o IMPLODE pode ser substituída por JOIN e tudo ocorrerar da mesma forma
        print($texto);
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 