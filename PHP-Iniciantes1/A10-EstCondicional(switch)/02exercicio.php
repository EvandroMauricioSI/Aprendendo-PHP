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
        $d = isset($_GET["ds"])?$_GET["ds"]:0;

        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Dia de Estudar!";
                break;
            case 7:
            case 8:
                echo "Descanse!";
                break;
            default:
                echo "Dia inválido! ";

        }

    ?>
    <a href="javascript:history.go(-1)" class="botao">voltar</a>
</div>
</body>
</html>
 