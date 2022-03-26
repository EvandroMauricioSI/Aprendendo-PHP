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
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]: date("Y");
        $sexo = isset($_GET["ano"])?$_GET["ano"]:"[não informado]";
        $idade = date("Y") - $ano;
        $idade = ($idade==0) ? "[indefinido]" : $idade;
        echo "$nome é $sexo  e tem $idade anos.";
    ?>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <a href="02exercicio.html">[voltar]</a>
</div>
</body>
</html>
 