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
        echo "<h3>Funções Strings em PHP: str_word_count()</h3>";


        $frase = "Eu vou estudar PHP agora";
        echo "<h4>str_word_count(#frase, 0):</h4>";
        $cont0 = str_word_count($frase, 0); #mostra quantas palavras tem na frase
        echo $cont0;
        
        echo "<h4>str_word_count(#frase, 1):</h4>";
        $cont1 = str_word_count($frase, 1); #criar um vetor e coloca cada palavra em um índice
        print_r($cont1);
        
        echo "<h4>str_word_count(#frase, 2):</h4>";
        $cont2 = str_word_count($frase, 2); #criar um vetor mantendo o posicionamento de cada palavras dentro da string 
        print_r($cont2);
    ?>
    <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
</div>
</body>
</html>
 