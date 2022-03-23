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
        $d = isset($_GET["uf"])?$_GET["uf"]:0;

        switch ($d) {
            case 1:
                echo "Região NORTE  ";
                break;
            case 2:
                echo "Região NORDESTE  ";
                break;
            case 3:
                echo "Região CENTRO-OESTE   ";
                break;
            case 4:
                echo "Região SUDESTE   ";
                break;
            case 5:
                echo "Região SUL   ";
                break;
            default:
                echo "Dados Inválido ";

        }

    ?>
    <a href="javascript:history.go(-1)" class="botao">voltar</a>
</div>
</body>
</html>
 